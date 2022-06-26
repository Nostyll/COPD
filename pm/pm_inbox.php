<?php
if ($_SESSION['login'] == "1"){
//zet de links boven de pagina
include ("pm/pm_head.php");
?>
<table width="600">
<tr>
<td width="1%">
</td>
<td width="20%">
Van:
</td>
<td width="25%">
Datum
</td>
<td width="48%">
Onderwerp
</td>
</tr>
<form action="" method="post">
<?
//kijk of er iets gebeurt is met je berichten
if (isset($_POST["what"])){
//wat te doen met de geselecteerde berichten
$what =  $_POST["what"];
//voor elke variabele in de $_POST array
foreach ($_POST as $mid){
//bekijk of die een waarde heeft die numeriek is
if (is_numeric($mid) == true){
//kijk of die een waarde heeft
if (isset($mid)){
//zoja kijk wat de waarde van $what is
switch ($what) {
//als die delete is
case "delete":
//bekijk wat de voorkeur is die de gebruiker heeft
$check_dwd = mysql_query("SELECT * FROM pmoptions WHERE user = '".$_SESSION['naam']."'");
while (list($id, $user, $alert, $buddy, $block, $dwd) =
mysql_fetch_row($check_dwd)){
//als de gebruiker wilt dat de berichten meteen worden verwijderd worden ze uit de db gehaald
if ($dwd == "delete"){
$query = "DELETE FROM pm WHERE id = '$mid'";
mysql_query($query);
}else{
//ander wil de gebruiker dat ze in de prullebak komen
$query = "UPDATE pm SET read = '-1' WHERE id = '$mid'";
mysql_query($query);
}
}
break;
//als $what de waarde unread heeft markeer ze dan ongelezen
case "unread";
$query = "UPDATE pm SET read = '0' WHERE id = '$mid'";
mysql_query($query);
break;
//als $what de waarde read heeft markeer ze dan gelezen
case "read";
$query = "UPDATE pm SET read = '1' WHERE id = '$mid'";
mysql_query($query);
break;
}
}else{}
}else{}
}
}else{}
$i = 0;
//bekijk of er berichten zijn voor de gebruiker
//zoja echo die dan
$result = mysql_query("SELECT * FROM pm WHERE `to` = '".$_SESSION['naam']."' && `read` != -1 ORDER by id DESC");
while (list($id, $from, $ipsender, $to, $date, $time, $sub, $mes, $read) =
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
Wat wil je doen met de geselecteerde berichten?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="what">
<option value="delete">Verwijder</option>
<option value="unread">Markeer ongelezen</option>
<option value="read">Markeer gelezen</option>
</select>
<input type="submit" value="Go">
</td>
</tr>
</table>
</form><?
}else{
header("location: /COPD/?p=home");	
}
?>