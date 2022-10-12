<?php
include "conexion.php";
if(isset($_GET['usuario'])){
    
    $sql= "select * from acceso xa, persona xp where xa.ci=xp.ci and xa.usuario='".$_GET['usuario']."' and xa.password='".$_GET['password']."'";
    $resultado=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    if($row==null){
        header("Location: /acceso_dir/index.php");
        die();
        mysqli_close($con);
    }else{
        session_start();
        $_SESSION["usuario"]=$_GET['usuario'];
        $_SESSION["pass"]=$_GET['password'];
        $_SESSION["nombre"]=$row['nombre_completo'];
        $_SESSION["rol"]=$row['nombre_rol'];
        if($_SESSION["rol"]=="administrador"){
            header("Location: /acceso_dir/principal.php");
        }else{
            header("Location: /acceso_dir/otro.php");
        }
    }
}else{
    header("Location: /acceso_dir/index.php");
}
?>