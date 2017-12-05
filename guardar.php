<?php


include("conexion.php");
$TIPODOC=$_POST['TIPODOC'];
$ID=$_REQUEST['ID'];
$NOMBRES = $_POST['NOMBRES'];
$APELLIDOS = $_POST['APELLIDOS'];
$CORREO = $_POST['CORREO'];
$CONTRASENA = $_POST['CONTRASENA'];
$TELEFONO= $_POST['TELEFONO'];
$GENERO = $_POST['GENERO'];
$FECHA= $_POST['FECHA'];
$DIRECCION = $_POST['DIRECCION'];
$pass_cifrado = password_hash($CONTRASENA,PASSWORD_DEFAULT);

$query = "INSERT INTO `registro` (`TIPODOC`,`ID`, `NOMBRES`, `APELLIDOS`, `CORREO`, `CONTRASENA`, `TELEFONO`, `GENERO`, `FECHA`, `DIRECCION`) VALUES ('$TIPODOC','$ID', '$NOMBRES', '$APELLIDOS', '$CORREO', '$pass_cifrado', '$TELEFONO', '$GENERO', '$FECHA', '$DIRECCION');";
$resultado = $conexion-> query($query);
if($resultado) {
	 header("Location: inicio.php");
} else {
	echo "El registro no se guardo";
}
?>