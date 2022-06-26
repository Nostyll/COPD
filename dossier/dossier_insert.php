<? $valid_prices = array(is_numeric($_GET['id']));
if(!in_array($_GET['id'], $valid_prices)){
   echo("ERROR");
}else{
	if ($_SESSION['login'] == "1" && $_SESSION['status'] == "3" or "4" or "5"){
	if(isset($_POST['Submit']) && ($_GET['id'])){
		if (!empty($_POST['S']) && !empty($_POST['O']) && !empty($_POST['P']) && !empty($_POST['ini'])){
			if ($_POST['medi'] == "medicatie"){
				$recept = 'R/&nbsp;'.$_POST['medic'].'&nbsp;'.$_POST['sterkte'].'&nbsp;'.$_POST['sterk'].'<br>';
				$recept .='S/&nbsp;'.$_POST['gebruik'].'<br><br>';
			}else{
			$recept ="";	
			}
			if (empty($_POST['E'])){
				$E = "COPD";
			}else{
			$E = $_POST['E'];	
			}
			$P = $_POST['P'].$recept;
			$insert = mysql_query("INSERT INTO `copd`.`dossier` (`uid` ,`date` ,`s` ,`o` ,`e` ,`p` ,`initial`)VALUES ('".mysql_real_escape_string($_GET['id'])."',  '".date("d-M-Y")."',  '".$_POST['S']."',  '".$_POST['O']."',  '".$E."',  '".$P."', '".$_POST['ini']."'
);");
if ($insert){
	?>
    <script language="javascript">
//als de bebruiker gemeld wilt worden bij nieuwe berichten. geef een bericht dat je nieuwe berichten hebt
if (confirm("De data is toegevoegt\n Klik op 'Ok' om terug te gaan.")) {
location.href="?p=user_dossier&id=<? echo $_GET['id']; ?>";
}
else
{
}
</script>
    <?
}else{
echo mysql_error();	
}
		}else{
		echo "er is een veld niet ingevult";
			echo'<a href="javascript:history.back(-1)">Terug</a>';	
		}
		
	}else{
?>
<table border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td width="60"><strong>Voeg toe aan dosier.</strong></td>
</tr>
<tr>
<td><form method="post">
<table border="0">
<tr>
</tr>
<tr>
<td>S</td>
<td width="58">:</td>
<td width="557"><textarea name="S" cols="60" rows="5" style="resize:none;"></textarea></td>
</tr>
<tr>
<td>O</td>
<td>:</td>
<td><textarea name="O" cols="60" rows="5" style="resize:none;"></textarea></td>
</tr>
<tr>
<td>E</td>
<td>:</td>
<td><textarea name="E" cols="60" rows="5" style="resize:none;"></textarea></td>
</tr>
<tr>
<td>P</td>
<td>:</td>
<td><textarea name="P" cols="60" rows="5" style="resize:none;"></textarea></td>
</tr>
</table>
<table width="471" border="0">
<tr>
<td width="130">&nbsp;</td>
<td width="180">&nbsp;</td>
</tr>
<td>Medicatie gebruiken?</td>
<td>
<input name="medi" type="checkbox" value="medicatie" checked></td>
</tr>
<tr>
<td>Medicatie Naam:</td>
<td><input name="medic" type="text"></td>
</tr>
<tr>
<td>Sterkte:</td>
<td><input name="sterkte" type="text" size="10">
<select name="sterk">
<option value="mg">mg</option>
<option value="g">g</option>
<option value="%">&#37;</option>
</select>
</td>
</tr>
<tr>
<td>Gebruik:</td>
<td><input name="gebruik" type="text"></td>
</tr>
<tr>
<td>handige link:</td>
<td><a href="http://www.fk.cvz.nl/" title="kompas" target="_blank">Farmacotherapeutisch Kompas</a></td>
</tr>
<tr>
<td width="130">&nbsp;</td>
<td width="180">&nbsp;</td>
</tr>
<tr>
<td width="130">&nbsp;</td>
<td width="180">&nbsp;</td>
</tr>
<tr>
<td>ondertekenen:</td>
<td><input name="ini" type="text">(alleen initialen)</td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<?
	}
}
}
?>