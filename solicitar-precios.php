<?php
include("config/conexion.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'library/phpmailer/Exception.php';
require 'library/phpmailer/PHPMailer.php';
require 'library/phpmailer/SMTP.php';

mysqli_query($conexion, "INSERT INTO demo(demo_ip, demo_nombre, demo_cargo, demo_telefono, demo_email, demo_institucion)VALUES('" . $_SERVER["REMOTE_ADDR"] . "', '".$_POST['nombre']."', '".$_POST['cargo']."', '".$_POST['telefono']."', '".$_POST['email']."', '".$_POST['institucion']."')");

//INICIO ENVÍO DE MENSAJE
$asunto       =  'Solicitud de precios para '.$_POST['institucion'];
$tituloMsj    = "¡Solicitud de precios!";
$bgTitulo     = "#6017dc";
$contenidoMsj = '
    <p>
        Hola <b>' . strtoupper($_POST["nombre"]) . '</b>, de acuerdo a tu solicitud, te enviamos el link de la presentación donde encontrarás detalles de las caracteristicas de la plataforma SITNIA y también sus planes y precios.<br><br>

        Recuerda que la plataforma SINTIA cuenta con un plan gratuito y está disponible para todos los colegios que desean utilizarla.<br>
    </p>
    <p>
        <a href="https://docs.google.com/presentation/d/1zfs6mqed7aDGFhmAomEWWGGaoCLPNkv-_b0EskcCLqE/edit?usp=sharing" style="display: inline-block; padding: 10px 20px; font-size: 16px; font-weight: bold; 
              color: #ffffff; text-decoration: none; border-radius: 5px; background-color: #41c4c4; 
              text-align: center;">SINTIA - Planes y precios</a>

        <a href="https://main.plataformasintia.com/app-sintia/main-app/registro.php" style="display: inline-block; padding: 10px 20px; font-size: 16px; font-weight: bold; 
              color: #ffffff; text-decoration: none; border-radius: 5px; background-color: #6a0dad; 
              text-align: center;">Empezar gratis</a>
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