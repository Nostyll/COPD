<?php
if ($_SESSION['login'] == "1"){
//de links
include ("pm_head.php");
?>
<table width="600">
<?
//kijk of er een bericht bekeken moet worden
if (isset($_GET["m"])){
$nid = $_GET["m"];
//haal het bericht alleen uit de db als hij bestemd is voor de gebruiker die hem opvraagd
$result = mysql_query("SELECT * FROM `pm` WHERE `to` = '".$_SESSION['naam']."' && `id` = '$nid' ");
while (list($id, $from, $ipsender, $to, $date, $time, $sub, $mes, $read) =
mysql_fetch_row($result)){
//zet het veld read in je db op 1 voor dit bericht omdat hij gelezen is
mysql_query("UPDATE pm SET read = '1' WHERE id = '$id'");
?>
<tr>
<td>
<b>Van</b>: <? echo $from?>
</td>
</tr>
<tr>
<td>
<b>Datum</b>: <? echo $date ?> <? echo $time ?>
</td>
</tr>
<tr>
<td>
<b>Naar</b>: <? echo $to ?>
</td>
</tr>
<tr>
<td>
<b>Onderwerp</b>: <? echo $sub ?>
</td>
</tr>
<tr>
<td align="center">
<b>Bericht</b>:<br><br>
<textarea readonly rows="5" cols="71"><? echo $mes?></textarea>
</tr>
<tr>
<td align="center">
<form  method="get">
<input type="hidden" name="to" value=<? echo $from ?>>
<input type="hidden" name="id" value=<? echo $id ?>>
<input type="submit" value="Reply">
</td>
</tr>
</table>
</form>
<?
}
}else{
//als $_GET["m"] niet een waarde heeft ga dan terug naar je inbox
?>
<script>window.location.href="?p=pm";</script>
<?
}
}else{
	header("loaction: /COPD/?p=home");
}
?>
</body>
</html>