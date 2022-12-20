<?php	
	if (empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$message = $_POST['message'];
	$optin = $_POST['optin'];
	
	$to = 'comunicaciones@laperlaapp.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Duda desde el formulario de cotacto.";
	$email_body = "Ud ha recibido un nuevo mensaje \n\n".
				  "Name: $name \nEmail: $email \nNumber: $number \nMessage: $message \nOptin: $optin \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: convocatorias@laperlaapp.com\r\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>