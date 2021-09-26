<?php
include "./php/plantilla.php";
include "../conexion.php";

$rut=$_POST['rut'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
//$rut="12685";
/*$sql2="DELETE FROM `comprador` WHERE rut ='".$rut."'";
$mysqli->query($sql2);
/*echo $rut;*/
$sql="select * FROM `comprador` WHERE rut ='".$rut."'";

//$sql="SELECT * FROM `comprador` WHERE rut='12685'";

$resultado=$mysqli->query($sql);
if($resultado->num_rows>0){
	//echo $rut;
	$sql2="UPDATE `comprador` SET `nombre`='".$nombre."',`apellido`='".$apellidos."' WHERE rut ='".$rut."'";
	$mysqli->query($sql2);
	header('Location: ../mantenedor.php');
	//echo "mail ya esta registrado";
}else{
	
	echo "dato no encontrado";
}

?>