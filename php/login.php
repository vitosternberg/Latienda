<?php include "./php/plantilla.php";
include "../conexion.php";
//session_start();

$mail=$_POST['mail'];
//$mail="primagen@gmail.com";
//$pass="Vito.2021";
//b9b68c5103
$pass=$_POST["password"];

$sql="select * from `direccion` where correoElec ='".$mail."' and password='".$pass."' ";


$resultado=$mysqli->query($sql);
if($resultado->num_rows>0){
$resultado=$mysqli->query($sql);
	date_default_timezone_set('America/Santiago');
$date   = new DateTime(); //this returns the current date time
$date   = new DateTime(); //this returns the current date time
$result = $date->format('Y-m-d H:i:s a');

$result=strval($result);

$sql2="INSERT INTO `registro` (`id_registro`, `log_reg`, `user`) VALUES (NULL, '$result', '$mail')";
$resultado2=$mysqli->query($sql2);
	//header('Location: ../mantenedor.php');
	//echo "mail ya esta registrado";
	
	if(isset($mail) && isset($pass)){
	//$resultado=$conexion->query("select * from direccion where correoElec='".$_POST['email']."' and password='".sha1($_POST['password'])."' ")or die($conexion->error);
	$sql="select * from direccion where correoElec='".$mail."' and password='".$pass."' ";
	$resultado=$mysqli->query($sql);
	session_start();
		if(mysqli_num_rows($resultado)>0)
		{ 
			
			$datos_usuario=mysqli_fetch_row($resultado);
			$mail_registrado=$datos_usuario[1];
			$_SESSION['datos_login']=array(
			'mail'=>$mail
			
			);
			
			header('Location: ../mantenedor.php');
			echo "Correo registrado : ".$mail;
			
		}else{
			echo "not working";
		}
	}
	else {
		echo "ingresar credenciales";
	}
	
}else{
	
	echo "datos incorrectos:favor registrar email";
}/*
if($resultado->num_rows>0){
 echo "<table><tr><th>RUT</th><th>nombre</th><th>apellido</th></tr>";
  // output data of each row
  while($row = $resultado->fetch_assoc()) {
    echo "<tr>
	<td>".$row["rut"]."</td>
	<td>".$row["nombre"]."</td>
	<td>".$row["apellido"]."</td>
	</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}*/





?>