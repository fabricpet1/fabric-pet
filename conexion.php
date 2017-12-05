<?php
	$conexion=new mysqli("localhost","root","","fabric");

if ($conexion) {
echo " ";
}
else {
echo "Error: No se pudo conectar";
}
?>