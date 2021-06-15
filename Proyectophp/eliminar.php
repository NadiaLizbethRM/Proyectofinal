<?php 
include 'conexion.php';

$id = $_GET['id'];

$qry = $link->prepare("DELETE FROM productos WHERE id_producto = ?;");
$qry->execute([$id]);

if($qry->rowCount()==1){
	header("Location: home.php");
}

else {
	echo "Fallo la eliminacion!";
}

?>