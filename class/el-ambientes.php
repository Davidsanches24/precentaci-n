<?php
include('conexion.php');

class Eliminarambientes extends Conex
{

    static function Eliminar($ad)
    {

        $conexion = Conex::conectar();
        //porfavor no tocar esta linea de codigo esta inserta la imformación suministrada a la base de datos
        $sql = "DELETE FROM `ambientes` WHERE `ambientes`.`no` = '$ad'";
        $resultado = $conexion->query($sql);
        echo $sql;
        if ($conexion->affected_rows > 0) {
            //este da un mensaje de alerta
            echo '<script language="javascript">alert("se han eliminado los datos");window.location.href="../controladores/c-editar_ambientes.php";</script>';
        } else {   //este da un mensaje de alerta
            echo '<script language="javascript">alert("no se han eliminado los datos");window.location.href="../controladores/c-editar_ambientes.php";</script>';
        }
    }
}
