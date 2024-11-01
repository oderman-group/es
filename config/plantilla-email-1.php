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

    /* .button {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        background-color: <?=$Plataforma->colorUno;?>;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
    } */

    /* Estilos para los botones en el contenido del correo */
.button {
    display: inline-block;
    padding: 12px 24px;
    margin: 10px 0;
    font-size: 16px;
    font-weight: bold;
    color: #ffffff;
    text-decoration: none;
    border-radius: 8px;
    background-color: #41c4c4; /* Color principal */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.button:hover {
    background-color: #2da6a6; /* Color de fondo en hover */
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3); /* Sombra más intensa */
}

.button:active {
    background-color: #1b7d7d; /* Color de fondo al hacer clic */
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); /* Sombra reducida */
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