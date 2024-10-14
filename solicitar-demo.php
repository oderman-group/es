<?php
include("config/conexion.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'library/phpmailer/Exception.php';
require 'library/phpmailer/PHPMailer.php';
require 'library/phpmailer/SMTP.php';

mysqli_query($conexion, "INSERT INTO demo(demo_ip, demo_nombre, demo_cargo, demo_telefono, demo_email, demo_institucion, demo_apellido, demo_comentario, demo_referencia)VALUES('" . $_SERVER["REMOTE_ADDR"] . "', '".$_POST['nombre']."', '".$_POST['cargo']."', '".$_POST['telefono']."', '".$_POST['email']."', '".$_POST['institucion']."', '".$_POST['apellido']."', '".$_POST['comentarios']."', '".$_POST['referencia']."')");

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