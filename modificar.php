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
$ID=$_REQUEST['ID'];
$query = "SELECT * FROM registro WHERE ID='$ID'" ;
$resultado = $conexion->query($query);
$row = $resultado->fetch_assoc()
?>
<form method="post" action="actualizar.php?ID=<?php echo $ID;?>">
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

<td>Nombres </td> <td><input type="text" name="NOMBRES" value="<?php echo $row ['NOMBRES'];?>" required/></td><br>
</tr>

<tr>
<td>Apellidos </td> <td><input type="text" name="APELLIDOS" value="<?php echo $row ['APELLIDOS'];?>" required/></td><br>
</tr>
<tr>
<td>Correo </td> <td><input type="email" name="CORREO" value="<?php echo $row ['CORREO'];?>" required/></td><br>
</tr>
<td>Telefono </td> <td><input type="number" name="TELEFONO" value="<?php echo $row ['TELEFONO'];?>" required/></td><br>
</tr>
<tr>
<td>Direccion </td> <td><input type="text" name="DIRECCION" value="<?php echo $row ['DIRECCION'];?>" required/></td><br>
</tr>
 </table>
 <input type="submit" value="MODIFICAR"><br><br>
 <a href="inicio.php"> VOLVER </a>
</form>
</body>
</html>
