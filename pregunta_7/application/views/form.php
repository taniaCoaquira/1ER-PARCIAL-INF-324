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
    <h3 class="text-center"  style="color:#1282B0">  <b> PERSONA</b></h3>
    <br>
    <form action=<?= $link?> method="POST">
    <div class="form-group">
        <label>Ci</label>
        <input type="text" class="form-control" name="ci" value="<?php echo (isset($persona)) ? $persona['0']->ci :"";?>" placeholder="">
    </div>
    <div class="form-group">
        <label>Nombre completo</label>
        <input type="text" class="form-control"  value="<?php echo (isset($persona)) ? $persona['0']->nombre_completo :"";?>" name="nombre_completo" placeholder=" ">
    </div>
    <div class="form-group">
        <label>Fecha de Nacimiento</label>
        <input type="text" class="form-control" value="<?php echo (isset($persona)) ? $persona['0']->fecha_nacimiento :"";?>" name="fecha_nacimiento" placeholder="Ej. dd/mm/yyyy">
    </div>
    <div class="form-group">
        <label>Departamento</label>
        <input type="text" class="form-control" value="<?php echo (isset($persona)) ? $persona['0']->departamento :"";?>" name="departamento" placeholder="Ej. 01">
    </div><br>
    <button type="submit" class="btn btn-primary"><?php echo $action;?></button>

</div>
</form>
</body>
</html>