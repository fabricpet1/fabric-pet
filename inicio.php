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
  <?php
  class index{
    function pagina(){
  echo '
 <header>
  <center>
    <img src="logo.jpg" width="20%" height="150px">
 </center>
 	<aside>
 	<nav>
	<ul>
	<li><a  href="registro.php"> Registrarse </a></li>
<li><a  href="#"> Iniciar Sesión  </a>
  <ul>
    <div>
 <li><a  href="sesionusuario.php"> Usuario </a></li>
 <li><a  href="sesionadmi.php"> Administrador </a></li>
 </ul>
 </div>
</li>
</aside>
<br><br>
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
<br><br> 
   <div class="main">
   <div class="slides">
   <img src="1.jpg" width="100%" height="100%">
   <img src="2.jpg" width="100%" height="100%">
   <img src="3.jpg" width="100%" height="100%">
   <img src="4.jpg" width="100%" height="100%">
   <img src="5.jpg" width="100%" height="100%">
   <img src="6.jpg" width="100%" height="100%">
   <img src="7.jpg" width="100%" height="100%">
   <img src="8.jpg" width="100%" height="100%">
   <img src="9.jpg" width="100%" height="100%">
   </div>
   </div>
   <script src="java.js"></script>
   <script src="js/jquery.slides.js"></script>
   <script>
  $(function(){
  $(".slides").slidesjs({
    play: {
      active: true,

      effect: "slide",
 
      interval: 4000,
 
      auto: true,
 
      swap: true,
 
      pauseOnHover: false,
        
      restartDelay: 2500
    }
  });
});
	</script>
 </header>
 <footer>  
 	 <strong><h2>    <pre>    INSTAGRAM<a href="URL-Instagram" target="_blank"><img alt="sígueme en Instagram" height="32" src="http://2.bp.blogspot.com/-kQop92g4NsM/UidPJ06ER1I/AAAAAAAACAA/0mj0jK5hhXM/s1600/instagram2.png" title="sígueme en Instagram" width="32" /></a>                                           FACEBOOK<a href="URL-FACEBOOK" target="_blank"><img alt="siguenos en facebook" height="32" src="http://2.bp.blogspot.com/-q_Tm1PpPfHo/UiXnJo5l-VI/AAAAAAAABzU/MKdrVYZjF0c/s1600/face.png" title="siguenos en facebook" width="32" /></a>                                         TWITTER<a href="URL-Twitter" target="_blank"><img alt="siguenos en Twitter" height="40" src="http://2.bp.blogspot.com/-B0wCtNXYV3U/UiX1VnAQSrI/AAAAAAAAB6Q/ILY3m0NJVE8/s1600/Twitter+NEW.png" title="siguenos en Twitter" width="40" /></a>
</pre></h2> 
 	 <pre><h3>    diegocontreras314@gmail.com &nbsp&nbsp                                        juan diego contreras                                             @juancontreras </h3></pre>
 	                                                 
 	 		<pre><h3>    ammoya97@misena.edu.co &nbsp&nbsp                                             ana maria moya                                                   @anamariamoya </h3></pre>
 	 		<pre><h3>    53manuelrodriguez@gmail.com &nbsp&nbsp                                        manuel rodriguez                                                 @josemanuelrodriguez</h3></pre></strong>
 </footer >';
}
}
$principal =new index();
$principal->pagina();
 ?>
</body>
</html>