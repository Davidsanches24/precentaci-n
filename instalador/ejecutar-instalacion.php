

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejecutar Instalacion</title>
</head>
<body>
    

<div style="font-family: Consolas;">
<?php
    include("plantilla.php");
    $ser = $_GET['servidor'];
    $usu = $_GET['usuario'];
    $pww = $_GET['contraseña'];
    $bdd = $_GET['base-de-datos'];


    $conexion = @mysqli_connect($ser, $usu,$pww, $bdd);

    if (!$conexion){
        echo ('Verifique la conexion');
    }else{
        echo "<div class = 'text'> Conexión correcta<br><hr></div>";

        $errores = array();


        $documentText = file_get_contents('database_tipkey.sql');
        $documentText = rtrim($documentText,"\n");
        $documentText = str_replace("//", "", $documentText);
        $documentText = str_replace("DELIMITER ;", "DELIMITER", $documentText);


        $scrips = explode('DELIMITER', trim($documentText));

        $tablas = explode(";", array_shift($scrips));

        $scrips = array_merge($tablas, $scrips);

        foreach($scrips as $sql){
            if ( strlen( trim( $sql ) ) > 0){
                $r = $conexion->query($sql);

                if ($r == false){
                    $arrores[] = $conexion->error;
                }
            }   
        }

            
        if (count($errores) == 0){
            ?>
            <form action="../index.php"><?php
            echo '<input type = "submit" class = "boton" value= "iniciar"></div></form>';
          
            

            $archivoConexion = fopen('../class/conexion.php', 'w');

            $lines[] = "<?php\n";
            $lines[] = "\n class Conex\n";
            $lines[] = "\n {\n";
            $lines[] = "\t static function conectar()";
            $lines[] = "\n { \n";
            $lines[] = "\t return mysqli_connect('$ser', '$usu', '$pww', '$bdd');";
            $lines[] = "\n } \n";
            $lines[] = "\n } \n"; 
            $lines[] = "\n?>";
            
            foreach($lines as $linea){
                fputs($archivoConexion, $linea);
            }

            $nuevoArchivo = fopen("../config/stl.text", "a");
            fputs($nuevoArchivo, "Archivo instaldo");
            
            
        }
        
    }
?>


</div>

<script language="javascript">alert("este aplicativo no solicitara información sensible decuentas, monetaria, o que permitan atentar contrala integridad del usuario.");</script>
</body>
</html>

