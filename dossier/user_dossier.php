<? $valid_prices = array(is_numeric($_GET['id']));
if(!in_array($_GET['id'], $valid_prices)){
   echo("ERROR");
}else{
	if (isset($_GET['id'])){
		if ($_SESSION['login'] == "1" && $_SESSION['status'] == "2" or "5"){
echo '<div class="dossier_soep_titel">
        	ELEKTRONISCH DOSSIER
</div>';
echo '<div class="dossier_wrapper">';
$result=mysql_query("SELECT * FROM dossier WHERE uid='".$_GET['id']."' ORDER BY date DESC");
// Start looping rows in mysql database.
while($rows=mysql_fetch_array($result)){
echo '
  <div class="dossier_datum_wrapper">
        <div class="dossier_datum_titel">'.$rows['date'].'</div>
    </div>
  <div class="dossier_soep_wrapper">
<div class="dossier_soep_rapport">
			<div class="dossier_soep_rapport_wrapper">
            	<div class="dossier_soep_rapport_wrapper_links tooltip">S</div>
            	<div class="dossier_soep_rapport_wrapper_rechts">
                    <p>'.$rows['s'].'</p>
                </div>
            </div>
			<div class="dossier_soep_rapport_wrapper">
            	<div class="dossier_soep_rapport_wrapper_links">O</div>
            	<div class="dossier_soep_rapport_wrapper_rechts">
                    <p>'.$rows['o'].'</p>
                </div>
            </div>
			<div class="dossier_soep_rapport_wrapper">
            	<div class="dossier_soep_rapport_wrapper_links">E</div>
            	<div class="dossier_soep_rapport_wrapper_rechts">
                    <p>'.$rows['e'].'</p>
                </div>
            </div>
			<div class="dossier_soep_rapport_wrapper">
            	<div class="dossier_soep_rapport_wrapper_links">P</div>
            	<div class="dossier_soep_rapport_wrapper_rechts">
                    <p>'.$rows['p'].'</p>
                </div>
            </div>
        </div>
    </div>
  <div class="dossier_initialen_wrapper">
    <div class="dossier_initialen_titel">'.$rows['initial'].'</div>
    </div>
	<div style="clear:both"></div>
';
}
echo'</div>
<div style="clear:both"></div>';
}else{
header("location: /COPD/?p=home");	
}
	}
}
		?>