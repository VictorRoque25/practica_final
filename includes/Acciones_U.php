<?php 
include "Conexion.php";
if(isset($_POST['btn'])){
$Nombre =$conecta->real_scape_string($_POST['Nombre']);
$Apellido =$conecta->real_scape_string($_POST['Apellido']);
$Direccion =$conecta->real_scape_string($_POST['Direccion']);
$Telefono =$conecta->real_scape_string($_POST['Telefono']);
$Fecha =$conecta->real_scape_string($_POST['Fecha']);
$Email =$conecta->real_scape_string($_POST['Email']);
if($Nombre==" "||$Apellido==" "||$Direccion==" "||$Telefono==" "||$Fecha==" "||$Email==" " ){
    $Alerta ="Faltan datos chavo";
}
else{
    $registro ="insert into usuario(Nombre, Aepllido, Direccion, Telefono, Fecha, Email)Values('$Nombre','$Apellido','$Direccion','$Fecha','$Email')";
    $registros =$conecta->query($registro);
    if($registros>0){
        echo "exitoso tu registro padrino";
    }else{
        echo "Ijoleno quedo registrado intentadenuevo";
    }
}


}

?>