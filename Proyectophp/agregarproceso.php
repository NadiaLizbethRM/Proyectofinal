<?php 
include 'conexion.php';

  
  $nombre = $_POST['txtNombre'];
  $costo = $_POST['txtCosto'];
  $cbarra = $_POST['txtCbarra'];
  $categoria = $_POST['txtCategoria'];

  $qry = $link->prepare("INSERT INTO productos (nombre, costo, codigo_barra, categoria) VALUES (?,?,?,?);");
  $qry->execute([$nombre,$costo,$cbarra,$categoria]);

if($qry->rowCount()==1){
	echo "Registro exitoso!";
	//header("Location: home.php");
}  

else{
	header("Location: agregar.php");
}

?>