<?
    include("beveiliging-m.php");
?>
    <p><b>De Ledenlijst</b></p>
    <table border="0" cellpadding="1" cellspacing="0" width="70%">
        <tr>
            <td>Username</td>
            <td>Rank</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <?
            $query = mysql_query("SELECT * FROM `inlogsysteem`");

            while($rij = mysql_fetch_assoc($query))
            {
                echo "
                <tr>
                    <td>".ucfirst($rij['username'])."</td>
                    <td>";
                    if($rij['status'] == "5") { echo "<span style=\"color:#F00000;\"><b>Admin</b></span>"; }
                    if($rij['status'] == "4") { echo "<span style=\"color:#102030;\"><b>Arts</b></span>"; }
					if ($rij['status'] == "3"){
						echo "<span style=\"color:#00F\"><b>Verpleegkundige</b></span>";}
                    if($rij['status'] == "2") { echo "Normale Member"; }
                echo "</td>
                </tr>
                ";
            }
        ?>
    </table>