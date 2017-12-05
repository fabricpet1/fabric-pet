

<?php
include("conexion.php");
$CORREO=$_POST['CORREO'];
$CONTRASENA=$_POST['CONTRASENA'];

$query ="select*from sesion where CORREO='".$CORREO."' and CONTRASENA='".$CONTRASENA."'";
$q= mysql_query($query);
try{
	if(mysql_result($q, O))
		{$result=mysql_result($q, O);

	 header("Location: inicio.php");
} else {
	echo "No se pudo iniciar la sesion";
}
}
catch(exeption $error){}
mysql_close($conexion);
?>