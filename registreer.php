<?
    include("config.php");
?>
<html>

<head>
    <title>Registreer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?
function check_mail($email)
{
    $email_host = explode("@",$email);
    $email_host = $email_host['1'];
    $email_domein = gethostbyname($email_host);
    
    if($email_domein !== $email_host && eregi("^[0-9a-z]([-_.~]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,4}$",$email))
    {
        $geldig = 1;
    }
    
    return $geldig;
}

if($_POST['registreer'])
{
    $username_query = mysql_query("SELECT * FROM `inlogsysteem` WHERE `username` = '".addslashes($_POST['username'])."'");
    $email_query = mysql_query("SELECT * FROM `inlogsysteem` WHERE `email` = '".addslashes($_POST['email'])."'");
    $check_email = check_mail($_POST['email']);
    if($_POST['username'] == "" || $_POST['password'] == "" || $_POST['password2'] == "" || $_POST['email'] == "" || $_POST['password'] !== $_POST['password2'] || mysql_num_rows($username_query) >= 1 || mysql_num_rows($email_query) >= 1 || $check_email !== 1 || strlen($_POST['password']) < 6 || strlen($_POST['username']) < 6 || strlen($_POST['password']) > 40 || strlen($_POST['username']) > 40)
    {
        echo "<a href=\"javascript:history.back(-1)\">Terug</a><br><br>";
        
        echo "<ol>";
        
        if($_POST['username'] == "")
        {
            echo "<li>Bij <b>USERNAME</b> is niks ingevuld</li>";
        }
        if($_POST['password'] == "")
        {
            echo "<li>Bij <b>PASSWORD</b> is niks ingevuld</li>";
        }
        if($_POST['password2'] == "")
        {
            echo "<li>Bij <b>PASSWORD [Bevestiging]</b> is niks ingevuld</li>";
        }
        if($_POST['email'] == "")
        {
            echo "<li>Bij <b>EMAIL</b> is niks ingevuld</li>";
        }
        if($_POST['password'] !== $_POST['password2'])
        {
            echo "<li>De <b>PASSWORDS</b> zijn niet gelijk</li>";
        }
        if(mysql_num_rows($username_query) >= 1)
        {
            echo "<li>De <b>USERNAME</b> is al in gebruik</li>";
        }
        if(mysql_num_rows($email_query) >= 1)
        {
            echo "<li>De <b>EMAIL</b> is al geregistreerd</li>";
        }
        if($check_email !== 1)
        {
            echo "<li>Geen geldige <b>EMAIL</b> ingevuld</li>";
        }
        if(strlen($_POST['password']) < 6)
        {
            echo "<li><b>PASSWORD</b> is minder dan 6 tekens</li>";
        }
        if(strlen($_POST['username']) < 6)
        {
            echo "<li><b>USERNAME</b> is minder dan 6 tekens</li>";
        }
        if(strlen($_POST['password']) > 40)
        {
            echo "<li><b>PASSWORD</b> is meer dan 40 tekens</li>";
        }
        if(strlen($_POST['username']) > 40)
        {
            echo "<li><b>USERNAME</b> is meer dan 40 tekens</li>";
        }
        
        echo "</ol>";
    }
    
    else
    {
        $username = addslashes($_POST['username']);
        $md5_ww = md5($_POST['password']);
        $email = addslashes($_POST['email']);
        $status = "2";
        mysql_query("INSERT INTO `inlogsysteem` (`username`, `password`, `email`, `status`) VALUES ('".$username."','".$md5_ww."','".$email."','".$status."')");
        
        echo "
            Je kunt nu inloggen
            <br><br><br><br>
            <a href='javascript:window.close()'>Sluit venster</a>
        ";
    }
}

else
{
    echo "
    <table border=\"0\">
        <form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">
            <tr>
                <td>Username</td>
                <td><input type=\"text\" name=\"username\" size=\"15\"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type=\"password\" name=\"password\" size=\"15\"></td>
            </tr>
            <tr>
                <td>Password [Bevestiging]</td>
                <td><input type=\"password\" name=\"password2\" size=\"15\"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type=\"text\" name=\"email\" size=\"15\"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align=\"right\"><input type=\"submit\" name=\"registreer\" value=\"Registreer!\"></td>
            </tr>
        </form>
    </table><br>
    <span style=\"font-size:8pt;\">* Username en Password mogen beiden niet minder als 6 en niet meer als 40 karakters bevatten.</span><br><br>
    <span style=\"font-size:8pt;\">** Alle velden dienen ingevuld te worden!</span>
    ";
}
ob_end_flush();
?>