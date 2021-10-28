<html>

<head>


<title></title>



</head>

<body>


<div id="header">
			<ul class="nav">
				
				<li><a href="../index.php">Inicio</a></li>
		
			</ul>
		</div>
		</h1>


<form action="../controlaores/c-historial-usuario.php" method="POST">
            
        <div id = centrar> 


           
            <div class="field" id="buscar">

            
      
            </div>

            <div class = "bs">
              
            </div>


      

            <table class="table" border=2px>
      <thead><br>
      <div>
           
           
            <th>correo</th>
            <th>nombre de Usuario</th> 
        
        </div>
   </thead>

<tbody>



<?php

include "v-usuario-busqueda.php";

while($row= mysqli_fetch_array($sql_query)){?>

<tr> 
                
            
                
                
                <td><?=$row['correo']?></td>
                <td><?=$row['nombre_usuario']?></td>
            


<?php }


?></table></form>





</body>
</html>

