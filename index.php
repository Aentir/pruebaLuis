<?php
    require_once 'autoloader.php';
    $db = new Showinfo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PDO</title>
</head>
<body>
    <h1>Prueba de inicio para Git y futuro Push al repositorio remoto</h1>
    <form action="Showinfo.php" method="get">
        <label>DNI</label>
			<input type="text" name="alum_nombre">
			<input type="submit" name="enviando" value="Enviar">
    </form>
    <?=$db->get()?>
</body>
</html>