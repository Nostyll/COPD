<?php
if ($_SESSION['login'] == "1"){
//include de links
include ("pm/pm_head.php");
//kijk of het formulier al verstuurd is
if (!isset($_POST["submit"])){
//bekijk of de ontvanger al bekent is
if (isset($_GET["to"])){
//zo ja geef $to de waarde die meegegeven is
$to = $_GET["to"];
}else{
//zo nee maak de variabele $to maar laat hem leeg
$to = "";
}
//kijk of er een id van een bericht is meegegeven, zodat je informatie daaruit kan krijgen
if (isset($_GET["id"])){
//zo ja geef $id de waarde van $_GET["id"]
$id = $_GET["id"];
//haal de info van het bericht uit de db
$result = mysql_query("SELECT * FROM pm WHERE to = '".$_SESSION['naam']."' && id = '$id' " , $db);
//zet de info in variabele
while (list($mid, $mfrom, $mipsender, $mto, $mdate, $mtime, $msub, $mmes) =
mysql_fetch_row($result)){
//maak de titel aan
$rsub = "re:";
$rsub .= $msub;
//maak het bericht aan
$rmes = "\n\r\n\rOriginal Message:\n";
$rmes .= $mmes;
}
}else{
//als er geen id van een bericht meegegeven is maak de benodigde variabele wel aan maar geef ze geen waarde
$rsub = "";
$rmes = "";
}
?>
<table width="600">
<tr>
<td width="15%">
<form method="post" name="send">
<b>Ontvanger</b>:
</td>
<td width="85%">
<input type="text" name="to" value="<? echo $to ?>"><input type="button" value="Selecteer vriend" onclick="window.open('pm/pm_buddy.php','pm_buddy','width=200,HEIGHT=200,scrollbars=no,left=0,top=0,screenX=0,screenY=0')">
</td>
</tr>
<tr>
<td>
<b>Titel</b>:
</td>
<td>
<input type="text" name="sub" value="<? echo $rsub ?>" size="80">
</td>
</tr>
<tr>
<td align="center" colspan="2">
<b>Bericht</b>:<br><br>
<textarea rows="5" name="mes" cols="71"><? echo $rmes?></textarea>
</tr>
<tr>
<td align="center" colspan="2">
<input type="submit" name="submit" value="Send">
</td>
</tr>
</table>
</form>
<?
//als er wel een bericht verstuurd is, doe het volgende
}else{
//kijk of de benodigde input velden ingevult zijn
if ($_POST["to"] != "" && $_POST["mes"] != ""){
//zet de variabele om naar een makkelijkere variabele
$to = $_POST["to"];
$mes = $_POST["mes"];
//kijk of een optioneel veld ingevuld is
if  ($_POST["sub"] != ""){
//zoja zet hem om naar een makkelijkere variabele
$sub = $_POST["sub"];
}else{
//zo nee geef de variabele de waarde 'Geen'
$sub = "Geen";
}
//kijk of je geblocked bent door de ontvanger
//!!!Dit block weghalen als je geen block list wilt hebben!!!
$blocked = "0";
$check_blocklist = mysql_query("SELECT * FROM pmoptions WHERE user = '".$_SESSION['naam']."' LIMIT 1");
while (list($id, $user, $alert, $buddy, $block, $dwd) =
mysql_fetch_row($check_blocklist)){
$blocks = explode("|",$block);
$blocks_count = count($blocks) - "1";
if ($blocks_count >= "0"){
for ($i=0;$i<$blocks_count;$i++){
if ($blocks[$i] == $uuser){
$blocked++;
}else{
}
}
}else{}
}
if ($blocked == "0"){
//!!!tot hier weg halen als je geen blocks wilt!!!
//de datum
$date =  date("j-n-Y");
//de tijd
$time =  date("G:i:s");
//ip adres vand e verstuurder die de ontvanger niet kan zien, alleen jij
$ipsender = $_SERVER["REMOTE_ADDR"];
//verstuur het bericht naar de ontvanger
$query = "INSERT INTO pm (`from`, `ipsender`, `to`, `date`, `time`, `sub`, `mes`) VALUES ('".$_SESSION['naam']."','$ipsender','$to','$date','$time','$sub','$mes')";
mysql_query($query);
//!!!als je geen blocks wilt haal deze '{' dan ook nog fftjes weg!!!
}
//!!!hierna laten staan dat heeft niets meer met het block lijst te maken!!!
?>
<table width="600">
<tr>
<td>
Jouw bericht naar <? echo $to ?> is succesvol verzonden!<br>
<a href="?p=pm">Klik hier</a> om terug te gaan naar je inbox.
</td>
</tr>
</table>
<?
}else{
?>
<table width="600">
<tr>
<th>
Je hebt het formulier niet volledig ingevult, dus is je bericht niet verstuurt<br>
<a href="?p=pm">Klik hier</a> om het nog een keer te proberen.
</th>
</tr>
</table>
<?
}
}
}else{
header("location: /COPD/?p=home");	
}
?>
