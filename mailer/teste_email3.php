<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include_once ("/home/dotz/public_html/mailer/PHPMailerAutoload.php");
$from = "contato@dotzvalepresente.hospedagemdesites.ws"; 
$namefrom = "Teste";
$to = "bins.br@gmail.com"; 
$nameto= "teste";
$subject = "teste";
$message = "teste";
$mail = new PHPMailer();
$mail->IsHTML(true);
$mail->Body = ($message);
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->setFrom($from, $namefrom);
$mail->addAddress($to, $nameto);
$mail->Subject = $subject;
$mail->IsHTML(true);
$mail->Body = ($message);
if (!$mail->send()) {
	echo "Erro: " . $mail->ErrorInfo;
} else {
	echo ('sucesso');
}
?>