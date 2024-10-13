<?php
include("config/conexion.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'library/phpmailer/Exception.php';
require 'library/phpmailer/PHPMailer.php';
require 'library/phpmailer/SMTP.php';

//INICIO ENVÍO DE MENSAJE
$asunto       = $_POST["nombre"] . ', Solicitud de DEMO';
$tituloMsj    = "¡Solicitud de DEMO de la Plataforma SINTIA!";
$bgTitulo     = "#6017dc";
$contenidoMsj = '
    <p>
        Hola <b>' . strtoupper($_POST["nombre"]) . '</b>, Bienvenido a la Plataforma SINTIA. Te contactaremos para el demo pronto.<br>
    </p>
';

include("config/plantilla-email-1.php");

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
echo '<div style="display:none;">';
try {
	include("config/mail.php");

    $mail->addAddress($_POST["email"], $_POST["nombre"]);     // Add a recipient
	$mail->addAddress('soporte@plataformasintia.com', 'Soporte Plataforma SINTIA');
	$mail->addAddress('commercial@oderman-group.com', 'Soporte Plataforma SINTIA');
	$mail->addAddress('info@oderman-group.com', 'Soporte Plataforma SINTIA');

	// Content
	$mail->isHTML(true);
	$mail->Subject = $asunto;
	$mail->Body    = $fin;
	$mail->CharSet = 'UTF-8';

    $mail->send();
} catch (Exception $e) {
	echo "Error: {$mail->ErrorInfo}";
	exit();
}
echo '</div>';
//FIN ENVÍO DE MENSAJE