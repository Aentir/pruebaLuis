<?php
class Showinfo extends Connection implements CrudInterface {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function get() 
    {
        //Por defecto hago que si no esta definido, le pongo un valor más que nada para evitar el error que no esta definido alum_nombre
        //ya que cuando entro la primera vez y no envias nada por get no esta definido.
        if(empty($_GET["alum_nombre"])){
            $nombre = "Luis";
        }else{
            $nombre = $_GET["alum_nombre"];
        }
        
        $sql = "SELECT * FROM t_alumnos WHERE alum_nombre = ?";
        
        $result = $this->db->prepare($sql);
        
        $result->execute([$nombre]);

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