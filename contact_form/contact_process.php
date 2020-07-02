<?php

include dirname(dirname(__FILE__)).'/mail.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
include 'email_validation.php';

$email = trim($_POST['email']);
$text = stripslashes($_POST['message']);

$message = "Письмо с nage.com \n Почта: " .$email. "\n Сообщение: " .$text . "\n\n";
$subject = "Письмо с nage.com";

$error = '';


// Check email

if(!$email)
{
$error .= 'Пожалуста, введите вашу Почту.<br />';
}

if($email && !ValidateEmail($email))
{
$error .= 'Пожалуста, введите вашу Почту.<br />';
}


if(!$error)
{
$mail = mail(CONTACT_FORM, $subject, $phone, $message,
     "From: nage.agency@gmail.com \r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());
if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>