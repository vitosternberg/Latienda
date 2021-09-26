<?php include "./php/plantilla.php"?>

<?php
	
	session_start();
	if(isset($_SESSION['datos_login'])){
	//echo "manual ayuda";
	//include "../form_vitacora.php";
	$mail_registrado=$_SESSION['datos_login']['mail'];


	echo "Correo registrado : ".$mail_registrado;
?>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12"></div><!--fin_col1-->
		<div class="col-md-4 col-sm-12">
			<h1>Registro de Usuario</h1> 
			<form id="registro" action="./php/insert.php" method="POST" >
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Nombre</label>
			  <input type="text" name="nombre" class="form-control" id="name" placeholder="Ingrese su nombre">
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Apellidos</label>
			  <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Ingrese apellidos">
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Rut</label>
			  <input type="text" id="rut" class="form-control" name="rut"  max="5" oninput="checkRut(this)" placeholder="Ingrese RUT">
			</div>
			
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Calle</label>
			  <input type="text" name="calle" class="form-control" id="calle" placeholder="Ingrese calle">
			</div>
			
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Numero</label>
			  <input type="number" name="numero" class="form-control" id="numero" placeholder="Ingrese caracteres tipo numero">
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">dpto</label>
			  <input type="number" name="depto" class="form-control" id="dpto" placeholder="Ingrese dpto">
			</div>
			
			<div class="mb-3">
			  <select class="form-select" name="comuna" id="comuna" aria-label="Default select example">
			  <option value="">Selecciona comuna</option>
			  <option value="1">Independencia</option>
			  <option value="2">Santiago</option>
			  <option value="3">Vina del mar</option>
			  <option value="4">Valparaiso</option>
			</select>
			</div>
			<div class="mb-3">
			  <select class="form-select" name="REGION" id="region" aria-label="Default select example">
			  <option value="">Selecciona Region</option>
			  <option value="1">Santiago</option>
			  <option value="2">Valparaiso</option>
			</select>
			</div>
			<div class="mb-3">
			  <select class="form-select" name="pais" id="pais" aria-label="Default select example">
			  <option value="">Selecciona Pais</option>
			  <option value="1">Chile</option>
			</select>
			</div>
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Correo Eletr&oacutenico</label>
			  <input type="email" name="mail" class="form-control" pattern="[^@\s]+@[^@\s]+" title="Invalid email address" id="mail" placeholder="name@example.com">
			</div>
			<div class="mb-3">

				<label for="password" class="form-label"> Contraseña:</label>
				<input id="password" name="pass" class="form-control" id="pass"  type="password" placeholder="Tu password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra minúscula y mayúscula, y al menos 8 o más caracteres"/> 

			</div>
			<div class="mb-3">
			<p class="login button"> 
				<input type="submit"  value="Registrarme Ahora" /> 
				<!--<button type="button" id="botonEnvio" >Validar</button>-->
			</p>
			</div>
			<div id="aviso"></div>
			<!--<script src="./js/valida.js"></script>-->
			<script src="./js/valida2.js"></script>
			
			
		</form>
		</div><!--fin_col2-->
		<div class="col-md-4 col-sm-12">
		</div><!--fin_col3-->
	</div><!--fin_row-->
</div><!--fin_conta-->
<?php }else{?>
		<h1 class="h1">No tienes acceso, favor ingresar al login</h1>
		
	
<?php	
	header("refresh:4;url=https://localhost/tienda/");}
?>