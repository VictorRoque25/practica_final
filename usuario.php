<?php
include "includes/Conexion.php";
include "includes/Acciones_U.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container m-0 context-justify-center py-2">
        <div class="row text-center">
        <h1 class="text-success">Registro</h1>
        </div>
    <form id="registro" action="<?php echo $_SERVER['php_SELF']; ?>" Method="POST">
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="text" name="Nombre" class="form_control" placeholder="Nombre" requered>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="text" name="Apellido" class="form_control" placeholder="Apellidos" requered>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <textprea name="Direccion" class="form_control" placeholder="Direccion" requered>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="tel" name="Telefono" class="form_control" placeholder="55-55-55-55" requered>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="Date" name="Fecha" class="form_control" requered>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="Email" name="Eamil" class="form_control" placeholder="Gmail" requered>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="submit" value="Registrar" name="btn" class="btn btn-success"  requered>
        </div>
    </div>
    
</form>
 </div>
</body>
</html>