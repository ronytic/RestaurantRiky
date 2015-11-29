<?php
$ci=$_POST['ci'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$cod_personal=$_POST['cod_personal'];

include_once("basededatos.php");
mysql_query("UPDATE personal SET cod_personal='$ci', nombre='$nombre', paterno='$paterno', materno='$materno',direccion='$direccion',telefono='$telefono' WHERE cod_personal='$cod_personal'");
header("Location:personal-ver.php");
?>