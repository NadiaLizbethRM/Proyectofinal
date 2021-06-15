<?php 
require 'conexion.php';

$id = $_GET['id'];
   
   $qry = $link->prepare("SELECT * FROM productos WHERE id_producto = ?");
   $qry->execute([$id]);
   $row = $qry->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="bootstrap (1).css">
	<title></title>
</head>
<body>
	<center>
		<h1>Editar</h1>
		<form method="POST" action="editarproceso.php">
    <input type="hidden" name="txtid_producto" value="<?php echo $row->id_producto?>">

		Nombre:
	<input type="text" name="txtNombre" id="txtNombre" value="<?php echo $row->nombre?>"><br>

	Costo
	<input type="text" name="txtCosto" id="txtCosto" value="<?php echo $row->costo?>"><br>

	Codigo bara:
	<input type="text" name="txtCbarra" id="txtCbarra" value="<?php echo $row->codigo_barra?>"><br>

	Categoria:
	<input type="text" name="txtCategoria" id="txtCategoria" value="<?php echo $row->categoria?>"><br>

	<input type="submit" value="Editar"><br>
</form>		


	</center>

</body>
</html>