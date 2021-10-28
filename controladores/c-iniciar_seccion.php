<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
</head>
<body>

<?php
include( "../class/Csesiones.php" );
Csesiones::iniciar_sesion();
$_SESSION[ 'usuario' ] = "";
$seccion = "../vistas/v-iniciar_seccion.php";




include("../vistas/v-plantilla.php");
?>
</body>
</html>


