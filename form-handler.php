<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'admissions@taj.uc.in';
$email_subject ='NEW FORM SUBMISSION';

$email_body = "user name: $name.\n".
               "user email: $visitor_email.\n".  
               "user message: $$message.\n";

$to = 'kartikeysharma1616@gmail.com';  

$headers= "email from: $email_from \r\n";

$headers =" reply to: $visitor_email \r\n";

mail($to,$email_body,$email_subject,$headers);

$headers("location:contact.html");
?>