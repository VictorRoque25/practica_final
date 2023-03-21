<?php
$servidor = "localhost";
$Usuario = "root";
$Pass = "";
$BD = "practica";
$conexion = mysqli_connect($servidor,$Usuario,$Pass,$BD);
if($conexion->connect_error){
die('error al conectar la base de datos,$coneccion->connect_error');
}
?>