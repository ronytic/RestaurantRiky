<?php
$desde=$_POST['desde'];
$hasta=$_POST['hasta'];
$cod_cliente=$_POST['cod_cliente'];
$cod_personal=$_POST['cod_personal'];
$nombrecliente=$_POST['nombrecliente'];

include_once("basededatos.php");
$res=mysql_query("SELECT * FROM venta WHERE cod_cliente LIKE '$cod_cliente%' and nombrecliente LIKE '$nombrecliente%' and cod_personal LIKE '$cod_personal%' and fecha BETWEEN '$desde' and '$hasta'");
// el % significa cualquier letra al final
?>
<link href="css/estilo.css" type="text/css" rel="stylesheet">
<table class="listado">
    <tr class="titulo">
        <td>N</td>
        <!--<td>Personal</td>-->
        <td>Fecha</td>
        <td>Código del Cliente</td>
        <td>Nombre del Cliente</td>
        <td>Producto</td>
        <td>Cantidad</td>
        <td>Precio</td>
        <td>Subtotal</td>
    </tr>
    <?php
    $total=0;
    while($reg=mysql_fetch_array($res)){$i++;
    $res2=mysql_query("SELECT * FROM producto WHERE cod_producto=".$reg['cod_producto']);
    $reg2=mysql_fetch_array($res2);
    $total=$total+($reg['cantidad']*$reg['precio']);
    ?>
    <tr>
        <td><?php echo $i?></td>
        <!--<td><?php echo $reg['cod_personal']?></td>-->
        <td><?php echo $reg['fecha']?></td>
        <td><?php echo $reg['cod_cliente']?></td>
        <td><?php echo $reg['nombrecliente']?></td>
        <td><?php echo $reg2['detalle']?></td>
        <td align="right"><?php echo $reg['cantidad']?></td>
        <td align="right"><?php echo $reg['precio']?></td>
        <td align="right"><?php echo $reg['cantidad']*$reg['precio']?></td>
    </tr>
    <?php    
    }
    ?>
    <tr class="titulo">
        <td colspan="7">Total</td>
        <td align="right"><?php echo $total?></td>
    </tr>
</table>