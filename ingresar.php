<?php
session_start();
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
if($usuario=="rosario" && $contrasena=="123"){// Verificamos Usuario y Contraseña Correctos
    $_SESSION['correcto']="si";
    header("Location:principal.php");     
}else{
    header("Location:login.html");     
}
?>