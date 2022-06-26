<?
    include("config.php");
function generator()
{
    $karakters = array_merge(range('a','z'),range('A','Z'),range(0,9));
    shuffle($karakters);
    $karakters = implode('',$karakters);
    return substr($karakters,0,12);
}

if($_POST['generate'])
{
    if($_POST['username'] !== "" || $_POST['email'] !== "")
    {
        $query = mysql_query("SELECT `id` FROM `inlogsysteem` WHERE `email` = '".addslashes($_POST['email'])."' AND `username` = '".addslashes($_POST['username'])."'");
        
        if(mysql_num_rows($query) == 1)
        {
            $password = generator();
            mail($_POST['email'],"Nieuw Password",$password,"From: LoginSysteem V1.1 <combeetjuh@gmail.com>");
            
            $sql = "UPDATE `inlogsysteem` SET `password` = '".md5($password)."' WHERE `email` = '".addslashes($_POST['email'])."'";
            mysql_query($sql);
            
            echo "Check je Emailbox voor het nieuwe password, je kan inloggen met dit password en daarna kan je het password wijzigen als je ingelogd bent<br><br>Klik <a href=\"login.php\">hier</a> om naar de Loginpagina te gaan";
        }
        
        else
        {
            echo "Username hoort niet bij Email<br><br><a href=\"javascript:history.back(-1)\">Terug</a>";
        }
    }
    
    else
    {
        echo "Niet alles ingevuld<br><br><a href=\"javascript:history.back(-1)\">Terug</a>";
    }
}

else
{
?>
<table border="0" cellpadding="1" cellspacing="0">
    <form action="<? $_SERVER['PHP_SELF'] ?>" method="post">
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td align="right"><input type="submit" name="generate" value="Maak nieuw password!" style="width:170px;"></td>
        </tr>
    </form>
</table>
<?
}
?>