<?php
    class Conexion extends PDO{
        private $host="localhost";
        private $bd="mibasetania";
        private $usuario="tania";
        private $clave="123456";
        
        public function __construct(){
            try{
                parent::__construct(
                    'mysql:host='.$this->host.';dbname='.$this->bd.';charset=utf8',
                    $this->usuario,$this->clave,
                    //manejo de errores
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)
                );
            }catch(PDOException $e){
                echo "Error: ".$e->getMessage();
                exit;
            }

        }

    }

    
?>

