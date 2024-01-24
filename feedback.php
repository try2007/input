<?php
	$to = "admin@mysite.ru";
	$subject = "Новый заказ";
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
	$headers = "From: admin@mysite.ru\r\nReply-To: admin@mysite.ru\r\nContent-type: text/html charset=utf-8\r\n";
	$name = htmlspecialchars($_POST["name"]);
	$phone = htmlspecialchars($_POST["phone"]);
	$comment = htmlspecialchars($_POST["comment"]);
	if (!$name || !$phone) {
		header("Location: error.html");
		exit;
	}
	$message = "Здравствуйте!<br /><br />У Вас новый клиент.<br /><br />Имя: <b>$name</b><br />Телефон: <b>$phone</b><br />Комментарий: <b>$comment</b>";
	mail($to, $subject, $message, $headers);
	header("Location: success.html");
	exit;
?>