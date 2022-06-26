<?php
/*  ©2009 Proverbs, LLC. All rights reserved.  */

if (preg_match("/language.inc.php/i", $_SERVER['PHP_SELF']))
{
	// redirect to calendar page
	header("Location: calendar.php");
	exit;
}

if(!defined("USED_LANGUAGE")) 
{
	define("USED_LANGUAGE", TRUE); 

	require_once ('setup.inc.php');

	// create the setup object
	$conf = new layout_setup;

	switch (strtolower($conf->display_language))
	{
		case "dutch":
			require('dutch.lng.php'); 
			break;
		case "english":
			require('english.lng.php'); 
			break;
		case "french":
			require('french.lng.php'); 
			break;
		case "german":
			require('german.lng.php'); 
			break;
		case "hebrew":
			require('hebrew.lng.php'); 
			break;
		case "italian":
			require('italian.lng.php'); 
			break;
		case "norsk":
			require('norsk.lng.php'); 
			break;
		case "polish":
			require('polish.lng.php'); 
			break;
		case "portuguese":
			require('portuguese.lng.php'); 
			break;
		case "spanish":
			require('spanish.lng.php'); 
			break;
		default:
			require('english.lng.php');
	}

	class language extends languageset
	{
		// Constructor
		function language()
		{
			$this->languageset();
		}
	}
}
?>