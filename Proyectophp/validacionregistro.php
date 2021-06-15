<?php

require 'conexion.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$pass=$_POST['pass'];

$pass=password_hash($pass, PASSWORD_DEFAULT);

$qry= $link->prepare( "INSERT INTO usuarios (nombre,apellido,correo,contrasena) VALUES (?,?,?,?)");
$qry -> execute([$nombre,$apellido,$correo,$pass]);

if($qry->rowCount()==0){
    echo "El registro fallo!";
}
    else if($qry->rowCount()==1){
        echo "El registro fue exitoso:3!";
    }
    else{
        echo "Error del sistema:|!";
    }

?>