<?php
/*  ©2009 Proverbs, LLC. All rights reserved.  */

require ('caladmin.inc.php');

$action = "";

if (isset($_POST['submit']) && $_POST['submit'] != "")
	$action = stripslashes($_POST['submit']);

$page->createpage($action);

$page->displaypage();
?>