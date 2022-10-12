<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: /acceso/index.php");
}
?>
<h3> No disponible por el momento</h3>