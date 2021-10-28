<html>
<head>
<title>
</title>
<style>

</style>

</head>
<body>
   
    <div id = centrar>
         <h1>TypKey</h1>
         <hr style="height:2px;border-width:0;background-color:blue">
         <link href="css/estilo3.css" rel="stylesheet" type="text/css">
    </div>
  
    <form  class="form1" action="../index.php"  method= "POST">
<input type="submit" class="btn btn-primary btn-block"  name="submit" value="volver">
</form>

    <form  action="../controladores/r-prestamo.php" method= "POST">
       
        <div class="container">
            
            <table class="table" >
                

            <thead><br>
                <th>Inicio préstamo:</th>
                <th>Fin préstamo:</th>
                <th>Horario:</th>
                <th>Ambiente:</th>
                <th>instructor:</th>
                <th>observaciones:</th> 
                
                
            </thead>
            <tbody>
                                <td data-label="Inicio prestamo:"> <input type="date" name= inicio_prestamo value="2021/05/10"></td>
                                <td data-label="Fin prestamo:"><input type="date" name= fin_prestamo value="2021/05/10"></td>
                                <td data-label="Horario:"><input type="time" name= "h_ingreso" id="start" value="12:00:00">
                                                            <input type="time" name= "h_salida" id="start" value="12:00:00"></td>
                                <td data-label="Ambiente:">
                                    <select name="ambiente">
                                            <?php
                                                //se realiza la conexion con la base de datos
                                                include('../class/conexion.php');
                                                $conexion = Conex::conectar();
                                                $sql = "select no, cede, nom_aula from ambientes";
                                                $resultado = $conexion->query($sql);
                                                //se crea l alista de los ambientes
                                                while($fila = mysqli_fetch_array($resultado) )
                                                {
                                                    $ambiente = $fila[ 'no'];
                                                    $ambiente .= "  ";
                                                    $ambiente .= $fila[ 'cede'];
                                                    $ambiente .= "  ";
                                                    $ambiente .= $fila[ 'nom_aula'];
                                                    echo "<option values =' $ambiente'>  $ambiente </option>";
                                                }
                                            
                                                
                                            ?>
                                        </select></td>
                                <td data-label="Cede:"><select name="instructor">
                                            <?php
                                                //se realiza la conexion con la base de datos
                                        
                                                $sql = "select no_documento, nom_instructor from instructores";
                                                //echo $sql;
                                                $resultado= $conexion->query($sql);
                                                //se crea l alista de los ambientes
                                                while($fila = mysqli_fetch_array($resultado) )
                                                {
                                                    $instructor = $fila[ 'no_documento'];
                                                    $instructor .= "  ";
                                                    $instructor .= $fila[ 'nom_instructor'];
                                                    echo "<option values =' $instructor'>  $instructor </option>";
                                                }
                                                
                                            ?>
                                        </select></td>
                                <td data-label="observaciones:"><textarea name="comentario" maxlength="70" placeholder="Máximo 70 caracteres"></textarea></td>
                                

                               
                                
            </tbody>
    

            </table>
            </div>
            <br>
            <div class="form11"> <input type="submit" class="btn btn-primary btn-block" class ="form2"name="Enviar" value="Enviar"></div>
            
        
</form>

<!--barra de busqueda de disponbilidad-->

<br><br>
    <form  class="form" action="../controladores/disponibilidad.php"  method= "POST">

        Disponibilidad:<input type="date" name="fecha">
        <input type="time" name="hora">
        

        <input type="submit" class="btn btn-primary btn-block"  name="submit" value="BUSACAR">
    </form>



</body>
</html>