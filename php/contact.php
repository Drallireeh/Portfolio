<?php
// Check for empty fields
if(empty($_POST['firstname'])   ||
   empty($_POST['name'])        ||
   empty($_POST['email'])       ||
   empty($_POST['phone'])       ||
   empty($_POST['subject'])     ||
   empty($_POST['message'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$firstname = strip_tags(htmlspecialchars($_POST['firstname']));
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
$to = 'kenny.herillard@hotmail.fr'; // My mail
$email_subject = "$subject";
$email_body = "Message:\n$message \n Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\n";
$headers = "From: noreply@drallireeh.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;         
?>