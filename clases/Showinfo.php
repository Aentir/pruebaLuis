<?php
class Showinfo extends Connection implements CrudInterface {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function get() 
    {

        $sql = "SELECT * FROM t_alumnos WHERE alum_nombre = ?";
        
        $result = $this->db->prepare($sql);
        
        $result->execute(array("Juan"));

        while ($registro = $result->fetch(PDO::FETCH_ASSOC)) {
            echo  $registro["alum_nombre"] . $registro["alum_dni"] . "<br>";
        }

        $result->closeCursor();


    }

    function update()
    {

    }

    function delete($id)
    {

    }

    function add($values)
    {
        /*$db = $this->connect();
        $stmt = $db->prepare("INSERT INTO t_alumnos (alum_dni,alum_nombre,alum_apellido1,alum_apellido2) VALUES (?, ?, ?, ?)");

        $dni = $_POST['alum_dni'];
        $nombre = $_POST['alum_nombre'];
        $apellido1 = $_POST['alum_apellido1'];
        $apellido2 =$_POST['alum_apellido2'];

        $stmt->bindParam(':alum_dni', $dni);
        $stmt->bindParam(':alum_nombre', $nombre);
        $stmt->bindParam(':alum_apellido1', $apellido1);
        $stmt->bindParam(':alum_apellido2', $apellido2);

        if ($stmt->execute()) {
            echo "Datos guardados correctamente!";
        } else {
            echo "No se han podido guardar los datos!";
        }*/
    }
}




?>