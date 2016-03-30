<?php
// Check for empty fields
if(empty($_POST['firstname'])  		||
   empty($_POST['email']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$email_address = $_POST['email']?:$_POST['email'];
$firstname = $_POST['phone']?: $_POST['firstname'];
$lastname = $_POST['phone']?: $_POST['lastname'];
$message = $_POST['message']?: $_POST['message'];
	
// Create the email and send the message
$to = 'faouzane@kenweego.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "VYVOP: Website Contact Form:  $firstname $lastname";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@kenweego.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>