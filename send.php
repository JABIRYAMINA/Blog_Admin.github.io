<?php

$name = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['mobile'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Message: $message";
$recipient = "greenship.promotion2@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Merci!" . " -" . "<a href='blogpublic.php' style='text-decoration:none;color:#ff0099;'>Return Home</a>";
?>
