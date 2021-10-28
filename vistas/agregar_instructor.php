<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Instructor</title>
    <link rel="stylesheet" href="../css/agregar.css">
</head>
<body>
  <div id = centrar>
    <h1>TypKey</h1>
    <hr style="height:2px;border-width:0;background-color:blue">
            
  </div>
   

  <form action="../controladores/r_instructor.php" method="POST" id="form">

    <fieldset>
      <h2 class="fs-title">Ingresar Instructor</h2>
      <input type="number" name="CC" id="imp" placeholder="Numero de Identificacion" required>
      <input type="text" name="nombre" id="imp" placeholder="Nombres y Apellidos" required />
      
      
      
      <a class="next action-button" href="../index.php">Volver</a>
      <input type="submit" class="next action-button" name="Enviar" value="Enviar">
  
        
     
    </fieldset>
    
    
  </form>
</body>
</html>