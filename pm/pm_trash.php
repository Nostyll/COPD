<?php
if ($_SESSION['login'] == "1"){
//de links
include ("pm_head.php");
?>
<table width="600">
<tr>
<td width="1%">
</td>
<td width="20%">
Van:
</td>
<td width="25%">
Datum:
</td>
<td width="49%">
Onderwerp:
</td>
</tr>
<form method="post">
<?
//kijk of $_POST["what"] een waarde heeft
if (isset($_POST["what"])){
//zet hem om in een makkelijkere variabele
$what =  $_POST["what"];
//Doe voor elke variabele in de array $_POST wat hieronder staat met de naam $mid voor die variabele
foreach ($_POST as $mid){
//kijk of $mid een waarde heeft dat een cijfer is
if (is_numeric($mid) == true){
//als die $mid een waarde heeft doe dat het volgende
if (isset($mid)){
//bekijk wat de waarde van de variabele $what is
switch ($what) {
//als die delete is gooi die bericht dan maar weg
case "delete":
$query = "DELETE FROM pm WHERE id = '$mid'";
mysql_query($query);
break;
//als die bak is zet ze dan terug in de inbox
case "back";
$query = "UPDATE pm SET read = '1' WHERE id = '$mid'";
mysql_query($query);
break;
}
}else{}
}else{}
}
}else{}
$i = 0;
//haal de berichten uit de db die in de prullenbak zitten
$result = mysql_query("SELECT * FROM pm WHERE `to` = '".$_SESSION['naam']."' && `read` = -1 ORDER by date DESC");
while (list($id, $from, $ipsender, $to, $date, $time, $sub, $mes) =
mysql_fetch_row($result)){
?>
<tr>
<td>
<input type="checkbox" name="<? echo $i?>" value="<? echo $id ?>">
</td>
<td>
<a href="?p=pm_new&to=<? echo $from ?>"><? echo $from ?></a>
</td>
<td>
<? echo $date ?> <? echo $time ?>
</td>
<td>
<a href="?p=pm_read&m=<? echo $id ?>"><? echo $sub ?></a>
</td>
</tr>
<?
$i++;
}
?>
</table>
<table width="600">
<tr>
<td>
Wat wil je doen met de geselecteerde berichte?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="what">
<option value="delete">Verbranden</option>
<option value="back">Zet ze maar terug</option>
</select>
<input type="submit" value="Go">
</td>
</tr>
</table>
</form>
<?
}else{
	header("location: /COPD/?p=home");
}
?>