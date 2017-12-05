<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estiloadmi.css">
<link rel="shortcut icon" href="logo.jpg">
<link rel="icon" type="image/png" href="Logo.jpg" width="20px">
   <link rel="stylesheet" type="text/css" href="conso.css">
<center> <h1> <font color="green" face="Comic Sans MS,arial,verdana">Fabric Pet<br>
Administrador</font> </h1> </center>
</head>
<body background="fondo.png" > 
  <?php
  class agregarproductos{
    function agregar(){
      echo '
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
</section>
   </div>
 </header>
</div>                                         
</head>
<div id="container">
  <div class="signup">
    <img src="Fondo.png">
     <center>

  <h2><p style="color:#53CACE; font-family:algerian;" >AGREGAR PRODUCTOS</p></h2>
  <form  method="post" action="guardarproductos.php">
     Id Producto: <input type="text" name="ID_PRODUCTO" placeholder="Escriba la Id del Producto" requiered/><br>
     Nombre Producto: <input type="text" name="NOMBRE_PRODUCTO" placeholder="Escriba el Nombre del Producto" required/>
     Descripcion: <textarea name="DESCRIPCION" rows="5" cols="40">Escribe Aquí la Descripción del Producto</textarea required/><br><br>
     Valor: <input type="number" name="VALOR" placeholder="Escriba el Precio del Producto" required/><br><br>
     Cantidad: <input type="number" name="CANTIDAD" placeholder="Cuantos Productos Desea Agregar" required/><br><br>

     Categoria: <input type="text" name="CATEGORIA" placeholder="Escriba la Categoria" ><br><br>
    <input type="submit" value="Agregar Producto" class="boton"></form>
</center>
  </div>
</div>';
}
}
$productos=new agregarproductos();
$productos->agregar();
?>	                             
</body>
</html>