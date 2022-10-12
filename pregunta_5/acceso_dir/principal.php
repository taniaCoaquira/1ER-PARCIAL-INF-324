<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: /acceso_dir/index.php");
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
  <li class="opt"><a  class="active"  href=""><?php echo 'Eres '.$_SESSION["rol"]?></a></li>
  <li class="opt"><a href="/acceso_dir/notas.php">Ver promedio de Notas</a></li>
  <li class="opt"><a href="/acceso_dir/login/cerrar_sesion.php">Cerrar sesion</a></li>
</ul> 
<div class="contenido" >
  
  <h1 class="titulo">BIENVENIDO</h1>
  <h4>Comienza el proceso de administracion</h4>
  <img src="/acceso_dir/img/fondo_admin.jpg" alt="">
  </div>
</body>
</html>
