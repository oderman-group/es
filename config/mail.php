<?php

//Server settings
$mail->SMTPDebug = 0;                                       // Enable verbose debug output
$mail->isSMTP();                                            // Set mailer to use SMTP
$mail->Host       = EMAIL_SERVER;  	// Specify main and backup SMTP servers
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = EMAIL_USER;                  
$mail->Password   = EMAIL_PASSWORD;                      
$mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
$mail->Port       = 465;

//Sender
$mail->setFrom(EMAIL_USER, NAME_SENDER);