<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estiloadmi.css">
<link rel="shortcut icon" href="logo.jpg">
<center> <h1> <font color="green" face="Comic Sans MS,arial,verdana">Fabric Pet<br>
Administrador</font> </h1> </center>
</head>
<body background="fondo.png" > 
 <header>
  <center>
    <img src="logo.jpg" width="20%" height="150px">
 </center>
 	<aside>
<section>
 <nav> 
 <ul>
 <li><a  href="inicioadmi.php"> Inicio </a></li>
 
 <li><a  href="Agregar.php"> Agregar Productos </a>
 <ul>
  <div>
<li><a  href="categorias.php"> Perrros </a></li>
<li><a  href="categorias.php"> Gatos </a></li>
<li><a  href="categorias.php"> Peces </a></li>
  </div>
 </ul>
</li>
</li>
 <li><a  href="consultarproductosadmi.php"> consultar productos </a></li>
 <li><a  href="sesion.php"> Reportes  </a>
  <ul>
    <div>
 <li><a  href="categorias.php"> Reporte de Ventas  </a></li>
 <li><a  href="consultar.php"> Reporte de Usuarios </a></li>
 <li><a  href="#"> Reporte de Visitantes </a></li>
 <li><a  href="#"> Inventario de productos </a></li>
 </ul>
 </div>
</li>
<li><th><h4>&nbsp&nbsp   &nbsp&nbsp   &nbsp&nbsp&nbsp&nbsp   &nbsp&nbsp &nbsp&nbsp   &nbsp&nbsp   &nbsp&nbsp&nbsp&nbsp   &nbsp&nbsp      busqueda: <input type="text" name="barra" value=""><input type="submit" name="enviar" value="buscar"></th></h4> </li>
  <li><a  href="#"> Cerrar Sesión </a>
 </nav>
</section>
   </div>
   
  
 
 </header>
<?php
 include ("conexion.php");
 $query = "SELECT * FROM  productos";
 $resultado = $conexion->query($query);
 while ($row = $resultado->fetch_assoc()){
?>
<style type="text/css">
table {
    border-collapse: collapse;
    width: 50%;
}

th, td {
    text-align: left;
    padding:8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
 </style>
 <table border="6" class="table">
	<tr>
		<td><font color="#5d5d5d">Id Producto</td>
		<td bgcolor="#fff" align="center"><?php echo $row ['ID_PRODUCTO'];?></td>	
	</tr>
<tr>
		<td><font color="#5d5d5d">Nombre Producto</td>
		<td bgcolor="#fff" align="center"><?php echo $row['NOMBRE_PRODUCTO'];?></td>	
	</tr>
<tr>
		<td><font color="#5d5d5d">Descripcion</td>
		<td bgcolor="#fff" align="center"><?php echo $row['VALOR'];?></td>	
	</tr>
<tr>
		<td><font color="#5d5d5d">Valor</td>
		<td bgcolor="#fff" align="center"><?php echo $row['VALOR'];?></td>	
	</tr>
<tr>
		<td><font color="#5d5d5d">Cantidad</td>
		<td bgcolor="#fff" align="center"><?php echo $row['CANTIDAD'];?></td>	
	</tr>
<tr>
		<td><font color="#5d5d5d">Categoria</td>
		<td bgcolor="#fff" align="center"><?php echo $row['CATEGORIA'];?></td>	
	</tr><br>

</table>
 <a href="modificarproducto.php?ID_PRODUCTO=<?php echo $row['ID_PRODUCTO'];?>"><input type="submit" value="Modificar"></a> <br><br>
<?php
}
?>
</body>
</html>