<? if(isset($_POST['wijzig_pass']))
    {
        if(strlen($_POST['password']) < 6 || strlen($_POST['password']) > 40)
        {
            echo "<b><i>Het wachtwoord is minder als 6 of meer als 40 tekens</i></b><br><br>";
            echo "Klik <a href=\"javascript:history.back(-1)\">hier</a> om terug te gaan";
        }
        
        else
        {
            $sql = "UPDATE `inlogsysteem` SET `password` = '".md5($_POST['password'])."' WHERE `id` = '".$_SESSION['id']."'";
            mysql_query($sql);
            echo "wachtwoord verandert";
        }
    }
    
    else
    {
        echo "<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\">";
        echo "<form action=\"\" method=\"post\">";
        echo "
            <tr>
                <td>Nieuwe Password</td>
                <td><input type=\"password\" name=\"password\"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align=\"right\"><input type=\"submit\" name=\"wijzig_pass\" value=\"Wijzig!\"></td>
            </tr>
        ";
        echo "</form>";
        echo "</table>";
        echo "<span style=\"font-size:8pt;\">* Niet op 'Enter' drukken maar<br> met de muis klikken op 'Wijzig!'</span>";

    }