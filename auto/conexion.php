
<?php 
$host="localhost";
$dataname="auto_tienda";
$user="user_tienda";
$pass="8S2Ja0TdpbW4OjKp";

$mysqli = new mysqli("localhost", "user_tienda", "8S2Ja0TdpbW4OjKp", "auto_tienda");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}//else{echo "conexion ok";}








?>