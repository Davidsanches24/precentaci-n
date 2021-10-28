
<?php

include('../class/conexion.php');


 $n = "";
 $conexion = Conex::conectar();
 $sql = "SELECT * FROM informe";
 if( $n != "" && $n != "undefined" ) $sql .= "where titulo like '%$n%'";


 $resultado = $conexion->query($sql);

 $filas = $resultado->fetch_all(MYSQLI_ASSOC);
 $filas = json_encode( $filas);
 echo $filas;
//echo json_encode( $filas );
 ?>