<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: /acceso/index.php");
}else{
    include "login/conexion.php";
    $sql= "select * from  persona  where  ci='".$_SESSION["id"]."'";
    $resultado=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/lista_usuarios.css">
    <link rel="stylesheet" href="style/principal.css">
    <title>Informacion General</title>
</head>
<body>
<ul class="barra">
    <li class="itemB"><a href=""class= "active" ><?php echo $_SESSION["nombre"]?></a></li>
    <li class="itemB"><a href="" >online</a></li>
    </ul>
    <div class="contenido_b">
        <h1>DATOS PERSONALES</h1>
        <table >
        <tr>
            <td>Usuario</td>
            <td><?php echo $_SESSION["usuario"]?></td>
        </tr>
        <tr>
            <td>ci</td>
            <td><?php echo $row['ci']?></td>
        </tr>
        <tr>
            <td>Nombre completo</td>
            <td><?php echo $row['nombre_completo']?></td>
        </tr>
        <tr>
            <td>Fecha Nacimiento</td>
            <td><?php echo $row['fecha_nacimiento']?></td>
        </tr>
        <tr>
            
            <td>departamento</td>
            <td><?php echo $row['departamento']?></td>
        </tr>
    </table><br>
    <a href="/acceso/principal.php" class="btn"> ATRAS</a>
 </div> 
</body>
</html>