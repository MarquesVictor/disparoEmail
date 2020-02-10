<?php

	date_default_timezone_set('Etc/UTC');

	require 'PHPMailerAutoload.php';

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = "187.9.42.155";
	$mail->Port = 25;
	$mail->SMTPAuth = true;
	$mail->Username = "SAOweb";
	$mail->Password = "SwebAO";
	
	$mail->setFrom('vinicius.vasconcellos@omnion.com.br', 'First Last');
	
	// $mail->addReplyTo('daniel.bins@omnion.com.br', 'First Last');
	
	$mail->addAddress('vinicius.vasconcellos@omnion.com.br', 'John Doe');
	$mail->Subject = 'PHPMailer SMTP test';
	$mail->IsHTML(true);
	
	$data = file_get_contents("contents.html"); 
	
	//replace
	
	$mail->Body = $data;



	 if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	 } else {
		echo "Message sent!";
	 }
?>
