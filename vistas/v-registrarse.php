<div id = centrar>
<h1>TypKey</h1>

<!-- para separar el titulo de el formulario -->
<br><br>
<form action="../controladores/respuesta_registrarse.php" method="POST">
    Correo
    <br>
    <input type ="email" name="correo" required>
    <br><br>
    Usuario 
    <br>
    <input type ="text" name="usuario"required>
    <br><br>
    Contraseña
    <br>
   
    <input type ="password" name="contraseña"required minlength="5" maxlength="12" title="la contraseña deve contar con 5 caracteres como minimo y 12 como maximo">
    
    <br><br>
    Confirmar Contraseña
    <br>
    <input type ="password" name = "c_contraseña" required minlength="5" maxlength="8">
    <br><br>
    <input type="checkbox" value="" required > <a href="../vistas/terminos.php" target="_blank"> Aceptar terminos y condiciones </a>
    <br><br>
    <br>
    
    <input type ="submit" value = "Registrarse" >


  
</form>






