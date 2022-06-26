
<table width="100%">
<tr>
<th>
Selecteer een vriend
</th>
</tr>
<tr>
<td align="center">
<div style="overflow-y: hidden; height: 180px;" width="90%">
<?
include("../config.php");
if ($_SESSION['login'] == "1"){
//maak een lijst met je vrienden
//zodat je die naam in het bericht kunt toevoegen
$get_info = mysql_query("SELECT * FROM pmoptions WHERE user = '".$_SESSION['naam']."'");
while (list($id, $user, $alert, $buddy, $block, $dwd) =
mysql_fetch_row($get_info)){
$buddys = explode("|",$buddy);
$buddys_count = count($buddys) - "1";
if ($buddys_count >= "0"){
for ($i=0;$i<$buddys_count;$i++){
echo "<font size=\"4\"><a href=\"#\" onclick=\"opener.document.send.to.value='$buddys[$i]'\">$buddys[$i]</a></font><br />";
}
}else{}
}
}else{
	header("location: /COPD/?p=home");
}
?>
</div>
</td>
</tr>
</table>