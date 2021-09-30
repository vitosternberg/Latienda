<?php include "../php/plantilla.php"?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="display-5">creacion base de datos en Mysql</h1>
			<p class="text-justify">
				Por favor en tu motor de base de datos mysql ingresa la siguiente sentencia:<br>
				
				--
				-- Base de datos: `auto_tienda` ***o el nombre que elija para su base de datos***<br>
				--
				CREATE DATABASE IF NOT EXISTS `auto_tienda` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
				USE `auto_tienda`;
				COMMIT;
				
				
				
			</p>
		</div><!--fin col-->
	</div><!--fin row-->
	<div class="row">
		<div class="col-md-12">
				<nav aria-label="Page navigation example">
				  <ul class="pagination">
					<li class="page-item"><a class="page-link" href="#">inicio</a></li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">siguiente</a></li>
				  </ul>
				</nav>
		</div><!--fin col-->
	</div><!--fin row-->
</div><!--fin container-->
