<?php include "./php/plantilla.php"?>

<div class="container">

		<div class="row">
			<div class="col-6 p-5">
			<h1>Bienvenido a La Tienda</h1> 
			<form id="registro" action="./php/login.php" method="POST">
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Email address</label>
			  <input type="email" name="mail" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			</div>
			<div class="mb-3">
			<p> 
				<label for="password" class="form-label"> Contraseña:</label>
				<input id="password" name="password" class="form-control" name="password" required="required" type="password" placeholder="Tu password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra minúscula y mayúscula, y al menos 8 o más caracteres"/> 
			</p>
			</div>
			<div class="mb-3">
			<p class="login button"> 
				<input type="submit" value="Login" /> 
			</p>
			</div>
			<p class="change_link">
				Aún no eres miembro
				<a href="./registro.php" class="to_register">Formulario Registro</a>
			</p>
		  </form>
		  </div><!--fin col1-->
		  <div class="col-6 p-5">
			<img src="./img/logo_tienda.jpg" class="img-thumbnail rounded mx-auto d-bloc" >
		  </div><!--fin col2-->
		</div><!--fin row-->
</div><!--fin container-->
