<?php
include "class/conexion.php";
$conexion = Conex::conectar();
$consulta='SELECT * FROM `usuario` WHERE id';
$consulta2=mysqli_query($conexion,$consulta); 
