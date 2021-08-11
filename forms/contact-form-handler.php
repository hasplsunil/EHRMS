<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
 
$formcontent=" Firstname: $firstname \n Lastname: $lastname \n Email: $email \n Phone: $phone \n Message: $message";
$recipient = "epaysunil@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "We will get back to you soon, Thank You! ";

?>