<?
    include("config.php");
if($_POST['login'])
{
    $username = addslashes($_POST['username']);
    $md5_ww = md5($_POST['password']);
    $sql = "SELECT * FROM `inlogsysteem` WHERE `username` = '".$username."' AND `password` = '".$md5_ww."'";
    $query = mysql_query($sql);
    
    if(mysql_num_rows($query) == 1)
    {
        $username = addslashes($_POST['username']);
        $md5_ww = md5($_POST['password']);
        $statussql = "SELECT * FROM `inlogsysteem` WHERE `username` = '".$username."' AND `password` = '".$md5_ww."'";
        $statusquery = mysql_query($statussql);
        $status = mysql_fetch_assoc($statusquery);
        
           	switch($status['status']){
			case "2":
				$_SESSION['login'] = "1";
                $_SESSION['status'] = "2";
                $_SESSION['naam'] = $username;
                $_SESSION['id'] = $status['id'];
			break;
			case "4":
			$_SESSION['login'] = "1";
                $_SESSION['status'] = "4";
                $_SESSION['naam'] = $username;
                $_SESSION['id'] = $status['id'];
			break;
			case "5":
			$_SESSION['login'] = "1";
                $_SESSION['status'] = "5";
                $_SESSION['naam'] = $username;
                $_SESSION['id'] = $status['id'];
			break;
		}
        
        header("Location: ".$_SERVER['PHP_SELF']."");
    }

    else
    {
        echo "Gebruikersnaam en/of wachtwoord verkeerd<br><br>";
    }
}
    echo "
    <table border=\"0\">
    <form method=\"post\">
    <tr>
        <td>Username</td>
        <td><input type=\"text\" name=\"username\" size=\"15\"></td>
    </tr>
    <tr>    
        <td>Password</td>
        <td><input type=\"password\" name=\"password\" size=\"15\"></td>
    </tr>
    <tr>
        <td align=\"right\"><input type=\"button\" name=\"registreer\" value=\"Registreer!\" onClick=\"window.open('registreer.php','Registreer_Popup','width=250,height=300,scrollbars=yes')\"></td>
        <td align=\"right\"><input type=\"submit\" name=\"login\" value=\"Login!\"></td>
    </tr>
    </form>
    </table>
    ";
}
ob_end_flush();
?>