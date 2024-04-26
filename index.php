<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.CSS">
</head>
<body>
<nav>
            <a href="menu.html" class="nav-link"> Inicio</a>
            <a href="Nosotros" class="nav-link"> Nosotros</a>
            <a href="Contacto" class="nav-link"> Contacto</a>

            <div>
       <a href="Altas.php" class="nav-link">Altas</a>
       <a href="Consulta Reg.php" class="nav-link">Consultar Registro</a> 
       <a href="Modif Reg.php" class="nav-link">Modificar Registro</a>
       <a href="Elim Reg.php" class="nav-link">Eliminar Registro</a>
    
            </div>
       
    <form method="post">
        <h2>Hola</h2>
        <p>Inicia tu registro</p>

 <div class="input-wrapper">

         <input type="text" name="name" placeholder="Nombre">
         <img class="input-icon" src="images/name.svg" alt="">
 </div>

<div class="input-wrapper">
        <input type="email" name="email" placeholder="Email">
        <img class="input-icon" src="images/email.svg" alt="">  
 </div>

 <div class="input-wrapper">
        <input type="text" name="direction" placeholder="Dirección">
        <img class="input-icon" src="images/direction.rar" alt="">

<div class="input-wrapper">

      <input type="tel" name="phone" placeholder="Teléfono">
      <img class="input-icon" src="images/phone.svg" alt="">
 </div>

 <div class="input-wrapper">
    <input type="password" name="password" placeholder="Contraseña">
    <img class="input-icon" src="images/password.svg" alt="">
</div>

<input class="btn" type="submit" name="register" value="Enviar" >

            
    </form>
<?php
include("registrar.php");

?>
</body>
</html