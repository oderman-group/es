<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #ffffff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 10px;
    }

    .header {
        background-color: <?=$Plataforma->colorUno;?>;
        padding: 20px;
        text-align: center;
        color: #ffffff;
    }

    .header img {
        max-width: 100px;
        margin-bottom: 10px;
    }

    .header h1 {
        font-size: 24px;
        margin: 0;
    }

    .message-body {
        padding: 30px;
        color: #333333;
        line-height: 1.6;
    }

    .message-body h2 {
        font-size: 20px;
        margin-bottom: 20px;
    }

    .message-body p {
        margin-bottom: 15px;
        font-size: 16px;
    }

    .footer {
        background-color: #f4f4f4;
        padding: 15px;
        text-align: center;
        color: #777777;
        font-size: 14px;
    }

    .footer p {
        margin: 0;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        background-color: <?=$Plataforma->colorUno;?>;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
    }

    /* Responsive Design */
    @media screen and (max-width: 600px) {
        .container {
        width: 100%;
        }

        .header, .message-body, .footer {
        padding-left: 15px;
        padding-right: 15px;
        }

        .header img {
        max-width: 80px;
        }
    }
    </style>
	
<?php
$fin =  '<html><body style="background-color:#FFF;">';
$fin .= '
		<center>
			<div style="width:600px; text-align:justify; padding:15px;">
				<img src="https://plataformasintia.com/es/assets/img/sintia-logo-2023.png" width="40">
			</div>

			<div style="font-family:arial; background:'.$bgTitulo.'; width:600px; color:#FFF; text-align:center; padding:15px;">
				<h3>'.$tituloMsj.'</h3>
			</div>

			<div style="font-family:arial; background:#FAFAFA; width:600px; color:#000; text-align:justify; padding:15px;">
				'.$contenidoMsj.'
			</div>

			<div align="center" style="width:600px; color:#000; text-align:center; padding:15px;">
				<img src="https://plataformasintia.com/es/assets/img/sintia-logo-2023.png" width="30"><br>
				¡Que tengas un excelente d&iacute;a!<br>
				<a href="https://plataformasintia.com/">www.plataformasintia.com</a>
			</div>
		</center>
		<p>&nbsp;</p>
		';	
$fin .='';						
$fin .=  '<html><body>';