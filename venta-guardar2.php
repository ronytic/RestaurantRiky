<?php
session_start();//Inicio de Memoria Temporal
include_once("basededatos.php");
foreach($_SESSION['venta'] as $reg){$i++;
    mysql_query("insert into venta values (NULL,'".$reg['cod_producto']."','".$reg['cantidad']."','".$reg['fecha']."','".$reg['precio']."','".$reg['cod_cliente']."','".$reg['nombrecliente']."','".$reg['cod_personal']."')");
}

$_SESSION['venta']=array();
header("Location:venta-nuevo.php");
?>