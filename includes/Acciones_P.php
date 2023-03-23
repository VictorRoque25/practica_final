<?php 
include "Conexion.php";
if(isset($_POST['btn'])){
$Nombre_P =$conecta->real_scape_string($_POST['Nombre_P']);
$clave =$conecta->real_scape_string($_POST['clave']);
$Direccion_P =$conecta->real_scape_string($_POST['Direccion_P']);
$Telefono_P =$conecta->real_scape_string($_POST['Telefono_P']);
$responsable =$conecta->real_scape_string($_POST['responsable']);
if($Nombre_P==" "||$clave==" "||$Direccion==" "||$Telefono_P==" "||$responsable==" " ){
    $Alerta ="Faltan datos chavo";
}
else{
    $registro ="insert into usuario(Nombre_P, Clave, Direccion_D, Telefono_P, responsable)Values('$Nombre_P','$clave','$Direccion_P','$responsable')";
    $registros =$conecta->query($registro);
    if($registros>0){
        echo "plantel registrado con exito";
    }else{
        echo "Error alregistrar elplantel";
    }
}


}

?>