<?php
/*  ©2009 Proverbs, LLC. All rights reserved.  */
/*   Til Norsk ved Asbjørn Aamot  www.aa-mot.net */

if (preg_match("/norsk.lng.php/i", $_SERVER['PHP_SELF'])) {
	// redirect to calendar page
	header("Location: calendar.php");
	exit;
}

if(!defined("NORSK_LANGUAGE"))
{
	define("NORSK_LANGUAGE", TRUE); 

	require ('baselang.inc.php');

	class languageset extends baselanguage
	{
		// Constructor
		function languageset()
		{
			$this->lang_value = "no";
			$this->charset = "iso-8859-1";
			$this->day_long = Array('Søndag', 'Mandag', 'Tirsdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lørdag');
			$this->day_short = Array('Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør');
			$this->day_init = Array('S', 'M', 'T', 'O', 'T', 'F', 'L');
			$this->month_long = Array(1 => 'Januar', 'Februar', 'Mars', 'April', 'Mai', 'Juni', 'Juli', 
				'August', 'September', 'Oktober', 'November', 'Desember');
			$this->month_short = Array(1 => 'Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 
				'Nov', 'Des');
			$this->word_today_date = "Dagens dato";
			$this->word_day = "Dag";
			$this->word_month = "Måned";
			$this->word_year = "År";
			$this->word_all_day = "Hele dagen";
			$this->word_no_javascript = "Denne kalenderen krever Javascript for god funksjon";
			$this->word_administration = "Administrasjon";
			$this->word_full = "Full";
			$this->word_author = "Editor";
			$this->word_submit = "Send inn";
			$this->word_refresh = "Oppdater";
			$this->word_more = "mere";
			$this->word_username = "Brukernavn";
			$this->word_password = "Passord";
			$this->word_login = "Login";
			$this->word_access_denied = "Adgang avslått.";
			$this->word_calendar_administration = "Kalender Administrasjon";
			$this->word_user_admin = "Bruker Admin";
			$this->word_user_administration = "User Administrasjon";
			$this->word_access_level = "Adgangsnivå";
			$this->word_events = "Hendelse";
			$this->word_event_title = "Hendelse overkrift";
			$this->word_event_details = "Hendelse detaljer";
			$this->word_start_time = "Start Tid";
			$this->word_end_time = "Slutt Tid";
			$this->word_event_type = "Heldelse Type";
			$this->word_date = "Dato";
			$this->word_all = "Hele";
			$this->word_weekday = "Ukedag";
			$this->word_every = "Hver";
			$this->word_of = "av";
			$this->word_all_months = "Alle Mnd";
			$this->word_show_events = "Vis hendelser mellom";
			$this->word_show_weekday_events = "Vis ukedags hendelser";
			$this->word_create_event = "Lag hendelse";
			$this->word_delete_event = "Slett hendelse";
			$this->word_update_event = "Oppdater hendelse";
			$this->word_create_ok = "Kalender hendelse laget successfullt";
			$this->word_update_ok = "Kalender hendelse oppdatert successfullt";
			$this->word_delete_ok = "Kalender hendelse er slettet";
			$this->word_fail_select = "FEIL: Ingen hendelse er valgt";
			$this->word_create_fail = "FEIL: Et pÃ¥krevet felt mangler er ugyldig";
			$this->word_create_unknown = "FEIL: En ukjent feil har inntryuffet";
			$this->word_existing_events = "Eksisterende hendelser";
			$this->word_create_user = "Opprett bruker";
			$this->word_delete_user = "Slett bruker";
			$this->word_update_user = "Oppdater bruker";
			$this->word_existing_users = "Eksisterende brukere";
			$this->word_fail_nouser = "FEIL: Bruker navn er tomt eller ugyldig";
			$this->word_fail_duplicate = "FEIL: En bruker med det navnet eksisterer allerede";
			$this->word_fail_selflower = "FEIL: Du kan ikke senke eget adgangsnivå";
			$this->word_fail_selfdelete = "FEIL: Du kan ikke slette egen konto";
			$this->word_createuser_ok = "Brukerkonto opprettet";
			$this->word_deleteuser_ok = "Brukerkonto er slettet";
			$this->word_updateuser_ok = "Brukerkonto er oppdatert";
			$this->word_emptyfield = "Et påkrevet felt er tomt eller ugyldig";
		}
	}
}
?>