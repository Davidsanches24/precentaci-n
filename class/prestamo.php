<?php
include ('conexion.php');

class prestamos extends Conex
{
    static function ingresar_prestamo($f_prestamo, $f_devolucion, $h_ingreso, $h_salida, $ambiente,$No_documento, $observaciones)
    {
        $conexion = Conex::conectar();
        include("Csesiones.php");
        Csesiones::iniciar_sesion();
        $a=$_SESSION['usuario'] ;
       // echo $a;
        $p = explode (" ",$ambiente);
        $i = explode (" ",$No_documento);
        $sql= "call dd('$f_prestamo','$f_devolucion','$h_ingreso', '$h_salida','$p[0]') ";
        //echo $sql;
        $resultado = $conexion->query($sql);
        
        if ($conexion ->affected_rows > 0)
        {
            echo '<script language="javascript">alert("ya esta prestado");window.location.href="c-prestamo.php";</script>';
        }else{
        
            $conexion = Conex::conectar();
           $p = explode (" ",$ambiente);
            $sql = "insert into prestamo_ambientes(No_documento ,hora_ingreso, hora_salida, observaciones, no, id, fecha_prestamo, fecha_devolucion)";
            $sql .= "values('$i[0]','$h_ingreso', '$h_salida', '$observaciones', '$p[0]', '$a ', '$f_prestamo', '$f_devolucion')";
            $resultado = $conexion->query($sql);
            //echo $sql;
            if ($conexion ->affected_rows > 0)
            {
                echo '<script language="javascript">alert("Tus datos se guardaron");window.location.href="c-prestamo.php";</script>';
            }else
            {
                
                echo '<script language="javascript">alert("Tus datos no se guardaron");window.location.href="c-prestamo.php";</script>';
            }
        }
    }
}