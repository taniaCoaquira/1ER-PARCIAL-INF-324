<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCPN</title>

    <style type="text/css">
        .fondo {
    margin: 0;
    padding: 0;   
    position: fixed;
    top: 0px;
}
.faclog {
    margin: 0;
    padding: 0;   
    position: fixed;
    left: 5px;
    top: 5px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333333;
    position: fixed;
    right: 0%;
    top: 200px;
    height: 50px;
    width: 100%;
}
ul .logo{
    float: left;
}
li {
    float: right;
}
ul .titulo{
    float: left;
    text-align: center;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


li a:hover {
    background-color: #0cb3bc;
}

body {
    margin: 0%;
    padding: 0%;
    background: rgb(255, 255, 255);
    background: radial-gradient(circle, rgb(218, 247, 247) 0%, rgb(195, 232, 235) 100%);
}
#contenido {
    padding: 0%;
    position: fixed;
    top: 250px;
    height: 100%;
    background: rgb(255, 255, 255);
    background: radial-gradient(circle, rgb(237, 253, 253) 0%, rgb(202, 213, 220) 100%);
}

#lista {
    display: grid;
    grid-gap: 1rem;
    grid-template-columns: 33% 33% 33%;
    grid-template-rows: 150px 150px;
}

.parrafo {
    margin: 50px;
    text-align: center;

}

.parrafo img {
    height: 150px;
}
#carrera {
    padding: 0%;
    margin-top: 250px;
    height: 100vh;
    background: rgb(255, 255, 255);
    background: radial-gradient(circle, rgb(225, 245, 245) 0%, rgb(47, 121, 127) 100%);
}
#descripcion {
    
    display: grid;
    grid-gap: 1rem;
    grid-template-columns: 50% 50%;
    grid-template-rows: 150px 150px;
}

.parrafo {
    margin: 50px;
    text-align: center;
    border-color: black;
    border: 2px;
    border-radius:10px;
}

h1 {
    text-align: center;
}

    </style>

</head>

<body>
<img class="fondo" src="http://localhost:8081/pregunta2/public/uploads/fondofac1.jpg" width="100%" height="200">
<img class="faclog" src="http://localhost:8081/pregunta2/public/uploads/faclog.png" width="200px" height="200">

    <header>
        <nav>
            <ul>
                <li class="logo"><a href="<?php echo base_url(); ?>">
                        FACULTAD DE CIENCIAS PURAS Y NATURALES
                    </a></li>
                <li><a href="<?php echo base_url(); ?>est">Estadistica</a></li>
                <li><a href="<?php echo base_url(); ?>fis">Fisica</a></li>
                <li><a href="<?php echo base_url(); ?>mat">Matematica</a></li>
            </ul>
        </nav>

    </header>