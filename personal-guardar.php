<?php
$ci=$_POST['ci'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
include_once("basededatos.php");
mysql_query("insert into personal values ('$ci','$nombre','$paterno','$materno','$direccion','$telefono')");
header("Location:personal-ver.php");
?>