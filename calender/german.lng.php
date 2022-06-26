<?php
/*  ©2009 Proverbs, LLC. All rights reserved.  */

if (preg_match("/german.lng.php/i", $_SERVER['PHP_SELF']))
{
	// redirect to calendar page
	header("Location: calendar.php");
	exit;
}

if(!defined("GERMAN_LANGUAGE")) 
{
	define("GERMAN_LANGUAGE", TRUE); 

	require ('baselang.inc.php');

	class languageset extends baselanguage
	{
		// Constructor
		function languageset()
		{
			$this->lang_value = "de";
			$this->charset = "iso-8859-1";
			$this->day_long = Array('Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag');
			$this->day_short = Array('Son', 'Mon', 'Die', 'Mitt', 'Don', 'Fre', 'Sam');
			$this->day_init = Array('S', 'M', 'D', 'M', 'D', 'F', 'S');
			$this->month_long = Array(1 => 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 
				'August', 'September', 'Oktober', 'November', 'Dezember');
			$this->month_short = Array(1 => 'Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug',
				'Sep', 'Okt', 'Nov', 'Dez');
			$this->word_today_date = "Tag-Datum";
			$this->word_day = "Tag";
			$this->word_month = "Monat";
			$this->word_year = "Jahr";
			$this->word_all_day = "Gesamte Tage";
			$this->word_no_javascript = "Dieser Kalender arbeitet nur richtig mit dem Javascript";
			$this->word_administration = "Administration";
			$this->word_full = "Voll";
			$this->word_author = "Autor";
			$this->word_submit = "Antrag";
			$this->word_refresh = "Aktualisieren Sie";
			$this->word_more = "mehr";
			$this->word_username = "Benutzername";
			$this->word_password = "Kennwort";
			$this->word_login = "LOGON";
			$this->word_access_denied = "Zugang verweigert";
			$this->word_calendar_administration = "Kalender-Administration";
			$this->word_user_admin = "Benutzer-Administrator";
			$this->word_user_administration = "Benutzer-Verwaltung";
			$this->word_access_level = "Zugriffsebene verfügbar";
			$this->word_events = "Termine";
			$this->word_event_title = "Termin-Titel";
			$this->word_event_details = "Termin-Details";
			$this->word_start_time = "Termin-Startzeit";
			$this->word_end_time = "Termin-Ende";
			$this->word_event_type = "Termin-Art";
			$this->word_date = "Datum";
			$this->word_all = "Alle";
			$this->word_weekday = "Wochentag";
			$this->word_every = "Jedes";
			$this->word_of = "von";
			$this->word_all_months = "Alle Monate";
			$this->word_show_events = "Zeigen Sie die Termine zwischen";
			$this->word_show_weekday_events = "Zeigen Sie Wochentag-Termine";
			$this->word_create_event = "Termineintrag";
			$this->word_delete_event = "Lösche Termin";
			$this->word_update_event = "Ändere Termin";
			$this->word_create_ok = "Termin erfolgreich eingetragen";
			$this->word_update_ok = "Termin erfolgreich aktualisiert";
			$this->word_delete_ok = "Termin ist entfernt worden";
			$this->word_fail_select = "Fehler: Keinen Termin ausgewählt";
			$this->word_create_fail = "Fehler: Eintrag erforderlich oder fehlerhafter Eintrag";
			$this->word_create_unknown = "Fehler: Eine unbekannte Störung ist aufgetreten";
			$this->word_existing_events = "Vorhandene Termine";
			$this->word_create_user = "Eintrag Benutzer";
			$this->word_delete_user = "Löschung-Benutzer";
			$this->word_update_user = "Änderung Benutzer";
			$this->word_existing_users = "Vorhandene Konten";
			$this->word_fail_nouser = "Fehler: Benutzerkontoname ist leer oder fehlerfaft";
			$this->word_fail_duplicate = "Fehler: Doppelter Kontoname";
			$this->word_fail_selflower = "Fehler: Sie können nicht Ihre eigene Zugriffsebene ändern";
			$this->word_fail_selfdelete = "Fehler: Sie können nicht Ihr eigenes Konto entfernen";
			$this->word_createuser_ok = "Benutzerkonto erfolgreich eingerichtett";
			$this->word_deleteuser_ok = "Benutzerkonto ist entfernt worden";
			$this->word_updateuser_ok = "Benutzerkonto erfolgreich aktualisiert";
			$this->word_emptyfield = "Eintrag notwendig oder der Eintrag ist fehlerhaft";
		}
	}
}
?>