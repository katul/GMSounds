<?php
	console.log("Called file contact.php");
   $to_email = "akguptah@gmail.com";
   $subject = "Simple Email Test via PHP";
   $body = "Hi,nn This is test email send by PHP Script";
   $headers = "From: akguptah@gmail.com";
	console.log("Before mail method");
   if ( mail($to_email, $subject, $body, $headers)) {
      echo("Email successfully sent to $to_email...");
   } else {
      echo("Email sending failed...");
   }
?>