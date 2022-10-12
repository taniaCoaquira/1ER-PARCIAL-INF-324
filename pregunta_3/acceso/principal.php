<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: /acceso/index.php");
}
?>
<html>
<head>
<title>principal</title>
<link rel="stylesheet" href="style/principal.css">
</head>
<body>
    <ul class="barra">
    <li class="itemB"><a href=""class= "active" ><?php echo $_SESSION["nombre"]?></a></li>
    <li class="itemB"><a href="" >online</a></li>
    </ul>
<ul class="nav">
  <li class="opt"><a  class="active"  href="">Principal</a></li>
  <li class="opt"><a href="/acceso/general.php">Informacion General</a></li>
  <li class="opt"><a href="/acceso/ayuda.php">Ayuda</a></li>
  <li class="opt"><a href="/acceso/login/cerrar_sesion.php">Cerrar sesion</a></li>
</ul> 
<div class="contenido" >
  
  <h1 class="titulo">BIENVENIDO</h1>
  <h4>Comienza el proceso de administracion</h4>
  <img src="/acceso/img/fondo_admin.jpg" alt="">
  </div>
</body>
</html>
