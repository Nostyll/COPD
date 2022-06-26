<?
include("config.php");

if($_SESSION['login'] !== "1")
{
    header("Location: login.php");
}
?>