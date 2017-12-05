<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<link rel="shortcut icon" href="logo.jpg">
<link href="cssregistro" rel="stylesheet" type="text/css">
<title>Registro</title>

</head>

<body background="fondo.png">
<center>

<?php
class registo{
	function formulario(){
echo  '
<link rel="icon" type="image/png" href="Logo.jpg" width="20px">
  <title>Registro</title>
  <link rel="stylesheet" type="text/css" href="conso.css">
</head>
<div id="container">
  <div class="signup">
    <body background="Fondo.png">
     <center>
  <IMG src="Logo.jpg" width="250px">
  <h2><p style="color:#53CACE; font-family:algerian;" >REGISTRO</p></h2>
  <form  method="post" action="guardar.php">
    Nombres: <input type="text" maxlength="40" name="NOMBRES" placeholder="Ingrese nombres" required=""/><br>
    Apellidos: <input type="text" maxlength="40" name="APELLIDOS" placeholder="Ingrese apellidos" required=""/><br>
    Tipo documento: 
    <br>
    <br>
    <h5>C.C<input type="radio" name="TIPODOC" value="Cedula de Ciudadania">
	T.I<input type="radio" name="TIPODOC" value="Tsrjeta de Identidad"></h5>
   
    <br>
    Número Documento: <input type="number" maxlength="15" name="ID" placeholder="Ingrese Número de documento" required=""/><br><br>
    Fecha De Nacimiento: <input type="date"  name="FECHA" required=""/><br><br>
    Genero: 
    <br>
    <h5>M<input type="radio" name="GENERO" value="Masculino">
        F<input type="radio" name="GENERO" value="Femenino"></h5>
    <br>
    Direccion: <input type="text" maxlength="30" name="DIRECCION" placeholder="Dirección" required=""/><br>
    Telefono: <input type="number" maxlength="20" name="TELEFONO" placeholder="Ingrese numero de Telefono" required=""/><br><br><br>
    Correo: <input type="email" maxlength="30" name="CORREO" placeholder="Correo" required=""/><br><br><br>
    Contraseña: <input type="password" maxlength="15" minlength="8" name="CONTRASENA" placeholder="Ingrese contraseña" required=""/>
    <input type="submit" value="Registrarse" class="boton"></form>
</center>
  </div>
</div>';
}
}
$guardar =new registo();
$guardar->formulario();
?>

</center>
</body>
</html>
