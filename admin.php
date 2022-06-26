<?
    include("beveiliging-a.php");
?>
        <p>Welkom bij het ControlPanel voor de Administrator</p>
        <p>
            <b>Uitleg Statussen:</b><br>
            Status '5' = Administratorrechten<br>
            Status '4' = arts<br>
            Status '2' = Normale member<br>
        </p>
    
<?

function afk_str($string, $lengte)
{
    return strlen($string) > $lengte ? substr($string, 0, $lengte).'..' : $string;
}

function home()
{
    $sql = "SELECT * FROM `inlogsysteem`";
    $query = mysql_query($sql);
    
    echo "
    <table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"700\">
    <tr>
        <td><b>ID</b></td><td><b>Username</b></td><td><b>Email</b></td><td><b>Status/Rank</b></td><td>&nbsp;</td><td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
    </tr>
    ";
    
    while($rij = mysql_fetch_assoc($query))
    {
        echo "
            <tr>
                <td>".$rij['id']."</td><td>".$rij['username']."</td><td><a href=\"mailto:".$rij['email']."\" title=\"".$rij['email']."\">".afk_str($rij['email'],30)."</td><td>".$rij['status']."</td>";
                
                if($rij['status'] == "a")
                {
                    echo "<td>&nbsp;</td>";
                }
                
                else
                {
                    echo "<td><a href=\"?action=deluser&id=".$rij['id']."&rank=".$rij['status']."\" style=\"color:#FF0000;\">Delete Member</a></td>";
                }
                
                echo "<td><a href=\"?action=wijzig_status&id=".$rij['id']."&rank=".$rij['status']."\">Wijzig Rank</a></td>";
        echo "</tr>";
    }
    
    echo "</table>";
}

function wijzig_status()
{
    $id = $_GET['id'];
    $rank = $_GET['rank'];
    
    if($_POST['wijzig'])
    {
        $sql = "UPDATE `inlogsysteem` SET `status` = '".$_POST['status']."' WHERE `id` = '".$id."'";
        mysql_query($sql) or die(mysql_error());
        header("Location: admin.php");
    }
    
    else
    {
        echo "<form action=\"\" method=\"post\">";
        echo "Je hebt de member met ID nr. ".$id." en<br> als rank ".ucfirst($rank)." geselecteerd<br><br>";
        echo "Rank <select name=\"status\" style=\"width:50px;\">
                        <option value=\"".$rank."\">&nbsp;</option>
                        <option value=\"a\">a</option>
                        <option value=\"m\">m</option>
                        <option value=\"n\">n</option>
                    </select><br>
        ";
        echo "<input type=\"submit\" name=\"wijzig\" value=\"Wijzig Rank\">";
        echo "</form>";
    }
}

function deluser()
{
    $id = $_GET['id'];
    $rank = $_GET['rank'];
    
    if($rank == "a" || $id == "1")
    {
        echo "
        <script>
            window.alert('De Admin kan niet verwijderd worden');
            window.location = 'admin.php';
        </script>
        ";
    }
    
    else
    {
        mysql_query("DELETE FROM `inlogsysteem` WHERE `id` = '".$id."'");
        
        header("Location: ".$_SERVER['PHP_SELF']."");
    }
}
    
switch($_GET['action'])
{
    case "wijzig_status";
        wijzig_status();
    break;
    
    case "deluser";
        deluser();
    break;
    
    case "wijzig_pass";
        wijzig_pass();
    break;
    
    default;
        home();
    break;
}
?>
<?
ob_end_flush();
?>