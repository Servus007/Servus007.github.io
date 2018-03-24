<?php
	$name = $_Post['name'];
	$bezoeker_email = $_Post['email'];
	$message = $_Post['mesage'];
	
	$email_mij = 'info@lovaniadrones.be'
	
	$email_onderwerp = "Lovania drones bezoek"
	
	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n"
					"User Message: $message.\n";
					
	$to = "info@lovaniadrones.be";
	
	$headers = "from" $email_from \r\n";
	
	$headers .= "reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("location: index.html");
?>