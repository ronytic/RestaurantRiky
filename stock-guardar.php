<?php
$fecha=$_POST['fecha'];
$cod_producto=$_POST['cod_producto'];
$cantidad=$_POST['cantidad'];

include_once("basededatos.php");
mysql_query("insert into stock values (NULL,'$fecha','$cod_producto','$cantidad')");
header("Location:stock-ver.php");
?>