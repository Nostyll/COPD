<?php 
	/*******************************************************************************
	| Project Name: Contact Form
	|    File Name: contact.php
	|  Description: This page contains a standard contact form with e-mail func-
	|               tionality. Can be reused by any website. To use this form
	|               simply configure it for your e-mail address in the configuration
	|               section below.
	|
	|-------------------------------------------------------------------------------
	|               C O P Y R I G H T
	|-------------------------------------------------------------------------------
	|        Copyright (c) 2005 by Feaser LLC         All rights reserved.
	|
	|-------------------------------------------------------------------------------
	|               A U T H O R   I D E N T I T Y
	|-------------------------------------------------------------------------------
	| Initials   Name                 Contact                       Company
	| --------   ------------------   ---------------------------   ----------------
	| Vg         Frank Voorburg       info@feaser.com               Feaser LLC
	|-------------------------------------------------------------------------------
	|               R E V I S I O N   H I S T O R Y
	|-------------------------------------------------------------------------------
	| Date         Ver   Author  Description
	| ---------    ----  ------  ---------------------------------------------------
	| 18-Jan-05    1.0    Vg     - Creation
	|
	|******************************************************************************/

  /* ========================= Begin Configuration ============================ */
	define("COPDcontact","johnno905@hotmail.com");
  /* ========================= End Configuration ============================== */

  // init variables
	$error_msg = 'De volgende velden waren leeg, of bevatten geen goede informatie:<ul>';
	$error = false;

	// determine is the form was submitted
	$submit = $_POST['submit'];
	if (empty($submit)) 
		$form_submitted = false;
	else
	  $form_submitted = true;

  if ($form_submitted) {
	  // read out data
	  $name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		// verify required data
		if(!$name) { $error_msg .= "<li>Naam + Achternaam</li>"; $error = true; }
		if(!$email) { $error_msg .= "<li>E-mail Adres</li>"; $error = true; }
		if(!$subject) { $error_msg .= "<liOnderwerp</li>"; $error = true; }
		if(!$message) { $error_msg .= "<li>Bericht</li>"; $error = true; }
		if($email) { if(!eregi("^[a-z0-9_]+@[a-z0-9\-]+\.[a-z0-9\-\.]+$", $email)){ $error_msg .= "<li>E-mail Adres</li>"; $error = true; }}
		$error_msg .= "</ul>";
		
		// email message if no errors occurred
		if (!$error) {
      // prepare message
			$msg  = "volledige Name: \t $name \n";
			$msg .= "E-mail Adres: \t $email \n";
			if ($phone == ""){
			}else{
			$msg .= "Telefoon: \t $phone \n";
			}
			$msg .= "Bericht: \n---\n $message \n---\n";

			// prepare message header
			$mailheaders  = "MIME-Version: 1.0\r\n";
			$mailheaders .= "Content-type: text/plain; charset=iso-8859-1\r\n";
			$mailheaders .= "From: $name <$email>\r\n";
			$mailheaders .= "Reply-To: $name <$email>\r\n"; 

		  // send out email
			mail(kContactEmail, $subject ,stripslashes($msg), $mailheaders);
		}
	} 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="author" content="Feaser">
<meta name="expires" content="NEVER">
<meta name="publisher" content="Feaser">
<meta name="copyright" content="Feaser">
<meta name="page-topic" content="Computer/Software/Internet">
<meta name="keywords" content="inexpensive small business web design, professional web site design company">
<meta name="description" content="inexpensive small business web design, professional web site design company">
<meta name="page-type" content="Commercial Organisation">
<meta name="audience" content="Professionals">
<meta name="robots" content="INDEX,FOLLOW">
<title>Contact Us</title>
<style type="text/css">
<!--
	font.form_check {	color: red; }
-->
</style>
</head>
<body>
<!-- box around the page -->
<div id="form_box"> 
<table border="0" width="100%" cellpadding="5" cellspacing="0" height="470">
	<tr>
		<td class="main" valign="top">
			<!-- page heading-->
			<h1>Contact Us</h1>
			<?php
				// email was successfully send
				if (($form_submitted) && (!$error)) {
			?>
			<!-- display submitted data -->
			Bedankt voor het versturen van het bericht, <?php echo $name; ?>.
			Hier het bericht wat u naar ons stuurde:<br><br><?php echo nl2br(stripslashes($msg)); ?>
			<?php	
				}
				// display contact form
				else {
					// display error message
					if ($error) {	
						echo "<font class='form_check'>" . $error_msg . "</font>\n";
					} 
			?>
			<!-- display form information -->
			Vul alstublieft het hele contact forumlier in zo dat wij contact met u op kunnen nemen.<br>
			Velden gemarkeerd met een  (<font class="form_check">*</font>) zijn verplichte velden die in gevult moeten zijn..
			<!-- display form -->
			<form method="post" name="contact">
			<table border="0" width="100%" cellspacing="5" cellpadding="0">
				<tr>
					<td class="form" width="50%">
						Naam + Achternaam (<font class="form_check">*</font>)<br>
						<input name="name" type="text" value="<?php echo $name ?>" size="40">
					</td>
				</tr>
			</table>
			<table border="0" width="100%" cellspacing="5" cellpadding="0">
				<tr>
					<td class="form" width="50%">
						E-mail Adres (<font class="form_check">*</font>)<br>
						<input name="email" type="text" value="<?php echo $email ?>" size="40">
					</td>
					<td class="form">
						Telefoon nummer<br>
						<input name="phone" type="text" value="<?php echo $phone ?>" size="40">
					</td>
				</tr>
			</table>
			<table border="0" width="100%" cellpacing="5" cellpadding="0">
				<tr>
					<td class="form" width="50%">
						Onderwerp (<font class="form_check">*</font>)<br>
						<input name="subject" type="text" value="<?php echo $subject ?>" size="89">
					</td>
				</tr>
			</table>
			<table border="0" width="100%" cellspacing="5" cellpadding="0">
				<tr>
					<td class="form">
						Bericht (<font class="form_check">*</font>)<br>
						<textarea name="message" cols="88" rows="12"><?php echo $message ?></textarea>
					</td>
				</tr>
			</table>
			<table border="0" width="100%" cellspacing="5" cellpadding="0">
				<tr>
					<td class="form">
						<input name="submit" type="submit" value="Verstuur!">
					</td>
				</tr>
			</table>
			</form>
			<?php
				}
			?>
		</td>
	</tr>
</table>
</div>
</body>
</html>
