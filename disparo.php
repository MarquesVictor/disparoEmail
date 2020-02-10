<?php
include 'mailer/PHPMailerAutoload.php';
header ('Content-type: text/html; charset=UTF-8');

function shooting($nome, $email, $assunto){
    $email = null;
    $anexo = null;        
    # Parametros para entrar no E-mail
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = 'email@gmail.com';
    $mail->Password = 'senha@senha';
    $mail->Port = 465;

    # Adiciona emails das pessoas que iram receber o E-mail
    $mail->setFrom('email@gmail.com', utf8_decode('Não responda'));
    $mail->addAddress('email@gmail.com', null);

    # Adiciona os texto e anexos do E-mail
    $mail->isHTML(true);
    $mail->Subject = 'E-mail enviado pelo MAILER-BOT';
    $mail->Body    = "<p>{$assunto}</p>";
    $mail->addAttachment($anexo, null);

    # Teste para saber se o E-mail foi ou não enviado
    if(!$mail->send()) {
        echo "Não foi possível enviar a mensagem.<br>";
        echo 'Erro: ' . $mail->ErrorInfo;
    } else {
        echo "Mensagem enviada.<br>";
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Disparo de E-MAILS</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
  <div class="tree">
  <img src="https://img.icons8.com/windows/128/000000/wireless-mail-access.png">
    <div class="name-app">
      <h2>Automatic-
        <span>Mails.</span>
      </h2>
    </div>
  </div> 
  <section class="contact" id="contact">
    <div class="col-xs-12">
    </div>
    <form action="" method="post" name="contactform" id="contactform">
      <div class="col-xs-12">
        <fieldset>
          </i><input name="nome" type="text" id="nome" size="30" placeholder="Username" required>
          <input name="email" type="email" id="email" size="30" placeholder="Email" required>
          <input name="assunto" type="text" id="asstunto" size="30" placeholder="Assunto" required>
        </fieldset>
      </div>
      <div class="col-xs-12">
        <fieldset>
          <button type="submit" class="btn btn-lg" id="submit" size="30" value="submit" name="btn-send">Go</button>
        </fieldset>
        <?php
            $nome = filter_input(INPUT_POST, 'nome');
            $email = filter_input(INPUT_POST, 'email');
            $assunto = filter_input(INPUT_POST, 'assunto');
            if(isset($_POST['btn-send'])){
                #shooting($nome, $email, $assunto);
                echo $nome . "<br>";
                echo $email . "<br>";
                echo $assunto . "<br>";
            }
        ?>
    </form>
    </div>
</div>
</div>
</section>   
</body>
</html>