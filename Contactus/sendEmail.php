<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['send'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'onlinebusineses01@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'dywf rzbw rvaq ljyq'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('onlinebusineses01@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('kavinduebay2001@gmail.com '); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page | Universal Fitness)';
    $mail->Body = "<h3>Name : $name <br>Email: $email<br>Telephone: $telephone <br> Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
