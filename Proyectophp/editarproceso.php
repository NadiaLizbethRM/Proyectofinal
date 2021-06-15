<<?php 
require "conexion.php";

   $id=$_POST['txtid_producto'];
   $nombre = $_POST['txtNombre'];
   $costo = $_POST['txtCosto'];
   $cbarra = $_POST['txtCbarra'];
   $categoria = $_POST['txtCategoria'];

     $qry = $link->prepare("UPDATE productos SET nombre=?, costo=?, codigo_barra=?, categoria=? WHERE id_producto=?");
  $qry->execute([$nombre,$costo,$cbarra,$categoria,$id]);

if($qry->rowCount()==1){
	header("Location: home.php");
}  

else{
	echo "Error en la actualizacion de datos!";
	header("Location: editar.php");
}
 ?>