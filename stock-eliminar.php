<?php
$cod_stock=$_GET['cod_stock'];

include_once("basededatos.php");
mysql_query("DELETE FROM  stock WHERE cod_stock='$cod_stock'");
header("Location:stock-ver.php");
?>