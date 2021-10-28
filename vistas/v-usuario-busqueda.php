<?php
session_start();
include('../class/conexion.php');

$conexion=Conex::conectar();




if(!isset($_POST['buscar'])){

    $_POST['buscar']= "";

    $buscar = $_POST['buscar'];
}


$buscar = $_POST['buscar'];
$id = $_SESSION[ 'usuario' ];
$SQL_READ = "SELECT * FROM usuario WHERE id ='$id' ";

$sql_query = mysqli_query($conexion, $SQL_READ);

//echo $SQL_READ;
 
    