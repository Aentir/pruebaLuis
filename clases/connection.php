<?php

    abstract class Connection {

    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "florida";


    public function __construct()
    {

    }

    public function connect ()
    {
        

        //Gestión de excepciones, INTENTA conectar a la base de datos y si no lo consigue, CAPTURA / CATCH el fallo
            try {
        //Se comunica el tipo de base de datos, donde está localizado el server, el nombre de la DB, el usuario y el password
                $db = new PDO("mysql:host=$this->server;dbname=$this->dbname", $this->user, $this->password);
        
        //Se establece un nivel de errores de excepción, ATTR_ERRMODE reporta los errores que ocurren pero el script continuará ejecutandose
        //ERRMODE_EXCEPTION señala donde está ocurriendo el error en cuestión
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "He conectado correctamente" . "<br>";
        
            }catch (PDOException $e) {
        //La función getMessage() nos da información del error que está sucediendo
                echo "Error: " . $e->getMessage();
        
            }

            return $db;
    }

    //Se libera la memoria  
    public function disconnect()
    {
        $db = null;
        return $db;
    }
}
?>