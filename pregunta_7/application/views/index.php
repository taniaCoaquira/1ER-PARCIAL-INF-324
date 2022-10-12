
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <br><br>
    <h3 class="text-center"  style="color:#1282B0"> <b> LISTA DE PERSONAS </b></h3>
    <br>
    <a href="create" class="btn btn-primary"  role="button">Crear nueva persona +</a>
    <br>
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Ci</th>
        <th scope="col">Nombre completo</th>
        <th scope="col">Fecah de nacimiento</th>
        <th scope="col">Departamento</th>
        </tr>
    </thead>
    <tbody>

        <?php
        foreach($personas as $persona){
            echo "<tr>";
            echo "<td>".$persona->ci."</td>";
            echo "<td>".$persona->nombre_completo."</td>";
            echo "<td>".$persona->fecha_nacimiento."</td>";
            echo "<td>".$persona->departamento."</td>";
        ?>
        <td> <a href="edit/<?= $persona->ci ?>" class="btn btn-primary"  role="button">Editar</a></td>
        <td><a href="destroy/<?= $persona->ci ?>"    class="btn btn-danger"  role="button">Eliminar</a></td>
        <?php
             echo "</tr>";
        }
      ?>
    </tbody>
    </table>
    



</div>
</form>
</body>
</html>