<?php 
include "Conexion.php";
if(isset($_POST['btn'])){
$Nombre =$conecta->real_scape_string($_POST['Nombre']);
$DireccionL =$conecta->real_scape_string($_POST['DireccionL']);
$TelefonoL =$conecta->real_scape_string($_POST['TelefonoL']);
$Email =$conecta->real_scape_string($_POST['Email']);
$NFace =$conecta->real_scape_string($_POST['NFace']);
$Horario =$conecta->real_scape_string($_POST['Horario']);
if($Nombre==" "||$Direccion==" "||$TelefonoL==" "||$Email==" "||$NFace==" "||$Horario==" " ){
    $Alerta ="Faltan datos chavo";
}
else{
    $registro ="insert into usuario(Nombre, DireccionL, TelefonoL, Email, NFace, Horario)Values('$Nombre','$DireccionL','$TelefonoL','$Email','$NFace','$Horario')";
    $registros =$conecta->query($registro);
    if($registros>0){
        echo "exitoso tu registro padrino";
    }else{
        echo "Ijole no quedo registrado intenta de nuevo";
    }
}


}

?>