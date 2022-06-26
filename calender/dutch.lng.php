<?php
/*  ©2009 Proverbs, LLC. All rights reserved.  */

if (preg_match("/dutch.lng.php/i", $_SERVER['PHP_SELF']))
{
	// redirect to calendar page
	header("Location: calendar.php");
	exit;
}

if(!defined("DUTCH_LANGUAGE")) 
{
	define("DUTCH_LANGUAGE", TRUE); 

	require ('baselang.inc.php');

	class languageset extends baselanguage
	{
		// Constructor
		function languageset()
		{
			$this->lang_value = "nl";
			$this->charset = "iso-8859-1";
			$this->day_long = Array('Zondag', 'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag');
			$this->day_short = Array('Zo', 'Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za');
			$this->day_init = Array('Z', 'M', 'D', 'W', 'D', 'V', 'Z');
			$this->month_long = Array(1 => 'Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli',
				'Augustus', 'September', 'Oktober', 'November', 'December');
			$this->month_short = Array(1 => 'Jan', 'Feb', 'Maa', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep',
				'Okt', 'Nov', 'Dec');
			$this->word_today_date = "Vandaag";
			$this->word_day = "Dag";
			$this->word_month = "Maand";
			$this->word_year = "Jaar";
			$this->word_all_day = "Gehele dag";
			$this->word_no_javascript = "Deze applicatie zal alleen werken als JavaScript is ingeschakeld";
			$this->word_administration = "Administratie";
			$this->word_full = "Volledig";
			$this->word_author = "Auteur";
			$this->word_submit = "Verstuur";
			$this->word_refresh = "Herladen";
			$this->word_more = "meer";
			$this->word_username = "Gebruikersnaam";
			$this->word_password = "Wachtwoord";
			$this->word_login = "Inloggen";
			$this->word_access_denied = "Geen toegang";
			$this->word_calendar_administration = "Administratie Kalender";
			$this->word_user_admin = "Administrateur";
			$this->word_user_administration = "Gebruiker administratie";
			$this->word_access_level = "Toegangsniveau";
			$this->word_events = "Gebeurtenissen";
			$this->word_event_title = "Titel gebeurtenis";
			$this->word_event_details = "Details gebeurtenis";
			$this->word_start_time = "Begintijd";
			$this->word_end_time = "Eindtijd";
			$this->word_event_type = "Type gebeurtenis";
			$this->word_date = "Datum";
			$this->word_all = "Allen";
			$this->word_weekday = "Weekdag";
			$this->word_every = "Alle";
			$this->word_of = "van";
			$this->word_all_months = "Alle Maanden";
			$this->word_show_events = "Toon gebeurtenissen tussen";
			$this->word_show_weekday_events = "Toon de gebeurtenissen van de weekdag";
			$this->word_create_event = "Creëer gebeurtenis";
			$this->word_delete_event = "Verwijder gebeurtenis";
			$this->word_update_event = "Wijzig gebeurtenis";
			$this->word_create_ok = "De gebeurtenis is met succes gecreëerd";
			$this->word_update_ok = "De gebeurtenis is met succes gewijzigd";
			$this->word_delete_ok = "De gebeurtenis is met succes verwijderd";
			$this->word_fail_select = "FOUT: Geen gebeurtenis geselecteerd";
			$this->word_create_fail = "FOUT: Een verplicht veld is leeg of ongeldig";
			$this->word_create_unknown = "FOUT: Een onbekende fout is voorgekomen";
			$this->word_existing_events = "Bestaande gebeurtenissen";
			$this->word_create_user = "Creëer gebruiker";
			$this->word_delete_user = "Verwijder gebruiker";
			$this->word_update_user = "Wijzig gebruiker";
			$this->word_existing_users = "Bestaande gebruikers";
			$this->word_fail_nouser = "FOUT: De naam van de gebruiker is leeg of ongeldig";
			$this->word_fail_duplicate = "FOUT: Een gebruikersaccount met deze naam is reeds in gebruik";
			$this->word_fail_selflower = "FOUT: U kunt niet uw eigen toegangsniveau verlagen";
			$this->word_fail_selfdelete = "FOUT: U kunt niet uw eigen gebruikersaccount verwijderen";
			$this->word_createuser_ok = "De gebruikersaccount is gecreëerd";
			$this->word_deleteuser_ok = "De gebruikersaccount is verwijderd";
			$this->word_updateuser_ok = "De gebruikersaccountaccount is gewijzigd";
			$this->word_emptyfield = "Een vereist veld is leeg of ongeldig";
		}
	}
}
?>