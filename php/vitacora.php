<?php
include "../conexion.php";


date_default_timezone_set('America/Santiago');
$date   = new DateTime(); //this returns the current date time
$date   = new DateTime(); //this returns the current date time
$result = $date->format('Y-m-d H:i:s a');

$result=strval($result);
echo $result . "<br>";
$krr    = explode('-', $result);
//$result = implode("", $krr);
//echo $result;

$sql="INSERT INTO `registro` (`id_registro`, `log_reg`, `user`) VALUES (NULL, '$result', 'erwin')";
$resultado=$mysqli->query($sql);

/*INSERT INTO `registro` (`id_registro`, `log_reg`, `user`) VALUES (NULL, '2021-09-23 21:27:17', 'erwin');
$DateAndTime = date('m-d-Y h:i:s a', time());  
$hoy ="2021-09-23 21:27:17";
$hoy=$DateAndTimeformat('m-d-Y h:i:s a');
echo "The current date and time are $hoy";*/
?>      