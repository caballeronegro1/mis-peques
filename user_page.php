<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hola, <span>Usuario</span></h3>
      <h1>Bienvenido <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Esta es la pagina de usuarios</p>
      <a href="login_form.php" class="btn">Entrar</a>
      <a href="register_form.php" class="btn">Registrar</a>
      <a href="logout.php" class="btn">Salir</a>
   </div>

</div>

</body>
</html>