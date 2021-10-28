<?php
include ('conexion.php');

class insertar_instructores extends Conex
{

    static function insertar ($No_documento, $nom_instructor)
        {
           
            $conexion = Conex::conectar();
            $sql= " insert into instructores ( No_documento, nom_instructor) values ('$No_documento', '$nom_instructor')";
            $resultado = $conexion->query($sql);
            if ($conexion ->affected_rows > 0)
            {
                
                
                echo '<script language="javascript">alert("Tus datos se guardaron");window.location.href="../vistas/agregar_instructor.php";</script>';
            }
            else
            {
                //echo $sql;
                
                echo '<script language="javascript">alert("Tus datos no se guardaron");window.location.href="../vistas/agregar_instructor.php";</script>';
                
                
                
            }
        }
}