<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<link rel="icon" type="image/png" href="logo.JPG" width="20px">
  <title>Inicio Sesión</title>
  <link rel="stylesheet" type="text/css" href="cons.css">
   <div id="container">
  <div class="signup">
   <body background="Fondo.png">
    <?php
    class sesionadmi{
function inicio(){
  echo '
     <center>
   
  <IMG src="logo.JPG" width="250px">
  <h3><p style="color:#53CACE; font-family:algerian;">INICIAR SESION<br>ADMINISTRADOR</p></h3>
  
  <form  method="post" action="../administrador/inicioadmi.php">
    Correo: <input type="text" maxlength="40" name="login" placeholder="Correo" required=""/><br>
    Contraseña: <input type="password" maxlength="15" minlength="8" name="password" placeholder="Contraseña" required=""/>
    
    <h5><a href="#">¿Olvidaste la contraseña?</h5></a>
    <input type="submit" value="Iniciar Sesión" name="enviar" class="boton"></form>
</center>
  </div>
</div>';
}
}
$iniciar=new sesionadmi();
$iniciar->inicio();

?>
</body>
</html>