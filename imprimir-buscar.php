<?php
$desde=$_POST['desde'];
$hasta=$_POST['hasta'];
$cod_cliente=$_POST['cod_cliente'];
$cod_personal=$_POST['cod_personal'];
$nombrecliente=$_POST['nombrecliente'];

include_once("basededatos.php");
$res=mysql_query("SELECT * FROM venta WHERE cod_cliente LIKE '$cod_cliente%' and nombrecliente LIKE '$nombrecliente%' and cod_personal LIKE '$cod_personal%' and fecha BETWEEN '$desde' and '$hasta'");
// el % significa cualquier letra al final
$titulo="Reporte de Ventas";
date_default_timezone_set('America/La_Paz');
setlocale(LC_CTYPE, "es_ES");
setlocale(LC_ALL, 'esp'); 
include_once("impresion/pdf.php");
class PDF extends PPDF{
    function Cabecera(){
        global $desde,$hasta;
        $this->CuadroCabecera(20,"Desde:",30,$desde);
        $this->CuadroCabecera(20,"Hasta:",30,$hasta);
        $this->ln();
       $this->TituloCabecera(10,"Nº"); 
       $this->TituloCabecera(30,"Fecha"); 
       $this->TituloCabecera(30,"Cód del Cliente"); 
       $this->TituloCabecera(40,"Nom del Cliente"); 
       $this->TituloCabecera(40,"Producto"); 
       $this->TituloCabecera(30,"Cantidad"); 
       $this->TituloCabecera(30,"Precio"); 
       $this->TituloCabecera(30,"Subtotal"); 
    }    
}
$pdf=new PDF("L","mm","letter");
$pdf->AddPage();
$total=0;
while($reg=mysql_fetch_array($res)){$i++;
    $res2=mysql_query("SELECT * FROM producto WHERE cod_producto=".$reg['cod_producto']);
    $reg2=mysql_fetch_array($res2);
    $total=$total+($reg['cantidad']*$reg['precio']);
    
    $pdf->CuadroCuerpo(10,$i,0,"R",1);
    $pdf->CuadroCuerpo(30,$reg['fecha'],0,"C",1);
    $pdf->CuadroCuerpo(30,$reg['cod_cliente'],0,"",1);
    $pdf->CuadroCuerpo(40,$reg['nombrecliente'],0,"",1);
    $pdf->CuadroCuerpo(40,$reg2['detalle'],0,"",1);
    $pdf->CuadroCuerpo(30,$reg['cantidad'],0,"R",1);
    $pdf->CuadroCuerpo(30,$reg['precio'],0,"R",1);
    $pdf->CuadroCuerpo(30,$reg['cantidad']*$reg['precio'],0,"R",1);
    $pdf->ln();
}
$pdf->CuadroCuerpo(210,"TOTAL",0,"R",1,9,"B");
$pdf->CuadroCuerpo(30,$total,0,"R",1,9,"B");
$pdf->Output();
    ?>