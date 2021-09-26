<?php include "./php/plantilla.php";?>
<?php include "./conexion.php";?>


<?php
	
	session_start();
	if(isset($_SESSION['datos_login'])){
	//echo "manual ayuda";
	//include "../form_vitacora.php";
	$mail_registrado=$_SESSION['datos_login']['mail'];


	echo "Correo registrado : ".$mail_registrado;
?>

<div class="container pt-2">

<div class="row">
<div class="col-md-2"></div><!--fin col1-->
<div class="col-md-8">
<h3>
  Bienvenido Admin al Mantenedor: 
  <small class="text-muted">Actualiza los datos necesarios</small>
</h3>
	<h1>Ingrese rut para actualizar</h1>
	<form action="./php/update.php" method="POST">
	<div class="mb-3">
	<input name="rut" type="text" placeholder="ingrese rut a modificar">
	</div>
	<div class="mb-3">
	<input name="nombre" type="text" placeholder="modificar nombre">
	</div>
	<div class="mb-3">
	<input name="apellidos" type="text" placeholder="modificar apellidos">
	</div>
	<div class="mb-3">
			<p class="login button pt-2"> 
				<input type="submit" value="Actualizar" /> 
			</p>
	</div>
	</form>
		<h1>Ingrese rut para eliminar usuario</h1>
	<form action="./php/delete.php" method="POST">
	<div class="mb-3">
	<input name="rut" type="text">
	<div class="mb-3">
			<p class="login button pt-2"> 
				<input type="submit" value="eliminar" /> 
			</p>
	</div>
	</form>
	<h1>Ingrese a Sistema Intervencion Sistemas Integrados</h1>
	<div class="mb-3">
			<p class="login button pt-2"> 
				<a href="https://localhost/tienda/php/vitactora1.php" class="btn btn-secondary btn-lg " tabindex="-1" role="button" aria-disabled="true">Ir al SISI</a>
			</p>
	</div>
</div><!--fin col2-->
<div class="col-md-2">
<p class="change_link">
				Aún no eres miembro
				<a href="./registro.php" class="to_register">Formulario Registro</a>
			</p>
</div><!--fin col3-->
</div><!--fin row-->
</div><!--fin container-->
	<?php }else{?>
		<h1 class="h1">No tienes acceso, favor ingresar al login</h1>
		
	
<?php	
	header("refresh:4;url=https://localhost/tienda/");}
?>