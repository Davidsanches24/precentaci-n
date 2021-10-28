<html>

<head>


      <title></title>



</head>

<body>

      <div class="header">
            <ul class="nav">
                  <li><a href="../index.php">Inicio</a></li>
                  <li><a href="../controladores/c-relacion.php">Realizar otra Busqueda</a></li>
            </ul>
      </div>
      <br>
      <form action="../controladores/c-relacion.php" method="POST">

            <div class="field" id="buscar">
                  <input type="text" id="buscar" name="buscar" placeholder="Buscar Registro" />
            </div>

      </form>
      <div class="container">
            <div>

                  <table class="table">

                        <thead><br>
                              <th>No_documento</th>
                              <th>instructor</th>
                              <th>ficha</th>
                              <th>programa</th>
                              <th>actualizar</th>
                              <th>eliminar</th>
                        </thead>
                        <tbody>
                              <?php
                              include "v-buscar_relacion.php";
                              while ($row = mysqli_fetch_array($sql_query)) { ?>
                                    <tr>
                                          <td data-label="No_documento:"><?= $row['No_documento'] ?></td>
                                          <td data-label="instructor:"><?= $row['nom_instructor'] ?></td>
                                          <td data-label="ficha:"><?= $row['ficha'] ?></td>
                                          <td data-label="programa:"><?= $row['nom_programa'] ?></td>
                                          <td data-label="Opcion:"><a href="../vistas/actualizar_relacion.php?id=<?php echo $row['No_documento']; ?>&id1=<?php echo $row['ficha']; ?>">
                                                      <input type="submit" class="btn btn-primary btn-block" name="submit" value="actualizar"></td>
                                                      <td data-label="eliminar"><a href="../vistas/el-relacion.php?ad=<?php echo $row['ficha']; ?>">
								<input type="submit" name="submit" value="Eliminar"></a></td>
                                    </tr>
                              <?php } ?>
                        </tbody>
                  </table>
            </div>
      </div>


</body>

</html>