
<?php
$mail=$_POST['email'];
$pass=$_POST['password'];

//echo "estas son las credenciales".$mail.$pass;
if(isset($mail) && isset($pass)){
	//$resultado=$conexion->query("select * from direccion where correoElec='".$_POST['email']."' and password='".sha1($_POST['password'])."' ")or die($conexion->error);
	$sql="select * from direccion where correoElec='".$mail."' and password='".$pass."' ";
	$resultado=$mysqli->query($sql);

		if(mysqli_num_rows($resultado)>0)
		{ 
			$datos_usuario=mysqli_fetch_row($resultado);
			$mail_registrado=$datos_usuario[1];
			$_SESSION['datos_login']=array(
			$mail_registrado=$datos_usuario[1]
			
			);
			
			header('Location: ../mantenedor.php');
			echo "Correo registrado : ".$mail_registrado;
			
		}else{
			echo "not working";
		}
	}
	else {
		echo "ingresar credenciales";
	}

	?>