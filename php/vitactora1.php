<?php
	
	session_start();
	if(isset($_SESSION['datos_login'])){
	//echo "manual ayuda";
	include "../form_vitacora.php";
	}else{ ?>
		<h1 class="h1">No tienes acceso, seras redireccionado al inicio en 3 seg</h1>
		
	
<?php	
	
	header("refresh:4;url=https://localhost/tienda/");
	//header('Location: ../index.php');
	//sleep(2);
	}
?>