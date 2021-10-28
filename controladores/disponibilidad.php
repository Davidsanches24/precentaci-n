<?php
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
include( "../class/diponibilidad1.php" );
include( "../class/Vimprimir.php" );
$resultado = disponible::disponibilidad( $fecha, $hora );
$resultado = Vimprimir::imprimir( $resultado );
include( "r-disponibilidad.php" );
