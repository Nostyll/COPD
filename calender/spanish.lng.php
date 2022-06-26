<?php
/*  �2003 Proverbs, LLC. All rights reserved.  */

if (preg_match("/spanish.lng.php/i", $_SERVER['PHP_SELF']))
{
	// redirect to calendar page
	header("Location: calendar.php");
	exit;
}

if(!defined("SPANISH_LANGUAGE")) 
{
	define("SPANISH_LANGUAGE", TRUE); 

	require ('baselang.inc.php');

	class languageset extends baselanguage
	{
		// Constructor
		function languageset()
		{
			$this->lang_value = "es";
			$this->charset = "iso-8859-1";
			$this->day_long = Array('Domingo', 'Lunes', 'Martes', 'Mi�rcoles', 'Jueves', 'Viernes', 'S�bado');
			$this->day_short = Array('Dom', 'Lun', 'Mar', 'Mi�', 'Jue', 'Vie', 'S�b');
			$this->day_init = Array('D', 'L', 'M', 'M', 'J', 'V', 'S');
			$this->month_long = Array(1 => 'Enero', 'Febrero', 'Marcha', 'Abril', 'Mayo', 'Junio', 'Julio', 
				'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
			$this->month_short = Array(1 => 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 
				'Nov', 'Dic');
			$this->word_today_date = "Hoy es";
			$this->word_day = "D�a";
			$this->word_month = "Mes";
			$this->word_year = "A�o";
			$this->word_all_day = "Todo el dia";
			$this->word_no_javascript = "Este calendario funcionar� solamente correctamente con el Javascript permitido";
			$this->word_administration = "Administraci�n";
			$this->word_full = "Por completo";
			$this->word_author = "Autor";
			$this->word_submit = "Someta";
			$this->word_refresh = "Restaure";
			$this->word_more = "m�s";
			$this->word_username = "Nombre del usuario";
			$this->word_password = "Contrase�a";
			$this->word_login = "Conexi�n";
			$this->word_access_denied = "Tenga acceso Negado";
			$this->word_calendar_administration = "Administraci�n Del Calendario";
			$this->word_user_admin = "Usuario Admin";
			$this->word_user_administration = "Administraci�n Del Usuario";
			$this->word_access_level = "Nivel De Acceso";
			$this->word_events = "Acontecimientos";
			$this->word_event_title = "T�tulo Del Acontecimiento";
			$this->word_event_details = "Detalles Del Acontecimiento";
			$this->word_start_time = "Hora De Salida";
			$this->word_end_time = "Tiempo Del Final";
			$this->word_event_type = "Tipo Del Acontecimiento";
			$this->word_date = "Fecha";
			$this->word_all = "Todos";
			$this->word_weekday = "D�a laborable";
			$this->word_every = "Cada";
			$this->word_of = "de";
			$this->word_all_months = "Todos los Meses";
			$this->word_show_events = "Demuestre Los Acontecimientos En medio";
			$this->word_show_weekday_events = "Demuestre Los Acontecimientos Del D�a laborable";
			$this->word_create_event = "Cree La Acontecimiento";
			$this->word_delete_event = "Quite La Acontecimiento";
			$this->word_update_event = "Cambie La Acontecimiento";
			$this->word_create_ok = "El acontecimiento del calendario cre� con �xito";
			$this->word_update_ok = "Acontecimiento del calendario puesto al d�a con �xito";
			$this->word_delete_ok = "Se ha quitado el acontecimiento del calendario";
			$this->word_fail_select = "FALLADO: Ning�n acontecimiento seleccionado";
			$this->word_create_fail = "FALLADO: Un campo requerido se ha dejado vac�o o es inv�lido";
			$this->word_create_unknown = "FALLADO: Un error desconocido ha ocurrido";
			$this->word_existing_events = "Acontecimientos Existentes";
			$this->word_create_user = "Cree La Cuenta";
			$this->word_delete_user = "Quite La Cuenta";
			$this->word_update_user = "Cambie La Cuenta";
			$this->word_existing_users = "Cuentas Existentes";
			$this->word_fail_nouser = "FALLADO: El nombre de cuenta del usuario es vac�o o invalid";
			$this->word_fail_duplicate = "FALLADO: Nombre de cuenta duplicado";
			$this->word_fail_selflower = "FALLADO: Usted no puede bajar su propio nivel de acceso";
			$this->word_fail_selfdelete = "FALLADO: Usted no puede quitar su propia cuenta";
			$this->word_createuser_ok = "La cuenta del usuario cre� con �xito";
			$this->word_deleteuser_ok = "Se ha quitado la cuenta del usuario";
			$this->word_updateuser_ok = "La cuenta del usuario se puso al d�a con �xito";
			$this->word_emptyfield = "Un campo requerido es vac�o o invalid";
		}
	}
}
?>