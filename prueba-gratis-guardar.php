<?php
include("config/conexion.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'library/phpmailer/Exception.php';
require 'library/phpmailer/PHPMailer.php';
require 'library/phpmailer/SMTP.php';

$bdDemo="mobiliar_dev_".date("Y");

$urlRed = REDIRECT_ROUTE;
if(empty($_POST["suma"]) || (!empty($_POST["suma"]) && md5($_POST["suma"])!=$_POST["sumaReal"])){
	header("Location:".$urlRed."/prueba-gratis.php?error=1&nombre=".base64_encode($_POST["nombre"])."&email=".base64_encode($_POST["email"])."&celular=".base64_encode($_POST["celular"])."&plan=".base64_encode($_POST["plan"])."&option=".base64_encode($_POST["option"]));
	exit();
}

$clave = rand(10000, 99999);
mysqli_query($conexion, "INSERT INTO $bdDemo.usuarios(uss_usuario, uss_clave, uss_tipo, uss_nombre, uss_idioma, uss_email, uss_bloqueado, uss_fecha_registro, uss_solicitar_datos, uss_celular)VALUES('" . $_POST["email"] . "', SHA1('" . $clave . "'), 5, '" . $_POST["nombre"] . "', 1, '" . $_POST["email"] . "', 0, now(), 1, '" . $_POST["celular"] . "')");
$idRegistro = mysqli_insert_id($conexion);

mysqli_query($conexion, "INSERT INTO demo(demo_fecha_ingreso, demo_usuario, demo_ip, demo_cantidad, demo_correo_enviado, demo_fecha_ultimo_correo, demo_nocorreos, demo_plan)VALUES(now(), '" . $idRegistro . "', '" . $_SERVER["REMOTE_ADDR"] . "', 0, 1, now(), 0, '" . $_POST["plan"] . "')");

//INICIO ENVÍO DE MENSAJE
$tituloMsj = "¡Bienvenido a la Plataforma SINTIA!";
$bgTitulo = "#6017dc";
$contenidoMsj = '
	<p>
		Hola <b>' . strtoupper($_POST["nombre"]) . '</b>, Bienvenido a la Plataforma SINTIA. Hemos creado su cuenta como DIRECTIVO.<br>
		A continuación encontrará sus datos de acceso.<br>
		<b>Usuario:</b> ' . $_POST["email"] . '<br>
		<b>Contraseña:</b> ' . $clave . '<br>
	</p>
			
	<p>
		<h3 style="text-align: center;">
		<a href="https://developer.plataformasintia.com/app-sintia/main-app/" target="_blank" style="color: #41c4c4; font-weight:bold;">ACCEDER A MI CUENTA DE DIRECTIVO AHORA</a>
		</h3>
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

	// Content
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = $_POST["nombre"] . ', Bienvenido a la Plataforma SINTIA';
	$mail->Body = $fin;
	$mail->CharSet = 'UTF-8';

    $mail->send();
} catch (Exception $e) {
	echo "Error: {$mail->ErrorInfo}";
	exit();
}
echo '</div>';
//FIN ENVÍO DE MENSAJE
echo '<script type="text/javascript">window.location.href="https://developer.plataformasintia.com/app-sintia/main-app/index.php";</script>';
exit();