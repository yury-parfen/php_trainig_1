<?php


$email = $_POST['email'];
$message = $_POST['message'];

$error = '';

if (trim($email) == '') {
    $error = 'Введите ваш email';
} elseif (trim($message) == '') {
    $error = 'Введите свое сообщение';
} elseif (strlen($message) < 10) {
    $error = 'Сообщенрие должно быть более 10 симовлов';
}

if($error != '') {
    echo $error;
    exit;
}

$subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\r";

mail('parfenenko@mail.ru', $subject, $message, $headers);

header('Location: /about.php');

?>