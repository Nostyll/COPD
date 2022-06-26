<h1>dagboek</h1>
<?php 
if ($_SESSION['login'] == "1"){
$sql="SELECT * FROM guestbook WHERE uid='".$_SESSION['id']."' ORDER BY datetime ASC";
$result=mysql_query($sql);
while($rows=mysql_fetch_array($result)){
?>

<table width="400" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td valign="top">bericht</td>
<td valign="top">:</td>
<td><? echo $rows['comment']; ?></td>
</tr>
<tr>
<td valign="top">Datum/Tijd </td>
<td valign="top">:</td>
<td><? echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<? 
}
?>
<? 
if (isset($_POST['Submit'])){
$datetime=date("d-m-y h:i:s"); //date time
$text = $_POST['comment'];
$sql="INSERT INTO guestbook(uid, comment, datetime)VALUES('".$_SESSION['id']."', '$text', '$datetime')";
$result=mysql_query($sql);

//check if query successful 
if($result){
header("location: /COPD/?p=diary");
}

else {
echo mysql_error();
}
}
?>
<form method="post">
<td>
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td valign="top">Bericht</td>
<td valign="top">:</td>
<td><textarea name="comment" cols="40" rows="3" id="comment"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<?
}else{
header("location: /COPD/?p=home");	
}
?>