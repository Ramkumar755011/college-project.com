<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'ramdhasramkumar4@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message .\n";

$to = 'ramdhasramkumar@gmail.com';

$headers = "From: $email_from \r\n";
$txt = "You have recieved an e-mail from" .$name."\n\n".$message;
$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html?mailsend");
?>