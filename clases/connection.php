<?php

    abstract class Connection {

    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "florida";


    public function __construct()
    {
         try {
                    $db = new PDO("mysql:host=$this->server;dbname=$this->dbname", $this->user, $this->password);
            
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        echo "He conectado correctamente" . "<br>";
    
        } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
            
        }
    
        return $db;
    }

    /*public function connect()
    {
        return $this->db;
    }*/
    //Se libera la memoria  
    /*public function disconnect()
    {
        $db = null;
        return $db;
    }*/
}
?>