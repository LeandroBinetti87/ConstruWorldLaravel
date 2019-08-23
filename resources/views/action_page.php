 
 <?php
if ( function_exists( 'mail' ) )
{
    //echo 'mail() is available'
}
else
{
    //echo 'mail() has been disabled';
}

    /*
     * Enable error reporting
     */
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
	
	$first_name = $_POST['nombre']; // no requerido
 
    $email_from = $_POST['email']; // requerido
	
    $message = $_POST['mensaje']; // no requerido
 
    $error_message = "Error";
 
    /*
     * Setup email addresses and change it to your own
     */
	if (filter_var($email_from, FILTER_VALIDATE_EMAIL)) {
		/*echo("$email_from is a valid email address");*/
	
		$from = "contacto@construworld.com.ar";
		$to = "leandro7sfer@gmail.com";
		$subject = "Consulta de: " . $first_name;
		$headers = "From: " . $email_from . "\r\nReply-to:" . $email_from;
 
		$mensaje = "Mail de: " . $first_name . "\n" .
		"Mail: " . $email_from . "\n" . "Mensaje: " . "\n" . $message;
	
		/*
		* Test php mail function to see if it returns "true" or "false"
		* Remember that if mail returns true does not guarantee
		* that you will also receive the email
		*/
		if(mail($to,$subject,$mensaje, $headers))
		{
			echo "Gracias. Su consulta será respondida a la brevedad.";
		} 
		else 
		{
			echo "Hubo un problema con el envío. Por favor inténtelo de nuevo.";
		}
	
	} else {
		$mensaje_error = " no es una dirección válida de mail. Inténtelo de nuevo, por favor. Gracias.";
		$mensaje_error_total = $email_from . $mensaje_error;
		echo($mensaje_error_total);
	} 
?>