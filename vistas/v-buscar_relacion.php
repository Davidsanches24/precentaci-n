<?php

include '../class/conexion.php';




if(!isset($_POST['buscar'])){

    $_POST['buscar']= "";

    $buscar = $_POST['buscar'];
}

$conexion = Conex::conectar();

$buscar = $_POST['buscar'];
$SQL_READ = "SELECT instructores.No_documento, instructores.nom_instructor, programas.ficha, programas.nom_programa FROM 
    instructores INNER JOIN prog_inst ON instructores.No_documento=prog_inst.No_documento
    INNER JOIN programas ON programas.ficha=prog_inst.ficha
     WHERE instructores.nom_instructor like '%".$buscar."%' OR programas.nom_programa like '%".$buscar."%' OR programas.ficha like '%".$buscar."%' OR instructores.No_documento like '%".$buscar."%'";


$sql_query = mysqli_query($conexion, $SQL_READ);

//echo $SQL_READ;
 
    