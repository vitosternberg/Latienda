<?php include "./plantilla.php";?>
<?php 	include "../conexion.php";?>
<?php

session_start();
	if(isset($_SESSION['datos_login'])){
/*$id_usuario="primagen@gmail.com";
$fecha_sol="2021-09-25 15:25:41";
$asunto="Prueba de Cambio";
$descripcion="Cambio de emergencia para reemplazo tarjeta de red";
$tipo_cambio="emergencia";
$aut_cambio="Claudia Cerda";*/

$id_usuario=$_SESSION['datos_login']['mail'];
$fecha_sol="2021-09-25 15:25:41";
$asunto=$_POST["asunto"];
$descripcion=$_POST["descripcion"];
$tipo_cambio=$_POST["tipo_cambio"];
$aut_cambio=$_POST["aut_cambio"];

$sql1="INSERT INTO `bitacora` (`id_registro`, `id_usuario`, `fecha`, `asunto`, `descripcion`, `tipo_cambio`, `aut_cambio`) VALUES 
(NULL, '$id_usuario', '$fecha_sol', '$asunto', '$descripcion', '$tipo_cambio', '$aut_cambio')";

$resultado2=$mysqli->query($sql1);

//echo "solicitud procesada";
?>
<div class="container">
	<div class="row">
		<div class="col-md-3">

		</div>
		<div class="col-md-6 pt-5">
			<div class="display-5">Solicitud procesada con exito <i class="fas fa-check-circle"></i></div>
			<div class="h5">redireccion a  bitacora en 5 seg. Gracias por usar SISI.</div>
		</div>
		<div class="col-md-3">

		</div>
	</div>
</div><?php
	}header("refresh:4;url=https://localhost/tienda/php/bitactora1.php");

?>
