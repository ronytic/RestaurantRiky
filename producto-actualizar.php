<?php
$detalle=$_POST['detalle'];
$precio=$_POST['precio'];
$tipo=$_POST['tipo'];
$cod_producto=$_POST['cod_producto'];
include_once("basededatos.php");
mysql_query("UPDATE producto SET detalle='$detalle', precio='$precio', tipo='$tipo' WHERE cod_producto='$cod_producto'");

$ultimo=$cod_producto;

if($_FILES['foto']!=""){
    copy($_FILES['foto']['tmp_name'],"imagenes/productos/$ultimo.jpg");
}
header("Location:producto-ver.php");
?>