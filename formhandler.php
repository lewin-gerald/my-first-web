<?php
$name $_POST["name"];
$visitor_email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


$email_from ="info@moneyacademy.com";
$email_subject="new form";
$email_body ="user name: $name.\n".
                "user email:$visitor_email.\n".
                 "subject: $subject.\n".
                "user_message: $message .\n";



$to ="khaembavidhelis@gmail.com";
$headers ="from: $email_from \r\rn";
$headers .="reply_To: $visitor_email \r\n";


email($to,$email_subject,$email_body,$headers);

header("location: contact.html");



?>
