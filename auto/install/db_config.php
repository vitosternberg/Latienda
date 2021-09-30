<?php include "../php/plantilla.php"?>
<?php include "../conexion.php"?>
<div class="container">
	<div class="row">
	<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
			<li class="breadcrumb-item"><a href="policy.php">Terminos uso</a></li>
			<li class="breadcrumb-item" aria-current="page">Configuracion</li>
			<li class="breadcrumb-item active" >Gracias</li>
		  </ol>
		</nav>
		<div class="col-md-2">
		
		</div><!--fin col1-->
		<div class="col-md-8 pt-2">
			<p align="center"><img src="../img/logo_tienda.jpg" style="width:10%" align="center" class="img-thumbnail rounded mx-auto d-bloc" ></p>
			<h1 class="display-5" align="center">Configuracion del Sistema </h1>
			<form class="pt-3" method="POST" action="./create_tables.php">
			<h1 class="h3 pb-2" align="left"> <i class="fas fa-database" style="color:#0DCAF0"></i> Configuracion BD</h1>
				<div class="mb-3 row">
					<h5 class="h5"> Nombre del Host: <strong><?php echo $host;?></strong></h5>
				</div>
				<div class="mb-3 row">
					<h5 class="h5"> Nombre de la Base de datos: <strong><?php echo $dataname;?></strong></h5>
				</div>
				<div class="mb-3 row">
					<h5 class="h5"> Usuario Base de datos: <strong><?php echo $user;?></strong></h5>
				</div>
				<div class="mb-3 row">
					<h5 class="h5"> Contraseña Base de datos: <strong><?php echo $pass;?></strong></h5>
				</div>
				
				<h1 class="h2 pt-2" align="left"><i class="fas fa-sign-in-alt" style="color:#0DCAF0" ></i> Configuracion Login</h1>
				<div class="mb-3 row">
					<label for="db_mail" class="col-sm-2 col-form-label">Nombre correo admin</label>
					<div class="col-md-6">
					  <input type="mail" name="mail" class="form-control" id="mail" requiered>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="db_pass" class="col-sm-2 col-form-label">contraseña</label>
					<div class="col-md-6">
					  <input type="password" name="pass" class="form-control" id="db_pass">
					</div>
				</div>
				<p align="left"><button type="submit" class="btn btn-info" align="rigth">Finalizar instalacion</button></p>
			</form>
		</div><!--fin col2-->
		<div class="col-md-2">

		</div><!--fin col3-->
	</div><!--fin row-->
</div><!--fin container-->