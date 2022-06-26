<?php
/*  �2009 Proverbs, LLC. All rights reserved.  */

if (preg_match("/portuguese.lng.php/i", $_SERVER['PHP_SELF']))
{
	// redirect to calendar page
	header("Location: calendar.php");
	exit;
}

{
	define("PORTUGUESE_LANGUAGE", TRUE); 

	require ('baselang.inc.php');

	class languageset extends baselanguage
	{
		// Constructor
		function languageset()
		{
			$this->lang_value = "pt";
			$this->charset = "iso-8859-1";
			$this->day_long = Array('Domingo', 'Segunda', 'Ter�a', 'Quarta', 'Quinta', 'Sexta-feira', 'S�bado');
			$this->day_short = Array('Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab');
			$this->day_init = Array('S', 'M', 'T', 'W', 'T', 'F', 'S');
			$this->month_long = Array(1 => 'Janeiro', 'Fevereiro', 'Mar�o', 'Abril', 'Maio', 'Junho', 'Julho', 
				'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
			$this->month_short = Array(1 => 'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 
				'Nov', 'Dez');
			$this->word_today_date = "Hoje � dia";
			$this->word_day = "Dia";
			$this->word_month = "M�s";
			$this->word_year = "Ano";
			$this->word_all_day = "Todo dia";
			$this->word_no_javascript = "Este calend�rio s� funciona corretamente em browser�s com javascript ativado";
			$this->word_administration = "Administra��o";
			$this->word_full = "Completo";
			$this->word_author = "Autor";
			$this->word_submit = "Enviar";
			$this->word_refresh = "Refresh";
			$this->word_more = "mais";
			$this->word_username = "nome de usu�rio";
			$this->word_password = "senha";
			$this->word_login = "Login";
			$this->word_access_denied = "Acesso Negado";
			$this->word_calendar_administration = "Administra��o do calend�rio";
			$this->word_user_admin = "nome de administrador";
			$this->word_user_administration = "Usu�rio da Administra��o";
			$this->word_access_level = "N�vel de acesso";
			$this->word_events = "Eventos";
			$this->word_event_title = "T�tulo do evento";
			$this->word_event_details = "Detalhes do evento";
			$this->word_start_time = "Hora que inicia";
			$this->word_end_time = "Hora que termina";
			$this->word_event_type = "Tipo de evento";
			$this->word_date = "Data";
			$this->word_all = "Todos";
			$this->word_weekday = "dia da semana";
			$this->word_every = "Todos";
			$this->word_of = "of";
			$this->word_all_months = "Todos os meses";
			$this->word_show_events = "Exibir eventos entre";
			$this->word_show_weekday_events = "Exibir eventos do dia";
			$this->word_create_event = "Criar um evento";
			$this->word_delete_event = "Remover um Evento";
			$this->word_update_event = "Atualizar um Evento";
			$this->word_create_ok = "Calend�rio de eventos criado com sucesso!";
			$this->word_update_ok = "Calend�rio de eventos atualizado com sucesso!";
			$this->word_delete_ok = "Calend�rio de eventos removido com sucesso!";
			$this->word_fail_select = "Erro: nenhum evento foi selecionado";
			$this->word_create_fail = "Erro: Um campo do formul�rio requisitado foi deixado em branco ou � inv�lido";
			$this->word_create_unknown = "Erro: Um erro desconhecido ocorreu";
			$this->word_existing_events = "Esse evento j� existe";
			$this->word_create_user = "Criar usu�rio";
			$this->word_delete_user = "Remover usu�rio";
			$this->word_update_user = "Atualizar usu�rio";
			$this->word_existing_users = "Conta j� existente";
			$this->word_fail_nouser = "Erro: Nome de usu�rio est� vazio ou inv�lido";
			$this->word_fail_duplicate = "Erro: J� existe uma conta de usu�rio com esse nome";
			$this->word_fail_selflower = "Erro: Voc� n�o pode diminuir seu n�vel de acesso";
			$this->word_fail_selfdelete = "Erro: Voc� n�o pode remover a sua pr�pria conta";
			$this->word_createuser_ok = "Conta de usu�rio criada com sucesso";
			$this->word_deleteuser_ok = "Conta de usu�rio removida com sucesso";
			$this->word_updateuser_ok = "Conta de usu�rio atualizado com sucesso";
			$this->word_emptyfield = "Um campo requerido est� vazio ou inv�lido";
		}
	}
}
?>