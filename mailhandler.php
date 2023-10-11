<?php
$name = stripslashes($_POST['name']);
$email = stripslashes($_POST['email']);
$phone = stripslashes($_POST['phone']);
$information = stripslashes($_POST['message']);

$message="
Query Information

Sender  Details
Name: ".$name."
Email: ".$email."
Phone: ".$phone."

Message
"
.$information;

$message = stripslashes($message);
mail("info@goldenexports.co.in","Contact Form",$message,"From: formmail@goldenexports.co.in");
?>