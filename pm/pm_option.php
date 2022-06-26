<?php
if ($_SESSION['login'] == "1"){
//de links
include ("pm_head.php");
//check of je al een record hebt in de tabel 'pmoptions'
$check_excist = mysql_query("SELECT * FROM pmoptions WHERE user = '".$_SESSION['naam']."'");
$num = mysql_num_rows($check_excist);
if ($num == "0"){
//als er geen record is maak er eentje aan
$make_row = mysql_query("INSERT INTO pmoptions (`user`) VALUES ('".$_SESSION['naam']."')");
}else{
//anders doe je lekker nix!
}
//haal de voorkeuren van de gebruiker uit de db
while (list($id, $user, $alert, $buddy, $block, $dwd) =
mysql_fetch_row($check_excist)){

//bekijk of het hoofd formulier verstuurd is, update de db
if (isset($_POST["submit"])){
$update_row = mysql_query("UPDATE pmoptions SET alert = '$_POST[alert]',dwd = '$_POST[what]' WHERE user = '".$_SESSION['naam']."'");
}

//als er een buddy toegevoegd is update de db
if (isset($_POST["new_buddy"])){
//kijk of die buddy wel bestaat
$buddy_check = mysql_query("SELECT * FROM inlogsysteem WHERE username = '$_POST[new_buddy]' LIMIT 1");
if (mysql_num_rows($buddy_check) == '1'){
//als die bestaat maak de nieuwe buddy lijst aan
$new_buddy = $buddy;
$new_buddy .= $_POST["new_buddy"];
$new_buddy .= "|";
//en zet hem in de db
$buddy_update = mysql_query("UPDATE pmoptions SET buddys = '$new_buddy' WHERE user = '".$_SESSION['naam']."'");
}else{
//als die buddy niet bestaat geef een waarschuwing
?>
<script language="javascript">alert("De gebruiker die je wilt toevoegen aan je vriendenlijst bestaat niet!\n\rDus probeer het opnieuw");</script>
<?
}
}else{}
//!!! dit block weghalen als je geen blocklijst wilt!!!
//als er een block is toegevoegd update de db
if (isset($_POST["new_block"])){
//kijk of die block wel bestaat
$block_check = mysql_query("SELECT * FROM inlogsysteem WHERE username = '$_POST[new_block]' LIMIT 1");
if (mysql_num_rows($block_check) == '1'){
//als die bestaat maak de nieuwe block lijst aan
$new_block = $block;
$new_block .= $_POST["new_block"];
$new_block .= "|";
//en zet hem in de db
$block_update = mysql_query("UPDATE pmoptions SET blocked = '$new_block' WHERE user = '".$_SESSION['naam']."'");
}else{
//als de block niet bestaat geef een waarschuwing
?>
<script language="javascript">alert("De gebruiker die je wilt toevoegen aan je blocklijst bestaat niet!\n\rDus probeer het opnieuw");</script>
<?
}
}else{}
//!!!tot hier weg halen als je geen blocklijst wilt!!!

//als er een buddy weg is gehaald
if (isset($_POST["del_buddy"])){
//maak de nieuwe lijst aan
$del_buddy = str_replace($_POST["del_buddy"], "", "$buddy");
//en zet hem in de db
$buddy_update2 = "UPDATE pmoptions SET buddys = '$del_buddy' WHERE user = '".$_SESSION['naam']."'";
mysql_query($buddy_update2);
}else{}

//!!! dit block weghalen als je geen blocklijst wilt!!!
//als er een block weg is gehaald
if (isset($_POST["del_block"])){
//maak de nieuwe lijst aan
$del_block = str_replace($_POST["del_block"], "", "$block");
//en zet hem in de db
$block_update2 = mysql_query("UPDATE pmoptions SET blocked = '$del_block' WHERE user = '".$_SESSION['naam']."'");
}else{}
//!!!tot hier weg halen als je geen blocklijst wilt!!!

}
//haal de info opnieuw uit de db, omdat er veranderingen uitgevoerd kunnen zijn
$get_info = mysql_query("SELECT * FROM pmoptions WHERE user = '".$_SESSION['naam']."'");
while (list($id, $user, $alert, $buddy, $block, $dwd) =
mysql_fetch_row($get_info)){
//kijk welke waarde $alert heeft
switch ($alert) {
case "1":
$checked1 = "checked";
$checked2 = "";
break;
case "0":
$checked2 = "checked";
$checked1 = "";
break;
}
//kijk welke waarde $dwd heeft
switch ($dwd) {
case "delete":
$selected1 = "selected";
$selected2 = "";
break;
case "trash":
$selected2 = "selected";
$selected1 = "";
break;
}
//maak de pagina die de gebruiker ziet
?>
<table width="600">
<tr>
<th>
Personal Messages opties
</th>
</tr>
</table>
<form method="post" name="option">
<table width="600">
<tr>
<td>
Wat wil je doen met berichten die je hebt verwijderd
</td>
<td>
<select name="what">
<option value="trash" <? echo $selected2 ?>>In de prullebak</option>
<option value="delete"  <? echo $selected1 ?>>Verbranden</option>
</select>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Verander">
</td>
</tr>
</table>
</form>
<form method="post">
<table width="600">
<tr>
<td colspan="2">
<?
//maak de lijst van vrienden aan
$buddys = explode("|",$buddy);
$buddys_count = count($buddys) - "1";
?>
Je vrienden lijst<br>
<textarea rows="5" cols="71">
<?
if ($buddys_count >= "0"){
for ($i=0;$i<$buddys_count;$i++){
echo $buddys[$i];
echo "\n";
}
}else{}
?>
</textarea><bR>
Voeg een vriend toe<br>
<input type="text" name="new_buddy"><input type="submit" value="Voeg toe">
</form>
<form method="post">
Verwijder een vriend<br>
<select name="del_buddy">
<?
if ($buddys_count >= "0"){
for ($i=0;$i<$buddys_count;$i++){
?>
<option value="<? echo $buddys[$i]?>|"><? echo $buddys[$i]?></option>
<?
}
}else{}
?>
</select><input type="submit" value="Verwijder">
</form>
</td>
</tr>
<?
//!!! vanaf hier weg halen als je geen blocklijst wilt!!!
?>
<tr>
<td colspan="2">
<form method="post">
<?
//maak een lijst met je block lijst
$blocks = explode("|",$block);
$blocks_count = count($blocks) - "1";
?>
Je block lijst<br>
<textarea rows="5" cols="71"><?
if ($blocks_count >= "0"){
for ($i=0;$i<$blocks_count;$i++){
echo $blocks[$i];
echo "\n";
}
}else{}
?>
</textarea><br>
Voeg een block lijst toe<br>
<input type="text" name="new_block"><input type="submit" value="Voeg toe">
</form>
<form method="post">
Verwijder een block lijst<br>
<select name="del_block">
<?
if ($blocks_count >= "0"){
for ($i=0;$i<$blocks_count;$i++){
?>
<option value="<? echo $blocks[$i]?>|"><? echo $blocks[$i]?></option>
<?
}
}else{}
?>
</select><input type="submit" value="Verwijder"></form>

</td>
</tr>
<?
//!!!tot hier weg halen als je geen blocklijst wilt!!!
?>
</table>
<?
}
}else{
	header("location: /COPD/?p=home");
}
?>
