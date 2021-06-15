<?php

session_start();

if(isset($_SESSION['nombre'])){
    if($_SESSION['usuario'] !=1){
        header('Location: login.php');
    }
}
else {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="bootstrap (1).css">
    <title>Document</title>
</head>
<body>
    
    <h1>Esta es la pagina del Administrador</h1>
    <a href="cerrar.php">Cerrar</a>

</body>
</html>