<?php
session_start();
require 'conexion.php'; 

$correo=$_POST['email'];
$pass=$_POST['pass'];


$qry= $link->prepare("SELECT * FROM usuarios WHERE correo=?");
$qry -> execute([$correo]);

$row=$qry->fetch(PDO::FETCH_OBJ);
//print_r($row);

if(password_verify($pass, $row->contrasena)){

    $_SESSION['nombre'] = $row->nombre;
    
$_SESSION['usuario'] = $row->id_tipousuario;
   
    switch($_SESSION['usuario']){
                case 1:
                    header('location: admin.php');
                break;
    
                case 2:
                header('location: home.php');
                break;
  
                default:
                 header('location: login.php');
                 break;
                }
                
  }
  else{
    header("Location: login.php");
 
  }



?>