<?php
//echo "Envia: ".$datosEmpresa['dtc_clave_email'];

//Server settings
$mail->SMTPDebug = 2;                                       // Enable verbose debug output
$mail->isSMTP();                                            // Set mailer to use SMTP
$mail->Host       = 'mail.'.$datos['dtc_dominio'];  	// Specify main and backup SMTP servers
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = $datos['dtc_email'];                  
$mail->Password   = $datos['dtc_clave_email'];                      
$mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
$mail->Port       = 465;

//Sender
$mail->setFrom($datos['dtc_email'], $datos['dtc_nombre']);