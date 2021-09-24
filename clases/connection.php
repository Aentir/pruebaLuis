<?php

$server = "localhost";
$user = "root";
$password = "";
$dbname = "florida";

//Gestión de excepciones, INTENTA conectar a la base de datos y si no lo consigue, CAPTURA / CATCH el fallo
try {
    //Se comunica el tipo de base de datos, donde está localizado el server, el nombre de la DB, el usuario y el password
    $db = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);

    //Se establece un nivel de errores de excepción, ATTR_ERRMODE reporta los errores que ocurren pero el script continuará ejecutandose
    //ERRMODE_EXCEPTION señala donde está ocurriendo el error en cuestión
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "He conectado correctamente";

}catch (PDOException $e) {
    //La función getMessage() nos da información del error que está sucediendo
    echo "Error: " . $e->getMessage();

}

/*$stmt = $db->prepare("INSERT INTO t_alumnos (alum_dni,alum_nombre,alum_apellido1,alum_apellido2) VALUES (:dni, :nombre, :apellido1, :apellido2)");
$stmt->bindParam(':dni' , $dni);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':apellido1', $apellido1);
$stmt->bindParam(':apellido2', $apellido2);*/

//Solo coge los parametros que estén debajo del estamento preparado y ANTES del execute
/*$dni = "20123456B";
$nombre = "Juan";
$apellido1 = "Perez";
$apellido2 = "Martinez";
$stmt->execute();*/

/*echo "Datos registrados correctamente";*/

//Se libera la memoria
$db = null;

?>