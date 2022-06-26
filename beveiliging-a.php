<?
include("config.php");

if($_SESSION['login'] !== "1")
{
    header("Location: login.php");
}
elseif($_SESSION['login'] == "1" && $_SESSION['status'] !== "5")
{
    header("Location: errors.php?p=geen_admin");
}
?>