<?php


$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$message = $_POST["message"];



$body = "
			NAME : [$name]
			PHONE : [$phone]
			EMAIL : [$email]
			MESSAGE : [$message]
	";


mail ('vmy.chopra@gmail.com', "$name contacted you Vimmey.", "Please find the entry below : \n\n$body \n\n", null, "-f contact@vimmey.com");
mail ('raj.chopra10@gmail.com', "$name contacted Vimmey.", "Please find the entry below : \n\n$body \n\n", null, "-f contact@vimmey.com");






?>

