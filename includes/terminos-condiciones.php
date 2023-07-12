<?php 
$consulta = mysqli_query($conexion, "SELECT * FROM terminos_tratamiento_politica WHERE ttp_id='1'");
$ttPolitica = mysqli_fetch_array($consulta, MYSQLI_BOTH);
$descripcion = $ttPolitica['ttp_descripcion'];
?>
<p><?=$descripcion?></p>