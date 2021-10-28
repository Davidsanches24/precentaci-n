<?php
    include("../class/usuario.php");
    $correo = $_POST[ 'correo' ];
    $usuario = $_POST[ 'usuario' ];
    $clave1 = $_POST[ 'contraseña' ];
    $clave2= $_POST[ 'c_contraseña' ];
   
   
    if ($clave1 == $clave2)
    {
       
       usuario::consultar_usuario(  $correo, $usuario, $clave1 );
       

    }
    else{
       echo '<script language="javascript">alert("las claves son distintas ");window.location.href="c-registrarse.php";</script>';
       
    }

    

    