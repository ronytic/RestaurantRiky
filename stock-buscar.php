<?php
$cod_producto=$_POST['cod_producto'];
include_once("basededatos.php");
$res=mysql_query("SELECT * FROM stock WHERE cod_producto LIKE '$cod_producto'");
// el % significa cualquier letra al final
?>
<link href="css/estilo.css" type="text/css" rel="stylesheet">
<table class="listado">
    <tr class="titulo">
        <td>N</td>
        <td>Producto</td>
        <td>Cantidad</td>

    </tr>
    <?php
    while($reg=mysql_fetch_array($res)){$i++;
    $res1=mysql_query("SELECT * FROM producto WHERE cod_producto='".$reg['cod_producto']."'");
    $reg1=mysql_fetch_array($res1);
    ?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $reg1['detalle']?></td>
        <td><?php echo $reg['cantidad']?></td>

        <td><a href="stock-eliminar.php?cod_stock=<?php echo $reg['cod_stock']?>" class="boton" target="_parent">Eliminar</a></td>
    </tr>
    <?php    
    }
    ?>
</table>