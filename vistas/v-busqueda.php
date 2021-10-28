<?php

include '../class/conexion.php';
if(!isset($_POST['buscar'])){

    $_POST['buscar']= "";

    $buscar = $_POST['buscar'];
}

$conexion = Conex::conectar();

$buscar = $_POST['buscar'];
$SQL_READ="SELECT prestamo.fecha_registro, prestamo.fecha_registro, prestamo.fecha_prestamo, prestamo.fecha_devolucion,
             prestamo.hora_ingreso, prestamo.hora_salida, ambientes.cede, ambientes.nom_aula,
             instructores.No_documento, instructores.nom_instructor, prestamo.observaciones FROM
            ambientes INNER JOIN prestamo_ambientes AS prestamo on ambientes.no=prestamo.no
            INNER JOIN instructores  ON instructores.No_documento=prestamo.No_documento
             WHERE ambientes.cede like '%".$buscar."%' OR prestamo.fecha_prestamo LIKE'%".$buscar."%' OR instructores.nom_instructor LIKE'%".$buscar."%'
              OR ambientes.nom_aula LIKE'%".$buscar."%'";

$sql_query = mysqli_query($conexion, $SQL_READ);

//echo $SQL_READ;
 
    