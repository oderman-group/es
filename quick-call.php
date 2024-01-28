<?php
include("config/conexion.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'library/phpmailer/Exception.php';
require 'library/phpmailer/PHPMailer.php';
require 'library/phpmailer/SMTP.php';


//INICIO ENVÍO DE MENSAJE
$asunto = $_POST["nombre"] . ', Requiere una llamada rápida';
$tituloMsj = "¡Quick Call!";
$bgTitulo = "#6017dc";
$contenidoMsj = '
	<p>
		Hola, por favor a la brevedad ponte en contacto con <b>' . strtoupper($_POST["nombre"]) . '</b>, su número de teléfono es <b>' . strtoupper($_POST["telefono"]) . '</b>.
	</p>
			
';


include("config/plantilla-email-1.php");

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
echo '<div style="display:none;">';
try {
	include("config/mail.php");

	$mail->addAddress('soporte@plataformasintia.com', 'Soporte Plataforma SINTIA');
	$mail->addAddress('commercial@oderman-group.com', 'Commercial Plataforma SINTIA');
	$mail->addAddress('info@oderman-group.com', 'Info Plataforma SINTIA');
	$mail->addAddress('oderman@oderman-group.com', 'Oderman General');

	// Content
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = $asunto;
	$mail->Body = $fin;
	$mail->CharSet = 'UTF-8';

    $mail->send();
} catch (Exception $e) {
	echo "Error: {$mail->ErrorInfo}";
	exit();
}
echo '</div>';
//FIN ENVÍO DE MENSAJE
exit();