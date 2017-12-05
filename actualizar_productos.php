<?php
include("conexion.php");
$ID_PRODUCTO=$_REQUEST['ID_PRODUCTO'];
$NOMBRE_PRODUCTO = $_POST['NOMBRE_PRODUCTO'];
$DESCRIPCION = $_POST['DESCRIPCION'];
$VALOR = $_POST['VALOR'];
$CATEGORIA= $_POST['CATEGORIA'];

		$query =("UPDATE productos SET   NOMBRE_PRODUCTO = '$NOMBRE_PRODUCTO',DESCRIPCION = '$DESCRIPCION', VALOR = '$VALOR' where ID_PRODUCTO= '$ID_PRODUCTO'");

		$resultado1= $conexion->query($query);
		if ($resultado1) {
			header("location: consultarproductosadmi.php");
		}
		else{
			echo "No Se Guardo: Por Favor Verifique Los Cambios";
		}
			
?>
