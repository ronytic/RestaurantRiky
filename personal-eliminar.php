<?php
$cod_personal=$_GET['cod_personal'];

include_once("basededatos.php");
mysql_query("DELETE FROM  personal WHERE cod_personal='$cod_personal'");
header("Location:personal-ver.php");
?>