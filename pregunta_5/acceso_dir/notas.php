<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: /acceso_dir/index.php");
}else{
    include "login/conexion.php";
    $sql= "select CASE xp.departamento 
    WHEN '01'then 'Chuquisaca'
    WHEN '02'then 'La Paz'
    WHEN '03'then 'Cochabamba'
    WHEN '04'then 'Oruro'
    WHEN '05'then 'Potosí'
    WHEN '06'then '	Tarija'
    WHEN '07'then 'Santa Cruz'
    WHEN '08'then 'Beni'
    WHEN '09'then 'Pando'
    else 'otro'
    END
    departamento,AVG(xi.nota_final) promedio
    from persona xp, inscripcion xi where xp.ci=xi.ci_estudiante GROUP BY xp.departamento;";
    $resultado=mysqli_query($con,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/notas.css">
    <link rel="stylesheet" href="style/principal.css">
    <title>Usuarios</title>
    <ul class="barra">
    <li class="itemB"><a href=""class= "active" ><?php echo $_SESSION["nombre"]?></a></li>
    <li class="itemB"><a href="" >online</a></li>
    </ul>
    <div class="contenido_b">
        <h1>MEDIA DE NOTAS</h1>
        <table >
        <tr>
            <td>Departamento</td>
            <td>Promedio de notas</td>
        </tr>
            <?php
                while($fila=mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td>".$fila['departamento']."</td>";
                    echo "<td>".$fila['promedio']."</td>";
                    echo  "</tr>";  
                }
            ?>
    </table><br>
    <a href="/acceso_dir/principal.php" class="btn"> ATRAS</a>
 </div> 
</head>
<body>
</body>
</html>