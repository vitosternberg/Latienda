<?php include "../php/plantilla.php"?>
<?php include "../conexion.php"?>
<?php


$sql="
CREATE TABLE IF NOT EXISTS `bitacora` (
  `id_registro` int(10) NOT NULL,
  `id_usuario` varchar(50) NOT NULL,
  `fecha` datetime NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `tipo_cambio` varchar(20) NOT NULL,
  `aut_cambio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

";

$mysqli->query($sql);

$sql="CREATE TABLE IF NOT EXISTS `callejero` (
  `id_comuna` int(10) NOT NULL,
  `id_provincia` int(10) NOT NULL,
  `id_pais` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";
$mysqli->query($sql);


$sql="CREATE TABLE IF NOT EXISTS `comprador` (
  `id_rut` int(10) NOT NULL,
  `rut` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";
$mysqli->query($sql);


$sql="CREATE TABLE IF NOT EXISTS `direccion` (
  `id_direccion` int(10) NOT NULL,
  `correoElec` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numero` int(10) NOT NULL,
  `dpto` int(10) NOT NULL,
  `id_comuna` int(10) NOT NULL,
  `id_region` int(10) NOT NULL,
  `id_pais` int(10) NOT NULL,
  `id_rut_direccion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";
$mysqli->query($sql);


$sql="CREATE TABLE IF NOT EXISTS `registro` (
  `id_registro` int(10) NOT NULL,
  `log_reg` datetime NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";
$mysqli->query($sql);

$sql="
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_registro`);
  ";
$mysqli->query($sql);

$sql="ALTER TABLE `comprador`
  ADD PRIMARY KEY (`id_rut`),
  ADD KEY `rut` (`rut`);
  ";
$mysqli->query($sql);
  
  
$sql="ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `id_rut_direccion` (`id_rut_direccion`);
  ";
$mysqli->query($sql);

$sql="
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`);
";
$mysqli->query($sql);
  
$sql="  ALTER TABLE `bitacora`
MODIFY `id_registro` int(10) NOT NULL AUTO_INCREMENT;
";
$mysqli->query($sql);

$sql=" 
ALTER TABLE `comprador`
MODIFY `id_rut` int(10) NOT NULL AUTO_INCREMENT;
";
$mysqli->query($sql);

$sql=" 
ALTER TABLE `direccion`
MODIFY `id_direccion` int(10) NOT NULL AUTO_INCREMENT;
";
$mysqli->query($sql);
 
 $sql=" 
ALTER TABLE `registro`
MODIFY `id_registro` int(10) NOT NULL AUTO_INCREMENT;
";
$mysqli->query($sql); 

$sql=" 
ALTER TABLE `direccion`
  ADD CONSTRAINT `id_rut_direccion` FOREIGN KEY (`id_rut_direccion`) REFERENCES `comprador` (`rut`) ON DELETE CASCADE ON UPDATE CASCADE;
  ";
$mysqli->query($sql);

//validar si el usuario existe
//$mail="admin@gmail.com";
//$pass="Admin.2021";
$mail=$_POST["mail"];
$pass=$_POST["pass"];
$sql3="select * from direccion where correoElec='".$mail."' and password='".$pass."' ";
$resultado=$mysqli->query($sql3);
if($resultado->num_rows>0){?>

<div class="container">
	<div class="row">
		<div class="col-md-2">

		</div><!--fin col1-->
		<div class="col-md-8 pt-2">
				<p align="center"><img src="../img/logo_tienda.jpg" style="width:10%" align="center" class="img-thumbnail rounded mx-auto d-bloc" ></p>
			<h5 class="display-5" align="center">Usuario ya existe en base de datos</h5>
			<p align="center"><a href="./db_config.php" class="btn btn-info" >Volver a Configuracion</a></p>
		</div><!--fin col2-->
		<div class="col-md-2">

		</div><!--fin col3-->
	</div><!--fin row-->
</div><!--fin container-->

<?php
}else{
$rut="126855788";
$nombre="admin";
$apellidos="admin";
$sql="INSERT INTO `comprador`(`rut`,`nombre`, `apellido`) 
VALUES ('$rut','$nombre','$apellidos')";
$mysqli->query($sql);

//$mail=$_POST["mail"];
//$pass=$_POST["pass"];
$mail="admin@gmail.com";
$pass="Admin.2021";
$calle="calle";
$numero="123";
$depto="depto";
$comuna="comuna";
$region="region";
$pais="pais";
$rut="126855788";

$sql2="INSERT INTO `direccion`(`correoElec`, `password`, `calle`, `numero`, `dpto`, `id_comuna`, `id_region`, `id_pais`,`id_rut_direccion`) 
VALUES ('$mail','$pass','$calle','$numero','$depto','$comuna','$region','$pais','$rut')";
$mysqli->query($sql2);	
	header('Location: ./gracias.php');
}


?>

