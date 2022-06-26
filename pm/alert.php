<? //check of je nieuwe berichten hebt
$check_new_pm = mysql_query("SELECT * FROM `pm` WHERE `to` = '".$_SESSION['naam']."' && `read` = '0' ");
//maak een variabele aan waarin staat hoeveel nieuwe berichten je hebt
$new_pm = mysql_num_rows($check_new_pm);
//check of je nieuwe berichten hebt die nog niet gemeld zijn aan jouw
$check_not_alerted = mysql_query("SELECT * FROM `pm` WHERE `to` = '".$_SESSION['naam']."' && `read` = '0' && `alerted` = '0' " );
//maak een variabele aan waarin staat hoeveel ongemelden nieuwe berichten er zijn
$not_alerted = mysql_num_rows($check_not_alerted);
//maak verbinding met de tabel pmoptions
$check_alert = mysql_query("SELECT * FROM pmoptions WHERE `user` = '".$_SESSION['naam']."'");
//haal de opties van de gebruiken uit de db
while (list($id, $user, $alert, $buddy, $block, $dwd) =
mysql_fetch_row($check_alert)){
//check of er niet gemelde berichten zijn en of de gebruiker wilt dat er een melding komt
if ($not_alerted > "0" && $alert == "1"){
//zoja haal de informatie van de ongemelde berichten uit de db
while (list($id, $from, $ipsender, $to, $date, $time, $sub, $mes, $read, $alerted) =
mysql_fetch_row($check_not_alerted)){
//en verander ze dat ze wel gemeld zijn
$update_alerted = mysql_query("UPDATE pm SET `alerted` = '1' WHERE `id` = '$id'");
}
?>
<script language="javascript">
//als de bebruiker gemeld wilt worden bij nieuwe berichten. geef een bericht dat je nieuwe berichten hebt
if (confirm("Je hebt <? echo $new_pm ?> nieuwe berichten\n Klik op 'Ok' om naar je inbox te gaan\n Of op 'Cancel' om op deze pagina te blijven")) {
location.href="?p=pm";
}
else
{
}
</script>
<?
}else{}
}