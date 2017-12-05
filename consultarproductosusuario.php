<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="logo.jpg">
<center> <h1> <font color="green" face="Comic Sans MS,arial,verdana">Fabric Pet</font> </h1> </center>
<link rel="stylesheet" href="esti.css">
<link rel="stylesheet" href="fonts.css">
</head>
<body background="fondo.png" > 
 <header>
  <center>
    <img src="logo.jpg" width="20%" height="150px">
 </center>

<section>
 <nav> 
 <ul>
 <li><a  href="inicio.php"> Inicio </a></li>
<li><a  href="categorias.php"> Categorias </a>
<ul>
<div>
 <li><a  href="datosproveedor.php"> perros </a></li>
 <li><a  href="#"> gatos </a></li>
 <li><a  href="#"> peces </a></li>
</div>
 </ul>
</li>
 <li><a  href="consultarproductosusuario.php"> Productos  </a>
 	<ul>
 		<div>
 <li><a  href="#"> casas  </a></li>
 <li><a  href="#"> comida  </a></li>
 <li><a  href="#"> vestuario  </a></li>
 <li><a  href="#"> medicina  </a></li>
 <li><a  href="#"> juguetes  </a></li>
 </ul>
 </div>
</li>
<li><a  href="#"> Ayuda</a></li> 
<li><th><h4>&nbsp&nbsp   &nbsp&nbsp   &nbsp&nbsp&nbsp&nbsp   &nbsp&nbsp      busqueda: <input type="text" name="barra" value=""><input type="submit" name="enviar" value="buscar"></th></h4> </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img src="carrito.jpg" width="13%" height="50px">
 </nav>
</section>
   
  
	</script>
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
 
<?php
}
?>
</body>
</html>