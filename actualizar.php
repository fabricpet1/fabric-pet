<?php
include("conexion.php");
$ID=$_REQUEST['ID'];
$NOMBRES = $_POST['NOMBRES'];
$APELLIDOS = $_POST['APELLIDOS'];
$CORREO = $_POST['CORREO'];
$CONTRASENA = $_POST['CONTRASENA'];
$TELEFONO= $_POST['TELEFONO'];
$DIRECCION = $_POST['DIRECCION'];
 

		$query =("UPDATE registro SET   NOMBRES = '$NOMBRES',APELLIDOS = '$APELLIDOS', CORREO = '$CORREO', CONTRASENA = '$CONTRASENA',TELEFONO = '$TELEFONO', DIRECCION = '$DIRECCION' where ID= '$ID'");

		$resultado= $conexion->query($query);
		if ($resultado) {
			header("location: consultar.php");
		}
		else{
			echo "No Se Guardo: Por Favor Verifique Los Cambios";
		}
			
?>
