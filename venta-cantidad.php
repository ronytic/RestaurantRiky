<?php
session_start();//Inicio de Memoria Temporal
$cod_producto=$_POST['cod_producto'];
$fecha=$_POST['fecha'];
include_once("basededatos.php");
$res=mysql_query("SELECT sum(cantidad) as cantidad FROM stock WHERE cod_producto=$cod_producto and fecha='$fecha'");
$reg=mysql_fetch_array($res);
$cantidadstock=$reg['cantidad'];


$res=mysql_query("SELECT sum(cantidad) as cantidad FROM venta WHERE cod_producto=$cod_producto and fecha='$fecha'");
$reg=mysql_fetch_array($res);
$cantidadsalida=$reg['cantidad'];

$total=$cantidadstock-$cantidadsalida;
if($total!=""){
    echo $total;
}else{
    echo "0";    
}
?>