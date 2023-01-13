<?php 
include("conexion-datos.php");
$conexion = mysqli_connect($servidorConexion, $usuarioConexion, $claveConexion, $baseDatosServicios);

$consultaDatos = mysqli_query($conexion, "SELECT * FROM datos_contacto WHERE dtc_id=1");
$datos = mysqli_fetch_array($consultaDatos, MYSQLI_BOTH);

$arrayURL = explode("/", $_SERVER['PHP_SELF']);
$paginaActual = end($arrayURL);