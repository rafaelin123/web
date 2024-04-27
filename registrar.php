<?php
include("conexion.php");

if (isset($_POST['register'])){
    if(
        strlen($_POST ['name'] ) >= 1 && 
        strlen($_POST ['email'] ) >= 1 && 
        strlen($_POST ['direction'] ) >= 1 && 
        strlen($_POST ['phone'] ) >= 1 && 
        strlen($_POST ['password'] ) >= 1 
    ){
$nombre= trim( $_POST ['name']);
$email = trim( $_POST ['email']);
$direccion= trim( $_POST ['direction']);
$telefono= trim( $_POST ['phone']);
$contraseña = trim( $_POST ['password']);
$fecha =date("d/m/y");
$consulta = "INSERT INTO datos(nombre, email, direccion, telefono, contraseña, fecha) 
VALUES ('$nombre', '$email', '$direccion', '$telefono', '$contraseña', '$fecha')";
$resultado= mysqli_query($conex, $consulta);
if ($resultado) {
    ?>
    <h3 class="succes"> tu registro a completado</h3>
    <?php

} else {
 ?> 
    <h3 class="error"> ocurrio un error</h3>
    <?php
}

    } else {
        ?>
        <h3 class="error"> llena todos los campos</h3>
    
        <?php
include("registrar.php");

?>
        <?php
    }
}