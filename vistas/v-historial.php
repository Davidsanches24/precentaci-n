<html>

<head>


<title></title>



</head>

<body>

        <div class="header">
		<ul class="nav">
			<li><a href="../index.php">Inicio</a></li>
			<li><a href="../controladores/c-historial.php">Realizar otra Búsqueda</a></li>
		</ul>
	</div> 
       <br>
	<form action="../controladores/c-historial.php" method="POST">
             
                  <div class="field" id="buscar">
                        <input type="text" id="buscar" name= "buscar" placeholder="Buscar Registro"/>
                  </div>
            
      </form> 
       <div class="container">
            <div>
                  
                   <table class="table" >

                        <thead><br>
                              <th>Fecha Registro</th>
                              <th>Fecha prestamo</th>
                              <th>Fecha devolución</th>
                              <th>Hora Ingreso</th>
                              <th>Hora Salida</th>
                              <th>Sede</th>
                              <th>aula</th>
                              <th>No_documento</th>
                              <th>instructor</th>
                              <th>Observaciones</th>
                              
                        </thead>
                        <tbody>
                        <?php
                              include "v-busqueda.php";
                              while($row= mysqli_fetch_array($sql_query)){?>
                              <tr>
                              <td data-label="Fecha Registro:"><?=$row['fecha_registro'] ?></td>
                              <td data-label="Fecha prestamo:"><?=$row['fecha_prestamo']?></td>
                              <td data-label="Fecha devolucion:"><?=$row['fecha_devolucion']?></td>
                              <td data-label="Hora Ingreso:"><?=$row['hora_ingreso']?></td>
                              <td data-label="Hora Salida:"><?=$row['hora_salida']?></td>
                              <td data-label="Cede:"><?=$row['cede']?></td>                   
                              <td data-label="aula:"><?=$row['nom_aula']?></td>
                              <td data-label="No_documento:"><?=$row['No_documento']?></td>
                              <td data-label="instructor:"><?=$row['nom_instructor']?></td>
                              <td data-label="Observaciones:"><?=$row['observaciones']?></td>
                              </tr>
                              <?php }?>
                        </tbody>
                  </table>
                  
                  <div class = "bs">
                       <?php
                       if ($sql_query->num_rows) {
                             $di="pdf.php?id=$buscar";
                             echo "<button onClick='window.open(". '"' . $di . '"'. ");'>Generar</button>";
                       }
                       ?>
                  </div>                  
            </div> 
      </div> 


</body>
</html>

