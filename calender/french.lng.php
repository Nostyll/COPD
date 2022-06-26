<?php
/*  �2003 Proverbs, LLC. All rights reserved.  */

if (preg_match("/french.lng.php/i", $_SERVER['PHP_SELF']))
{
	// redirect to calendar page
	header("Location: calendar.php");
	exit;
}

if(!defined("FRENCH_LANGUAGE")) 
{
	define("FRENCH_LANGUAGE", TRUE); 

	require ('baselang.inc.php');

	class languageset extends baselanguage
	{
		// Constructor
		function languageset()
		{
			$this->lang_value = "fr";
			$this->charset = "iso-8859-1";
			$this->day_long = Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
			$this->day_short = Array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
			$this->day_init = Array('D', 'L', 'M', 'M', 'J', 'V', 'S');
			$this->month_long = Array(1 => 'Janvier', 'F�vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 
				'Ao�t', 'Septembre', 'Octobre', 'Novembre', 'D�cembre');
			$this->month_short = Array(1 => 'Jan', 'F�v', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Ao�t', 'Sep', 'Oct', 
				'Nov', 'D�c');
			$this->word_today_date = "Aujourd'hui est";
			$this->word_day = "Jour";
			$this->word_month = "Mois";
			$this->word_year = "Ann�e";
			$this->word_all_day = "Toute la journ�e";
			$this->word_no_javascript = "Ce calendrier fonctionnera seulement correctement avec le Javascript permis";
			$this->word_administration = "Administration";
			$this->word_full = "Compl�tement";
			$this->word_author = "Auteur";
			$this->word_submit = "Soumettez";
			$this->word_refresh = "R�g�n�rez";
			$this->word_more = "plus";
			$this->word_username = "Nom d'utilisateur";
			$this->word_password = "Mot de passe";
			$this->word_login = "Ouverture";
			$this->word_access_denied = "Acc�dez Ni�";
			$this->word_calendar_administration = "Administration De Calendrier";
			$this->word_user_admin = "L'Utilisateur Admin";
			$this->word_user_administration = "Administration D'Utilisateur";
			$this->word_access_level = "Niveau d'acc�s";
			$this->word_events = "�v�nements";
			$this->word_event_title = "Titre D'�v�nement";
			$this->word_event_details = "D�tails D'�v�nement";
			$this->word_start_time = "Heure De D�part";
			$this->word_end_time = "Temps De Fin";
			$this->word_event_type = "Type D'�v�nement";
			$this->word_date = "Date";
			$this->word_all = "Tous";
			$this->word_weekday = "Jour de la semaine";
			$this->word_every = "Chaque";
			$this->word_of = "de";
			$this->word_all_months = "Tous les Mois";
			$this->word_show_events = "Montrez Les �v�nements Entre";
			$this->word_show_weekday_events = "Montrez Les �v�nements De Jour de la semaine";
			$this->word_create_event = "Cr�ez L'�v�nement";
			$this->word_delete_event = "Enlevez L'�v�nement";
			$this->word_update_event = "Changez L'�v�nement";
			$this->word_create_ok = "�v�nement de calendrier cr�� avec succ�s";
			$this->word_update_ok = "�v�nement de calendrier mis � jour avec succ�s";
			$this->word_delete_ok = "L'�v�nement de calendrier a �t� enlev�";
			$this->word_fail_select = "�CHOU� : Aucun �v�nement choisi";
			$this->word_create_fail = "�CHOU� : Un champ exig� a �t� laiss� vide ou est inadmissible";
			$this->word_create_unknown = "�CHOU� : Une erreur inconnue s'est produite";
			$this->word_existing_events = "�v�nements Existants";
			$this->word_create_user = "Cr�ez Le Compte";
			$this->word_delete_user = "Enlevez Le Compte";
			$this->word_update_user = "Changez Le Compte";
			$this->word_existing_users = "Comptes Existants";
			$this->word_fail_nouser = "�CHOU� : Le nom de compte d'utilisateur est vide ou invalide";
			$this->word_fail_duplicate = "�CHOU� : Nom de compte double";
			$this->word_fail_selflower = "�CHOU� : Vous ne pouvez pas abaisser votre propre niveau d'acc�s";
			$this->word_fail_selfdelete = "�CHOU� : Vous ne pouvez pas enlever votre propre compte";
			$this->word_createuser_ok = "Compte d'utilisateur cr�� avec succ�s";
			$this->word_deleteuser_ok = "Le compte d'utilisateur a �t� enlev�";
			$this->word_updateuser_ok = "Compte d'utilisateur mis � jour avec succ�s";
			$this->word_emptyfield = "Un champ exig� est vide ou invalide";
		}
	}
}
?>