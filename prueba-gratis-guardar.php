<?php
include("config/conexion.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'library/phpmailer/Exception.php';
require 'library/phpmailer/PHPMailer.php';
require 'library/phpmailer/SMTP.php';

$urlRed = REDIRECT_ROUTE;
if(empty($_POST["suma"]) || (!empty($_POST["suma"]) && md5($_POST["suma"])!=$_POST["sumaReal"])){
	header("Location:".$urlRed."/prueba-gratis.php?error=1&nombre=".base64_encode($_POST["nombre"])."&email=".base64_encode($_POST["email"])."&celular=".base64_encode($_POST["celular"])."&plan=".base64_encode($_POST["plan"])."&option=".base64_encode($_POST["option"]));
	exit();
}

$consultaUsuario = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM ".BD_GENERAL.".usuarios uss 
WHERE uss_usuario='{$_POST["email"]}' AND uss.institucion=".COD_DEMO_INSTITUCION.""), MYSQLI_BOTH);

if( !empty($consultaUsuario) ) {
	
	//INICIO ENVÍO DE MENSAJE
	$asunto = $_POST["nombre"] . ', Bienvenido de nuevo a la Plataforma SINTIA';
	$tituloMsj = "¡Bienvenido de nuevo a la Plataforma SINTIA!";
	$bgTitulo = "#6017dc";
	$contenidoMsj = '
		<p>
			Hola <b>' . strtoupper($consultaUsuario['uss_nombre']) . '</b>, Bienvenido de nuevo a la Plataforma SINTIA. Su cuenta como DIRECTIVO ya existía antes.<br>
			A continuación encontrarás tu usuario de acceso.<br>
			<b>Usuario:</b> ' . $consultaUsuario['uss_usuario'] . '<br>
		</p>

		<p>
			Por seguridad no te podemos enviar tu contraseña anterior. En caso de no recordala puedes hacer click en el siguiente enlace o copialo y pegalo:<br>
			<a href="https://demo.plataformasintia.com/app-sintia/main-app/recuperar-clave.php?inst='.COD_DEMO_INSTITUCION.'">https://demo.plataformasintia.com/app-sintia/main-app/recuperar-clave.php?inst='.COD_DEMO_INSTITUCION.'</a><br><br>
			Recuerda escoger del listado la institucion que dice <b>DEMO</b>
		</p>
				
		<p>
			<h3 style="text-align: center;">
			<a href="https://demo.plataformasintia.com/app-sintia/main-app/index.php?inst='.COD_DEMO_INSTITUCION.'" target="_blank" style="color: #41c4c4; font-weight:bold;">ACCEDER A MI CUENTA DE DIRECTIVO AHORA</a>
			</h3>
		</p>
				
	';
} else {

	$idUsr = strtotime("now");
	$clave = rand(10000, 99999);
	mysqli_query($conexion, "INSERT INTO ".BD_GENERAL.".usuarios(uss_id, uss_usuario, uss_clave, uss_tipo, uss_nombre, uss_idioma, uss_email, uss_bloqueado, uss_fecha_registro, uss_solicitar_datos, uss_celular, institucion, year)VALUES('".$idUsr."','" . $_POST["email"] . "', SHA1('" . $clave . "'), 5, '" . $_POST["nombre"] . "', 1, '" . $_POST["email"] . "', 0, now(), 1, '" . $_POST["celular"] . "', ".COD_DEMO_INSTITUCION.", 2023)");
	$idRegistro = mysqli_insert_id($conexion);

	mysqli_query($conexion, "INSERT INTO demo(demo_fecha_ingreso, demo_usuario, demo_ip, demo_cantidad, demo_correo_enviado, demo_fecha_ultimo_correo, demo_nocorreos, demo_plan)VALUES(now(), '" . $idRegistro . "', '" . $_SERVER["REMOTE_ADDR"] . "', 0, 1, now(), 0, '" . $_POST["plan"] . "')");

	//INICIO ENVÍO DE MENSAJE
	$asunto = $_POST["nombre"] . ', Bienvenido a la Plataforma SINTIA';
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
			<a href="https://demo.plataformasintia.com/app-sintia/main-app/index.php?inst='.COD_DEMO_INSTITUCION.'" target="_blank" style="color: #41c4c4; font-weight:bold;">ACCEDER A MI CUENTA DE DIRECTIVO AHORA</a>
			</h3>
		</p>
				
	';
}

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
echo '<script type="text/javascript">window.location.href="page-info.php?name='.base64_encode($_POST["nombre"]).'";</script>';
exit();