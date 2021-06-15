<?php 
session_start();
if (isset($_SESSION['usuario'])) {
   switch($_SESSION['usuario']){
    case 1:
           header('location: admin.php');
    break;
    case 2:
           header('location: home.php');
    break;  
    case 3:
           header('location: jefe.php');
    break;     
   }
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
    

<form method="POST" action="validarlogin.php">
  <fieldset>
  
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Correo electrónico</font></font></label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección de correo electrónico</font></font></label>
      <input type="email" class="form-control"  name="email" id="email"  aria-describedby="emailHelp" placeholder="Ingrese correo electrónico">
      <small id="emailHelp" class="form-text text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nunca compartiremos su correo electrónico con nadie más.</font></font></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contraseña</font></font></label>
      <input type="password" class="form-control" name="pass" id="pass"  placeholder="Contraseña">
         <input type="submit" value="Iniciar sesion"><br>
    </div>
    <center>
<img src="m.jpg" width="300" height="250">
</center>
</body>
</html> 