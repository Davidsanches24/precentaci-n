<?php

    include("../class/ambientes.php");
    $cede = $_POST[ 'Sede' ];
    $nom_aula = $_POST[ 'ambiente' ];
  
    if ($cede == true && $nom_aula== true)
    {
      
        ambientes::ingresar_ambientes(  $cede, $nom_aula );
        
       

    }
    else{
       
       header( "location: ../vistas/agregar_ambiente.php" );
       
    }