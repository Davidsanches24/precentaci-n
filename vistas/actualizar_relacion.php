<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>

        <link rel = "stylesheet" href ="../css/estilo2.css">
        

</head>

<body>
<div class="main-wrapper">
<h1>Editar Registros  </h1>
<br><br>
<?php 
include("../class/function.php");
$id = $_GET['id'];
$id1=$_GET['id1'];
select_id('prog_inst','No_documento',$id);

?>


<form action="../controladores/actualizar_relacion_guardar.php" method="post">
    <div class="containe1">

    </div>
        <table class="table" >
            <thead><br>
                            <th>instructor</th>
                            <th>ambiente</th>
                            <th>Opcion</th>
            </thead>
            <tbody>
            <tr>
            <td  data-label="instructor:" ><select  name="instructor" >
        <?php
            //se realiza la conexion con la base de datos
           
            $conexion = Conex::conectar();
            $sql = "select * from instructores ORDER BY No_documento = $row->No_documento DESC";
            echo $sql;
            $resultado = $conexion->query($sql);
            //se crea l alista de los ambientes
			
            while($fila = mysqli_fetch_array($resultado) )
            {
                $instructor = $fila[ 'No_documento'];
                $instructor .= "  ";
                $instructor .= $fila[ 'nom_instructor'];
				
                echo "<option values =' $instructor'>  $instructor </option>";
            }
            
        ?>
    </select></td>
    <td  data-label="programa:" ><select  name="programa" >
        <?php
            //se realiza la conexion con la base de datos
           
            $conexion = Conex::conectar();
            $sql = "select * from programas ORDER BY ficha = $id1 DESC";
            echo $sql;
            $resultado = $conexion->query($sql);
            //se crea l alista de los ambientes
			
            while($fila = mysqli_fetch_array($resultado) )
            {
                $programa = $fila[ 'ficha'];
                $programa .= "  ";
                $programa .= $fila[ 'nom_programa'];
				
                echo "<option values =' $programa'>  $programa </option>";
            }
            
        ?>
    </select></td>
    <td  data-label="opcion:" ><input type="hidden" value="<?php echo $id;?> <?php echo $id1; ?>" name="id">
	<input type="submit" name="submit"></td>
    </tbody>
    </table>
    
	
</form>



</div>
</body>
</html>