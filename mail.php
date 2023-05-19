<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$email = $_POST['user_email'];


$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';  																						
$mail->SMTPAuth = true;
$mail->Username = 'kristina.khorkova@internet.ru';
$mail->Password = 'vityaandyana1607';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('kristina.khorkova@internet.ru');
$mail->addAddress('ritoyi2869@klblogs.com');

$mail->isHTML(true);

$mail->Subject = 'Вопрос от пользователя';
$mail->Body    = '' .$name . ' оставил cсообщение, его почта ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>