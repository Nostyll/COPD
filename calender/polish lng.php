<?php
/*  ©2009 Proverbs, LLC. All rights reserved.  */

if (preg_match("/polish.lng.php/i", $_SERVER['PHP_SELF']))
{
	// redirect to calendar page
	header("Location: calendar.php");
	exit;
}

if(!defined("POLISH_LANGUAGE")) 
{
	define("POLISH_LANGUAGE", TRUE); 

	require ('baselang.inc.php');

	class languageset extends baselanguage
	{
		// Constructor
		function languageset()
		{
			$this->lang_value = "pl";
			$this->charset = "utf-8";
			$this->day_long = Array('Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota');
			$this->day_short = Array('Nd', 'Pn', 'Wt', 'Śr', 'Cz', 'Pt', 'So');
			$this->day_init = Array('N', 'P', 'W', 'Ś', 'C', 'P', 'S');
			$this->month_long = Array(1 => 'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 
				'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień');
			$this->month_short = Array(1 => 'Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Paź', 
				'Lis', 'Gru');
			$this->word_today_date = "Dzisiaj";
			$this->word_day = "Dzień";
			$this->word_month = "Miesiąc";
			$this->word_year = "Rok";
			$this->word_all_day = "Wszystkie dni";
			$this->word_no_javascript = "Ten kalendarz będzie funkcjonował prawidłowo jedynie z włączoną JavaScript";
			$this->word_administration = "Administracja";
			$this->word_full = "Pełny";
			$this->word_author = "Autor";
			$this->word_submit = "Wyślij";
			$this->word_refresh = "Odśwież";
			$this->word_more = "Więcej";
			$this->word_username = "Nazwa użytkownika";
			$this->word_password = "Hasło";
			$this->word_login = "Login";
			$this->word_access_denied = "Dostęp zabroniony";
			$this->word_calendar_administration = "Administracja kalendarza";
			$this->word_user_admin = "Użytkownik Administrator";
			$this->word_user_administration = "Administracja Użytkownika";
			$this->word_access_level = "Poziom dostępu";
			$this->word_events = "Wydarzenia";
			$this->word_event_title = "Tytuł wydarzenia";
			$this->word_event_details = "Szczegóły wydarzenia";
			$this->word_start_time = "Start";
			$this->word_end_time = "Koniec";
			$this->word_event_type = "Typ wydarzenia";
			$this->word_date = "Data";
			$this->word_all = "Wszystko";
			$this->word_weekday = "Dzień tygodnia";
			$this->word_every = "Każdy";
			$this->word_of = "";
			$this->word_all_months = "Wszystkie miesiące";
			$this->word_show_events = "Wyświetl wydarzenia pomiędzy";
			$this->word_show_weekday_events = "Wyświetl wydarzenia okresowe";
			$this->word_create_event = "Dodaj wydarzenie";
			$this->word_delete_event = "Usuń wydarzenie";
			$this->word_update_event = "Zaktualizuj wydarzenie";
			$this->word_create_ok = "Wydarzenie zostało zapisane w kalendarzu";
			$this->word_update_ok = "Wydarzenie zostało zaktualizowane";
			$this->word_delete_ok = "Wydarzenie zostało usunięte z kalendarza";
			$this->word_fail_select = "BŁĄD: wybierz wydarzenie";
			$this->word_create_fail = "BŁĄD: Wymagane pole nie zostało uzupełnione lub posiada błędną wartość";
			$this->word_create_unknown = "BŁĄD: Wystąpił nieznany błąd";
			$this->word_existing_events = "Istniejące wydarzenia";
			$this->word_create_user = "Dodaj użytkownika";
			$this->word_delete_user = "Usuń użytkownika";
			$this->word_update_user = "Zaktualizuj użytkownika";
			$this->word_existing_users = "Istniejące konta użytkowników";
			$this->word_fail_nouser = "BŁĄD: Nazwa użytkownika jest pusta lub posiada błędną wartość";
			$this->word_fail_duplicate = "BŁĄD: Użytkownik o tej nazwie już istnieje";
			$this->word_fail_selflower = "BŁĄD: Nie możesz obniżyć swojego poziomu dostępu";
			$this->word_fail_selfdelete = "BŁĄD: Nie możesz usunąć swojego konta";
			$this->word_createuser_ok = "Konto użytkownika zostało utworzone";
			$this->word_deleteuser_ok = "Konto użytkownika zostało usunięte";
			$this->word_updateuser_ok = "Konto użytkownika zostało zaktualizowane";
			$this->word_emptyfield = "Wymagane pole jest puste lub posiada błędną wartość";
		}
	}
}
?>