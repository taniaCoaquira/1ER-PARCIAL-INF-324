<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: /acceso_dir/index.php");
}else{
   echo "Hola ".$_SESSION["nombre"];
   echo "Tienes acceso pero no eres administrador, no tengo nada preparado para ti :C";
   session_destroy();
}

