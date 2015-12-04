<?php
$cod_producto=$_GET['cod_producto'];

include_once("basededatos.php");
mysql_query("DELETE FROM  producto WHERE cod_producto='$cod_producto'");
header("Location:producto-ver.php");
?>