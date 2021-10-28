<?php
    //Datos de la base de datos
    //backupDatabaseTables("localhost","root", "","proyecto");
    $fecha= Date("Y-m-d H:i:s");
    $lineas = array();
    $ntablas= array();
  
    
    $lineas[] = "-- Copia de seguridad\n";
    $lineas[] = "-- Fecha de creació ".$fecha."\n";
    $lineas[] = "-- IP donde se solicita\n\n";

    $lineas[] ="SET FOREIGN_KEY_CHECKS=0;";
    // Creación de tablas

    // $tablas = file_get_contents("instalador/database_tipkey.sql");

    // $lineas[] =$tablas;
    $tablasDatos = array();
    include("../class/conexion.php");
    $co = Conex::conectar();
    $tablassql="show tables";

    //$ntablas = $co->query("show tables")->fetch_all(MYSQLI_NUM);
    $ntablas[0]="ambientes";
    $ntablas[1]="instructores";
    $ntablas[2]="programas";
    $ntablas[3]="usuario";
    $ntablas[4]="prog_inst";
    $ntablas[5]="prestamo_ambientes";
  for ($i=0; $i < 6; $i++) { 
      $lineas[]="truncate table $ntablas[$i];\n";
      $n=$ntablas[$i];
      $sql="SELECT * FROM $n";
    $tablasDatos[$n] = $co->query($sql);
  }
  
    // foreach($ntablas as $tabla){
    //     $n = $tabla[0];
    //     $tablasDatos[$n] = $co->query("SELECT * FROM $n")->fetch_all(MYSQLI_ASSOC);
    // }
    //se rrecoren las tablas de la base de datos
    foreach($tablasDatos as $cc=>$vv){

        foreach($vv as $fila){
            $campos = "";
            $valores = "";
    
            foreach($fila as $c=>$v){
                $campos .= ", $c";
                $valores .=", '$v'";
            }
            $campos = ltrim($campos, ", ");
            $valores = ltrim($valores, ", ");

            $lineas[] ="Insert INTO $cc($campos) VALUES($valores);\n";
        }
        $lineas[] = "\n";
    }
    $lineas[] ="SET FOREIGN_KEY_CHECKS=1;";
    
    //echo count($lineas);
    $handle = fopen('../copia/db_copia'.'.sql','w+');

    foreach($lineas as $linea){
        fwrite($handle, $linea);
        //echo $linea;
    }

    fwrite($handle,$return);
    fclose($handle);
 
   header('location:../index.php');
   
    

?>