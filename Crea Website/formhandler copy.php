<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['number'];
$event = $_POST['event'];
$message = $_POST['message'];
$utr = $_POST['UTR'];


$email_from = 'info@[my website].com';

$email_subject = 'New Form Submission';

$email_body = "User Name : $name.\n".
              "User Email : $visitor_email.\n".
              "Subject : $subject.\n ".
              "Subject : $event.\n ".
              "Subject : $message.\n ".
              "Message : $utr.\n ";

$to = 'mstar022220@gmail.com';

$headers = "From : $email_from \r\n";

$headers .="Reply-To : $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location : index.html");


?>