<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

function send_mail($recipient, $subject, $message)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();

    $mail->SMTPDebug  = 0;
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username   = "rubbyroasts@gmail.com";
    $mail->Password   = "ggpwmvplzkuefrac";

    $mail->IsHTML(true);
    $mail->AddAddress($recipient, "esteemed customer");
    $mail->SetFrom("rubbyroasts@gmail.com", "RubbyRoasts");

    $mail->Subject = $subject;
    $mail->Body = $message;

    if (!$mail->Send()) {
        return false;
    } else {
        return true;
    }
}
function create_mailer() {
  $mail = new PHPMailer();
  $mail->IsSMTP();

  $mail->SMTPDebug  = 0;
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username   = "rubbyroasts@gmail.com";
  $mail->Password   = "ggpwmvplzkuefrac";

  $mail->IsHTML(true);

  return $mail;
}
?>