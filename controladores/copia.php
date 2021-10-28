<!doctype html>
<html>

<head>
    <meta charset="utf-8">


</head>

<body bgcolor="#bed7c0">
    <div class="main">
        
        <?php
        
        $directorio = '../uploat/';
        $subir_archivo = $directorio . basename('db_copia.sql');
        if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subir_archivo)) { //realizamos la conecion con la base de datos
            include('../class/conexion.php');
            $conexion = Conex::conectar();
            //se verifica si hay errores en la conexion con la base de datos
            $errores = array();
            //se busca la copia de la base de datos ingresada y se estrae el contenido
            $documentText = file_get_contents('../uploat/db_copia.sql');
            $documentText = rtrim($documentText, "\n");
            $documentText = str_replace("//", "", $documentText);

            // se elininan los puntos y comas a los delimiter para que no genere errores
            $documentText = str_replace("DELIMITER ;", "DELIMITER", $documentText);
            $scrips = explode('DELIMITER', trim($documentText));
            $tablas = explode(";", array_shift($scrips));
            $scrips = array_merge($tablas, $scrips);
            
            foreach ($scrips as $sql) {
                if (strlen(trim($sql)) > 0) {
                    $r = $conexion->query($sql);

                    if ($r == false) {
                        $arrores[] = $conexion->error;
                    }
                }
            }
            $errores = array();
        
            echo '<script language="javascript">alert("Se subio correctamente");window.location.href="../index.php"</script>';
        
        
        } else {
            echo '<script language="javascript">alert("algo ha salido mal");window.location.href="../vistas/copia.php"</script>';
            
        }

       
      
        ?>
    </div>


    </div>
    </bFody>

</html>