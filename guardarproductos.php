<?php


include("conexion.php");
$ID_PRODUCTO=$_REQUEST['ID_PRODUCTO'];
$NOMBRE_PRODUCTO = $_POST['NOMBRE_PRODUCTO'];
$DESCRIPCION = $_POST['DESCRIPCION'];
$VALOR = $_POST['VALOR'];
$CANTIDAD = $_POST['CANTIDAD'];
$CATEGORIA= $_POST['CATEGORIA'];
 
$query = "INSERT INTO `productos` (`ID_PRODUCTO`,`NOMBRE_PRODUCTO`, `DESCRIPCION`, `VALOR`, `CANTIDAD`, `CATEGORIA`) VALUES ('$ID_PRODUCTO','$NOMBRE_PRODUCTO', '$DESCRIPCION', '$VALOR', '$CANTIDAD', '$CATEGORIA');";
$resultado = $conexion-> query($query);
if($resultado) {
	 header("Location: inicioadmi.php");
} else {
	echo "El registro no se guardo";
}
?>