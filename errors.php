<?
if($_GET['p'] == "geen_admin")
{
?>
<html>

<head>
    <title>Error!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
 <p>Je hebt geen Admin-account</p>
 <p>&nbsp;</p>
 <p>Klik <a href="login.php">hier</a> om naar de loginpagina te gaan</p>
</body>

</html>
<?
}
if($_GET['p'] == "geen_moderator")
{
?>
<html>

<head>
    <title>Error!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
 <p>Je hebt geen Moderator- of Adminaccount</p>
 <p>&nbsp;</p>
 <p>Klik <a href="login.php">hier</a> om naar de loginpagina te gaan</p>
</body>

</html>
<?
}
?>