<?php

    include("../class/programas.php");
    $ficha = $_POST[ 'ficha' ];
    $nom_programa = $_POST[ 'nombre' ];
    
  
    if ($ficha == true && $nom_programa== true )
    {
      
        insertar_programa::insertar($ficha, $nom_programa);
        
       
        
    }
    else{
       
       header( "location: c-menu-programa.php" );
    }