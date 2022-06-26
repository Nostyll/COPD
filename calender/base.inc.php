<?php
/*  ©2009 Proverbs, LLC. All rights reserved.  */

if (preg_match("/base.inc.php/i", $_SERVER['PHP_SELF']))
{
	// redirect to calendar page
	header("Location: calendar.php");
	exit;
}

if(!defined("BASE_CALENDAR")) 
{ 
	define("BASE_CALENDAR", TRUE); 

	require ('setup.inc.php');
	require ('language.inc.php');
	require ('calaccess.inc.php');

	class base_calendar
	{
		var $pagelayout;
		var $activeday;
		var $activemonth;
		var $activeyear;

		// Constructor
		function base_calendar()
		{
			$this->pagelayout = '';
		}

		function checkbrowser()
		{
			// create the setup object
			$conf = new layout_setup;
			$javaallowed = $conf->enable_javacss;
			unset($conf);
			if (!isset($_SERVER['HTTP_USER_AGENT']) || !$javaallowed || preg_match("/bot/i", $_SERVER['HTTP_USER_AGENT']))
				return false;
			if (preg_match("/Mozilla/i", $_SERVER['HTTP_USER_AGENT']))
			{
				if (preg_match("/MSIE/i", $_SERVER['HTTP_USER_AGENT']))
				{
					$msieVer = intval(trim(substr($_SERVER['HTTP_USER_AGENT'], 4 + strpos($_SERVER['HTTP_USER_AGENT'], "MSIE"), 2)));
					if ($msieVer < 7)
						return 1;
					else if ($msieVer < 8)
						return false; // compatibility mode or ie 7
				}
				return 2;
			}
			return false;
		}

		function makeheader()
		{
			// create the setup object
			$conf = new layout_setup;
			// create the language object
			$lang = new language;

			$retversion = $this->checkbrowser();
			$this->pagelayout = '<?xml version="1.0" encoding="'.$lang->charset.'"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'.$lang->lang_value.'" lang="'.$lang->lang_value.'">
<head>
<title>'.$conf->calendar_title_text.'</title>
<meta http-equiv="Content-Type" content="text/html; charset='.$lang->charset.'" />
<meta http-equiv="Content-Language" content="'.$lang->lang_value.'">
<meta name="Description" content="'.$conf->calendar_title_text.'" />
';
			unset($conf);
			unset($lang);
			return $retversion;
		}

		function closeheader()
		{
			$this->pagelayout .= '</head>
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
';
		}

		function displaypage()
		{
			$this->pagelayout .= '
</body>
</html>';

			echo $this->pagelayout;
		}
	}
}
?>