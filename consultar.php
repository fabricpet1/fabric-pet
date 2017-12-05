<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="logo.jpg">
<center> <h1> <font color="green" face="Comic Sans MS,arial,verdana">Fabric Pet<br>
Administrador</font> </h1> </center>
<link rel="stylesheet" href="estiloadmi.css">
<link rel="stylesheet" href="fonts.css">
</head>
<body background="fondo.png"> 
 <header>
  <center>
    <img src="logo.jpg" width="20%" height="150px">
 </center>
 	<aside>
<section>
 <nav> 
 <ul>
 <li><a  href="inicioadmi.php"> Inicio </a></li>
 
 <li><a  href="agregar.php"> Agregar Productos </a>
 <ul>
  <div>
<li><a  href="categorias.php"> Perrros </a></li>
<li><a  href="categorias.php"> Gatos </a></li>
<li><a  href="categorias.php"> Peces </a></li>
  </div>
 </ul>
</li>
</li>

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
<li><th><h4>&nbsp&nbsp   &nbsp&nbsp   &nbsp&nbsp&nbsp&nbsp   &nbsp&nbsp      busqueda: <input type="text" name="barra" value=""><input type="submit" name="enviar" value="buscar"></th></h4> </li>
 </nav>
</section>
   </div>
   
  
	</script>
 </header>
<?php
 include ("conexion.php");
 $query = "SELECT * FROM  registro";
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
		<td><font color="#5d5d5d">Tipo De Documento</td>
		<td bgcolor="#fff" align="center"><?php echo $row ['TIPODOC'];?></td>	
	</tr>
<tr>
		<td><font color="#5d5d5d">Numero De Documento</td>
		<td bgcolor="#fff" align="center"><?php echo $row['ID'];?></td>	
	</tr>
<tr>
		<td><font color="#5d5d5d">Nombres</td>
		<td bgcolor="#fff" align="center"><?php echo $row['NOMBRES'];?></td>	
	</tr>
<tr>
		<td><font color="#5d5d5d">Apellidos</td>
		<td bgcolor="#fff" align="center"><?php echo $row['APELLIDOS'];?></td>	
	</tr>
<tr>
		<td><font color="#5d5d5d">Correo</td>
		<td bgcolor="#fff" align="center"><?php echo $row['CORREO'];?></td>	
	</tr>
<tr>
		<td><font color="#5d5d5d">Telefono</td>
		<td bgcolor="#fff" align="center"><?php echo $row['TELEFONO'];?></td>	
	</tr>
<tr>
		<td><font color="#5d5d5d">Genero</td>
		<td bgcolor="#fff" align="center"><?php echo $row['GENERO'];?></td>	
	</tr>
<tr>
		<td><font color="#5d5d5d">Fecha de Nacimiento</td>
		<td bgcolor="#fff" align="center"><?php echo $row['FECHA'];?></td>	
	</tr>
<tr>
		<td><font color="#5d5d5d">Direccion</td>
		<td bgcolor="#fff" align="center"><?php echo $row['DIRECCION'];?></td>	
	</tr>
</table>
<a href="modificar.php?ID=<?php echo $row['ID'];?>"><input type="submit" value="Modificar"></a> <br><br>
<?php
}
?>
</body>
</html>