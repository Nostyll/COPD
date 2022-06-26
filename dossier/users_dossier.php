<div id="userlist_wapper">
<?
$result=mysql_query("SELECT * FROM inlogsysteem");
while($rows=mysql_fetch_assoc($result)){
	if ($rows['status'] == 2){
echo'
<div id="userlist">
<div id="user_id">'.$rows['id'].'</div>
<div id="users">'.$rows['username'].'</div>
<div id="useractie">
<a href="?p=dossier_insert&id='.$rows['id'].'"><img src="COPD/../images/report_add.png" width="16" height="16"></a>
<a href="?p=user_dossier&id='.$rows['id'].'"><img src="COPD/../images/report_go.png" width="16" height="16"></a></div>
<div style="clear:both;"></div>
</div>';
	}
}
?>

</div>