<div id = centrar>


<h1>TypKey</h1>

<br><br><br><br>
<form action="../controladores/c-autenticacion.php" method="POST">
    correo
    <br>
    <input type ="email" name="usuario" required>
    <br><br>
    contraseña
    <br>
    
    <input type ="password"  name="clave" required minlength="5" maxlength="8" title="error"><br>
    
    <a href="../controladores/c-recuperar.php">¿olvide mi cotraseña?</a>
    <br><br>
    
    <input type ="submit" value = "Aceptar">
    <br>
  
</form>
<a href="../controladores/c-registrarse.php" >Registrarse</a>     




