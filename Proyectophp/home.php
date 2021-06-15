<?php

session_start();
if (isset($_SESSION['nombre'])) {
    if($_SESSION['usuario'] !=2){
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
    <center>
        <h1>Bienvenida <?php echo $_SESSION['nombre'] ?> </h1>
        <a href="cerrar.php">Cerrar sesion</a>
        

        <h3>Lista de productos</h3><br>
        <a href="agregar.php">Agregar nuevo</a>
        <table>
         <tr>
                <td>id producto</td>
                <td>Nombre</td>
                <td>Costo</td>
                <td>Codigo Barra</td>
                <td>Categoria</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>

            <?php
                 require "conexion.php";
                 $qry = $link->prepare("SELECT * FROM productos");
                 $qry -> execute();
                 $row = $qry->fetcHALL(PDO::FETCH_OBJ);

            foreach ($row as $dato) {
                    
            
            ?>
            <tr>
                <td><?php echo $dato->id_producto;?></td>
                <td><?php echo $dato->nombre;?></td>
                <td><?php echo $dato->costo;?></td>
                <td><?php echo $dato->codigo_barra;?></td>
                <td><?php echo $dato->categoria;?></td>
                <td><a href="editar.php?id=<?php echo $dato->id_producto; ?>">Editar</a></td>
                <td><a href="eliminar.php?id=<?php echo $dato->id_producto; ?>">Eliminar</a></td>
            </tr>
            <br>
            <?php
            ?>
        </table>
    </center>

<?php
}
?>

</body>
</html>