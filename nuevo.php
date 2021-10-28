<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
    <?php
    include("copia_seguridad.php");
    backupDatabaseTables("localhost","root", "","proyecto");
    ?>
    <a title="Descargar Archivo" href="" download="bd_copia.sql" style="color: blue; font-size:18px;">
     <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
    </a>

</body>
</html>
