<?php
// Check for empty fields
if(empty($_POST['name'])  		||
    empty($_POST['email']) 		||
    empty($_POST['subject'])	||
    empty($_POST['message'])	||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
    echo "Nenhum argumento fornecido!";
    return false;
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$subject_address = $_POST['subject'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage: $subject_address\n\nSubject:\n$message";
$headers = "From: nicksonwebdeveloper@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$subject_address,$email_body,$headers);
return true;