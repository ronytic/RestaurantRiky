<?php
session_start();
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
if($usuario=="rosario" && $contrasena=="123"){// Verificamos Usuario y Contraseña Correctos
    $_SESSION['correcto']="si";
    header("Location:principal.php");//Se va a otra pagina automaticamente
}else{
    header("Location:login.html"); //Se va a otra pagina automaticamente    
}
?>