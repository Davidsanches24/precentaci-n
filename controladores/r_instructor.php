<?php

    include("../class/instructores.php");
    $No_documento = $_POST[ 'CC' ];
    $nom_instructor = $_POST[ 'nombre' ];
    
  
    if ($No_documento == true && $nom_instructor== true )
    {
      
        insertar_instructores::insertar($No_documento, $nom_instructor);
        
       
        
    }
    else{
       
       header( "location: ../vistas/agregar_instructor.php" );
    }