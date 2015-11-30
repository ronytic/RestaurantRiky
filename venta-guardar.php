<?php
session_start();//Inicio de Memoria Temporal
$cod_producto=$_POST['cod_producto'];
$cod_cliente=$_POST['cod_cliente'];
$cantidad=$_POST['cantidad'];
$cod_personal=$_POST['cod_personal'];
$precio=$_POST['precio'];
$fecha=$_POST['fecha'];

$_SESSION['venta'][]=array('cod_producto'=>$cod_producto,
                            'cod_cliente'=>$cod_cliente,
                            'cantidad'=>$cantidad,
                            'fecha'=>$fecha,
                            'cod_personal'=>$cod_personal,
                            'precio'=>$precio,
);
?>
<link href="css/estilo.css" type="text/css" rel="stylesheet">
<table class="listado">
    <tr class="titulo">
        <td>N</td>
        <td>Producto</td>
        <td>Cantidad</td>
        <td>Cantidad</td>
        <td>Subtotal</td>
    </tr>
    <?php 
    $total=0;
    include_once("basededatos.php");

    foreach($_SESSION['venta'] as $reg){$i++;
    
    $res=mysql_query("SELECT * FROM producto WHERE cod_producto=".$reg['cod_producto']);
    $reg2=mysql_fetch_array($res);
    
    $total=$total+($reg['cantidad']*$reg['precio']);
    ?>
        <tr>
            <td><?php echo $i?></td>
            <td><?php echo $reg2['detalle']?></td>
            <td><?php echo $reg['cantidad']?></td>
            <td><?php echo $reg['precio']?></td>
            <td align="right"><?php echo $reg['cantidad']*$reg['precio']?></td>
        </tr>
    <?php        
    }?>

        <tr  class="titulo">
            <td colspan="4">Total</td>

            <td align="right"><?php echo $total?></td>
        </tr>
 
</table>
<a href="venta-guardar2.php" target="_parent" class="boton">Confimar Venta</a>
<a href="venta-borrar.php" target="" class="boton">Borrar Venta</a>