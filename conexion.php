
<?php 


$mysqli = new mysqli("localhost", "shopper", "vadpPxq)nAZV1Mu1", "tienda");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}/*else{echo "conexion ok";}*/








?>