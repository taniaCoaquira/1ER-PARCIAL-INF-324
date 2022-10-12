<?php
include "conexion.php";
$con=new Conexion();

//Recuperar lista de registros
if($_SERVER['REQUEST_METHOD']=='GET'){
    
        $consulta="select * from persona";
        $sql=$con->prepare($consulta);
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 hay datos");
        echo json_encode($sql->fetchAll());
        exit;
    
}
//Insertar registro (ALTA)
if($_SERVER['REQUEST_METHOD']=='POST'){
        $consulta="insert into persona(ci,nombre_completo, fecha_nacimiento,departamento) VALUES (:ci,:nombre_completo, :fecha_nacimiento,:departamento); ";
        $sql=$con->prepare($consulta);
        $sql->bindValue(':ci',$_POST['ci']);
        $sql->bindValue(':nombre_completo',$_POST['nombre_completo']);
        $sql->bindValue(':fecha_nacimiento',$_POST['fecha_nacimiento']);
        $sql->bindValue(':departamento',$_POST['departamento']);

        $sql->execute();
        $ci=$con->lastInsertId();
        if($ci){
            header("HTTP/1.1 200 hay datos");
            echo json_encode($ci);
            echo "ci del resgistro existente";
            exit;
        }
}
//Actualizar registro (CAMBIO)
if($_SERVER['REQUEST_METHOD']=='PUT'){
    $consulta="update persona set nombre_completo=:nombre_completo, fecha_nacimiento=:fecha_nacimiento, departamento=:departamento where ci =:ci";
    
    $sql=$con->prepare($consulta);
    $sql->bindValue(':nombre_completo',$_GET['nombre_completo']);
    $sql->bindValue(':fecha_nacimiento',$_GET['fecha_nacimiento']);
    $sql->bindValue(':departamento',$_GET['departamento']);
    $sql->bindValue(':ci',$_GET['ci']);
    $sql->execute();
    header("HTTP/1.1 200 ok");
    echo "registro actualizado correctamente";

}
//Eliminar registro (BAJA)
if($_SERVER['REQUEST_METHOD']=='DELETE'){
    $consulta="delete from persona where ci=:ci ;";
    $sql=$con->prepare($consulta);
    $sql->bindValue(':ci',$_GET['ci']);
    $sql->execute();
    header("HTTP/1.1 200 hay datos");
    echo "resgistro eliminado exitosamente";
    exit;
}
header("HTTP/1.1 400 ok Bad Request")

?>