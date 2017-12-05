<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<link rel="icon" type="image/png" href="logo.JPG" width="20px">
  <title>Inicio Sesión</title>
  <link rel="stylesheet" type="text/css" href="cons.css">
</head> 
   <div id="container">
  <div class="signup">
   <body background="Fondo.png">
    <?php
    class sesionusu{
      function iniciarusuario(){
        echo'
     <center>
    
  <IMG src="logo.JPG" width="250px">
  <h3><p style="color:#53CACE; font-family:algerian;">INICIAR SESION<br>USUARIO</p></h3>
  
  <form  method="post" action="inicio.php">
    Correo: <input type="text" maxlength="40" name="login" placeholder="Correo" required=""/><br>
    Contraseña: <input type="password" maxlength="15" minlength="8" name="password" placeholder="Contraseña" required=""/>
    
    <h5><a href="#">¿Olvidaste la contraseña?</h5></a>
    <input type="submit" value="Iniciar Sesión" name="enviar" class="boton"></form>
</center>
  </div>
</div>';
}
}

$iniciarusuario=new sesionusu();
$iniciarusuario->iniciarusuario();
?>

</body>
</html>
 