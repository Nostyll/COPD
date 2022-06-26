<?php
/*  ©2009 Proverbs, LLC. All rights reserved.  */

if (preg_match("/hebrew.lng.php/i", $_SERVER['PHP_SELF']))
{
	// redirect to calendar page
	header("Location: calendar.php");
	exit;
}

if(!defined("HEBREW_LANGUAGE")) 
{
	define("HEBREW_LANGUAGE", TRUE); 

	require ('baselang.inc.php');

	class languageset extends baselanguage
	{
		// Constructor
		function languageset()
		{
			$this->lang_value = "iw";
			$this->charset = "iso-8859-8";
			$this->day_long = Array('יום ראשון', 'יום שני', 'יום שלישי', 'יום רביעי', 'יום חמישי', ' יום ששי', 'יום שבת');
			$this->day_short = Array('ראשון', 'שני', 'שלישי', 'רביעי', 'חמישי', 'ששי', 'שבת');
			$this->day_init = Array('א', 'ב', 'ג', 'ד', 'ה', 'ו', 'ש');
			$this->month_long = Array(1 => 'ינואר', 'פברואר', 'מרץ', 'אפריל', 'מאי', 'יוני', 'יולי', 
				'אוגוסט', 'ספטמבר', 'אוקטובר', 'נובמבר', 'דצמבר');
			$this->month_short = Array(1 => 'ינואר', 'פברואר', 'מרץ', 'אפריל', 'מאי', 'יוני', 'יולי', 
				'אוגוסט', 'ספטמבר', 'אוקטובר', 'נובמבר', 'דצמבר');
			$this->word_today_date = "תאריך היום";
			$this->word_day = "חודש";
			$this->word_month = "שנה";
			$this->word_year = "יום";
			$this->word_all_day = "כל היומים";
			$this->word_no_javascript = "This calendar will only function correctly with JavaScript enabled";
			$this->word_administration = "ניהול";
			$this->word_full = "מלא";
			$this->word_author = "יוצר";
			$this->word_submit = "להשלים";
			$this->word_refresh = "רענן";
			$this->word_more = "יותר";
			$this->word_username = "שם משתמש";
			$this->word_password = "סיסמה";
			$this->word_login = "כניסה";
			$this->word_access_denied = "הגישה נדחתה";
			$this->word_calendar_administration = "ניהול לוח שנה";
			$this->word_user_admin = "מנהל";
			$this->word_user_administration = "ניהול משתמשים";
			$this->word_access_level = "רמת הגישה";
			$this->word_events = "אירוע";
			$this->word_event_title = "שם האירוע";
			$this->word_event_details = "פרטי האירוע";
			$this->word_start_time = "זמן התחלה";
			$this->word_end_time = "זמן סוף";
			$this->word_event_type = "סוג האירוע";
			$this->word_date = "תאריך";
			$this->word_all = "הכל";
			$this->word_weekday = "יום בשבוע";
			$this->word_every = "כל";
			$this->word_of = "של";
			$this->word_all_months = "כל החודשים";
			$this->word_show_events = "הצג אירועים בין";
			$this->word_show_weekday_events = "הצג אירועים שבועים";
			$this->word_create_event = "צור אירוע";
			$this->word_delete_event = "מחק אירוע";
			$this->word_update_event = "עדכן אירוע";
			$this->word_create_ok = "ארוע לוח שנה יצר בהצלחה";
			$this->word_update_ok = "ארוע לוח שנה עודכן בהצלחה";
			$this->word_delete_ok = "ארוע לוח שנה סולק";
			$this->word_fail_select = "נכשל: לא נבחר ארוע";
			$this->word_create_fail = "נכשל: שדה נדרש נשאר רייק";
			$this->word_create_unknown = "נכשל: ארוע לא מוכר";
			$this->word_existing_events = "ארועים קיימים";
			$this->word_create_user = "צור משתמש";
			$this->word_delete_user = "מחק משתמש";
			$this->word_update_user = "עדכן משתמש";
			$this->word_existing_users = "חשבונות הקיימים";
			$this->word_fail_nouser = "FAILED: User account name is empty or invalid";
			$this->word_fail_duplicate = "FAILED: A user account with that name exists";
			$this->word_fail_selflower = "FAILED: You can not lower your own access level";
			$this->word_fail_selfdelete = "FAILED: You can not remove your own account";
			$this->word_createuser_ok = "User account created successfully";
			$this->word_deleteuser_ok = "User account has been removed";
			$this->word_updateuser_ok = "User account updated successfully";
			$this->word_emptyfield = "שדה חובה ריק או לא חוקי";
		}
	}
}
?>