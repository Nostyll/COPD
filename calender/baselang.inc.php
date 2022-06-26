<?php
/*  ©2009 Proverbs, LLC. All rights reserved.  */

if (preg_match("/baselang.inc.php/i", $_SERVER['PHP_SELF']))
{
	// redirect to calendar page
	header("Location: calendar.php");
	exit;
}

if(!defined("BASE_LANGUAGE")) 
{
	define("BASE_LANGUAGE", TRUE); 

	class baselanguage
	{
		public $lang_value;
		public $charset;
		public $day_long;
		public $day_short;
		public $day_init;
		public $month_long;
		public $month_short;
		public $word_today_date;
		public $word_day;
		public $word_month;
		public $word_year;
		public $word_all_day;
		public $word_no_javascript;
		public $word_administration;
		public $word_full;
		public $word_author;
		public $word_submit;
		public $word_refresh;
		public $word_more;
		public $word_username;
		public $word_password;
		public $word_login;
		public $word_access_denied;
		public $word_calendar_administration;
		public $word_user_admin;
		public $word_user_administration;
		public $word_access_level;
		public $word_events;
		public $word_event_title;
		public $word_event_details;
		public $word_start_time;
		public $word_end_time;
		public $word_event_type;
		public $word_date;
		public $word_all;
		public $word_weekday;
		public $word_every;
		public $word_of;
		public $word_all_months;
		public $word_show_events;
		public $word_show_weekday_events;
		public $word_create_event;
		public $word_delete_event;
		public $word_update_event;
		public $word_create_ok;
		public $word_update_ok;
		public $word_delete_ok;
		public $word_fail_select;
		public $word_create_fail;
		public $word_create_unknown;
		public $word_existing_events;
		public $word_create_user;
		public $word_delete_user;
		public $word_update_user;
		public $word_existing_users;
		public $word_fail_nouser;
		public $word_fail_duplicate;
		public $word_fail_selflower;
		public $word_fail_selfdelete;
		public $word_createuser_ok;
		public $word_deleteuser_ok;
		public $word_updateuser_ok;
		public $word_emptyfield;

		// Constructor
		function baselanguage()
		{
		}
	}
}
?>