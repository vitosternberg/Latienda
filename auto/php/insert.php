<?php
include "../conexion.php";

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$rut=$_POST['rut'];

$sql="INSERT INTO `comprador`(`rut`,`nombre`, `apellido`) 
VALUES ('$rut','$nombre','$apellidos')";
$resultado=$mysqli->query($sql);

$mail=$_POST["mail"];
$pass=$_POST["pass"];
$pass = md5($pass);
//$pass= crypt($user_pass, $salt);
$calle=$_POST["calle"];
$numero=$_POST["numero"];
$depto=$_POST["depto"];
$comuna=$_POST["comuna"];
$region=$_POST["region"];
$pais=$_POST["pais"];
$rut=$_POST['rut'];

$sql2="
INSERT INTO `direccion`(`correoElec`, `password`, `calle`, `numero`, `dpto`, `id_comuna`, `id_region`, `id_pais`,`id_rut_direccion`) 
VALUES ('$mail','$pass','$calle','$numero','$depto','$comuna','$region','$pais','$rut')";
$resultado=$mysqli->query($sql2);


$sql3="select * from comprador";
$resultado=$mysqli->query($sql3);
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
}


$sql4="select * from direccion";
$resultado=$mysqli->query($sql4);
if($resultado->num_rows>0){
 echo "<table><tr><th>CORREO ELECTRONICO</th><th>CALLE</th><th>NUMERO</th><th>DPTO</th><th>ID_COMUNA</th><th>ID_REGION</th><th>ID_PAIS</th><th>ID_RUT_DIRECCION</th></tr>";
  // output data of each row
  while($row = $resultado->fetch_assoc()) {
    echo "
	<tr>
	<td>".$row["correoElec"]."</td>
	<td>".$row["calle"]."</td>
	<td>".$row["numero"]."</td>
	<td>".$row["id_comuna"]."</td>
	<td>".$row["id_region"]."</td>
	<td>".$row["id_pais"]."</td>
	<td>".$row["id_rut_direccion"]."</td>
	</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

?>