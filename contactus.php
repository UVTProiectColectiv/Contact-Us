<?php
  include "PHPMailer.php";
  include "Exception.php";
  include "SMTP.php";
  
 
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $msg = '';
  
if (array_key_exists('email', $_POST)) {
  date_default_timezone_set('Etc/UTC');

  require_once "vendor/autoload.php";

  $mail = new PHPMailer(true);

  $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 25;
  $mail->setFrom('bianca.stefanesc55@gmail.com');
  $mail->addAddress("bianca.stefanescu10@e-uvt.ro");
  

  if ($mail->addReplyTo($visitor_email, $name)) {
    $mail->Subject = 'PHPMailer contact form';
    $mail->isHTML(false);
    $mail->Body = <<<EOT
        Email: {$visitor_email}
        Name: {$name}
        Message: {$message}
        EOT;

    if (!$mail->send()) {
        
        $msg = 'Sorry, something went wrong. Please try again later.';
    } else {
        $msg = 'Message sent! Thanks for contacting us.';
    }
} else {
    $msg = 'Invalid email address, message ignored.';
}
}
  header("Location: contactusform.php");
 ?>
