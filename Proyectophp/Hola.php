<?php
$link = new PDO ('mysql:host=localhost;port=3306;dbname=proyectophp','root', 'mysql');

$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

if (!$link){
	echo "Error de conexion!";
}
else{
	echo "<h1>Conexion exitosa!! </h1>";
}
?>