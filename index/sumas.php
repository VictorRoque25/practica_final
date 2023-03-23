<?php
error_reporting(0);
if(isset($_POST ['btn'])){
$numero1 = $_POST['caja1'];
$numero2 =$_POST['caja2'];
$numero1 = (int)$numero1;
$numero2 = (int)$numero2;
$resultado = $numero1 + $numero2;
$valor = $resultado;
echo $valor;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.4.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="col-lg-12">
        <div class="Row">
            <h1 class="text-center">sumas</h1>
        </div>
        <div class="row">
            <form action="<?php echo $_SERVER[PHP_SELF]?>;" method="post">
            <input type="text" name="caja1" require>+
            <input type="text" name="caja2" require>=
            <input type="submit" values="calcular" name="btn">
        </form>
        </div>
    </div>
    <script src="js/bootstrap.min.js"> </script>
</body>
</html>