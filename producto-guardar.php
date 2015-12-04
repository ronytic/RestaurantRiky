<?php
$detalle=$_POST['detalle'];
$precio=$_POST['precio'];
$tipo=$_POST['tipo'];

include_once("basededatos.php");
mysql_query("insert into producto values (NULL,'$detalle','$precio','$tipo')");
$ultimo=mysql_insert_id($conexion);
if($_FILES['foto']!=""){
    copy($_FILES['foto']['tmp_name'],"imagenes/productos/$ultimo.jpg");
}
header("Location:producto-ver.php");
?>