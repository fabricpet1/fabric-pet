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
 
 <li><a  href="#"> Agregar Productos </a>
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
<?php
 include ("conexion.php");
$ID_PRODUCTO=$_REQUEST['ID_PRODUCTO'];
$query = "SELECT * FROM productos WHERE ID_PRODUCTO='$ID_PRODUCTO'" ;
$resultado = $conexion->query($query);
$row = $resultado->fetch_assoc()
?>
<form method="post" action="actualizar_productos.php?ID_PRODUCTO=<?php echo $ID_PRODUCTO;?>">
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
<td>NOMBRE PRODUCTO </td> <td><input type="text" name="NOMBRE_PRODUCTO" value="<?php echo $row ['NOMBRE_PRODUCTO'];?>" required/></td><br>
</tr>
<tr>
<td>DESCRIPCION </td> <td><input type="text" name="DESCRIPCION" value="<?php echo $row ['DESCRIPCION'];?>" required/></td><br>
</tr>
<td>VALOR </td> <td><input type="number" name="VALOR" value="<?php echo $row ['VALOR'];?>" required/></td><br>
</tr>
 </table>
 <input type="submit" value="MODIFICAR"><br><br>
 <a href="inicioadmi.php.php"> VOLVER </a>
</form>
</body>
</html>
