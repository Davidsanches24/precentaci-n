<?php
include('conexion.php');

class Eliminausuario extends Conex
{

    static function Eliminar($id)
    {

        $conexion = Conex::conectar();
        //porfavor no tocar esta linea de codigo esta inserta la imformación suministrada a la base de datos
        $sql = "DELETE FROM `usuario` WHERE `usuario`.`id` = $id";
        $resultado = $conexion->query($sql);
        echo $sql;
        if ($conexion->affected_rows > 0) {
            //este da un mensaje de alerta
            echo '<script language="javascript">alert("se ha eliminado el usuario");window.location.href="../controladores/c-iniciar_seccion.php";</script>';
        } else {   //este da un mensaje de alerta
            echo '<script language="javascript">alert("no se ha eliminado el usuario");window.location.href="../controladores/c-iniciar_seccion.php ";</script>';
        }
    }
}
