<?
    if($_POST['submit'])
    {
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
        $md5 = md5($password);
        $email = addslashes($_POST['email']);
        
        if($username == "" || $password == "")
        {
            echo "Niet alles ingevuld...<br><br><a href=\"javascript:history.back(-1)\">Terug</a>";
        }
        
        else
        {
            include("config.php");

            mysql_query("DROP TABLE IF EXISTS `inlogsysteem`");
            mysql_query("
                CREATE TABLE `inlogsysteem` (
                      `id` int(8) NOT NULL auto_increment,
                      `username` varchar(40) NOT NULL,
                      `password` varchar(40) NOT NULL,
                      `email` varchar(255) NOT NULL,
                      `status` char(1) NOT NULL,
                      PRIMARY KEY  (`id`)
                );
            ");
            mysql_query("INSERT INTO `inlogsysteem` (`id`,`username`,`password`,`email`,`status`) VALUES ('','".$username."','".$md5."','".$email."','a')");
            
            echo "table and user are made";
        }
    }
    
    else
    {
?>

<html>

<head>
    <title>Install</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <p>
        Maak EERST een config.php aan zoals hieronder:<br><br>
        &lt;?                <br>
        ob_start();            <br>
        session_start();    <br>
        mysql_connect(&quot;localhost&quot;,&quot;USERNAME&quot;,&quot;PASSWORD&quot;);    <br>
        mysql_select_db(&quot;DATABASE&quot;);<br>
        ?&gt;<br>
    </p>
    <p>Daarna pas dit hieronder:</p>

    <table border="0" cellspacing="0" cellpadding="0">
        <form action="<? $_SERVER['PHP_SELF'] ?>" method="post">
            <tr>
                <td><b>Logingegevens Admin</b></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Admin naam:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Admin password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Admin email:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align="right"><input type="submit" name="submit" value="Installeer!"></td>
            </tr>
        </form>
    </table>
</body>

</html>

<?
    }
ob_end_flush();
?>