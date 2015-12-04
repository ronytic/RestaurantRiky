<?php
$detalle=$_POST['detalle'];
include_once("basededatos.php");

$res=mysql_query("SELECT * FROM producto WHERE detalle LIKE '$detalle%' ");
// el % significa cualquier letra al final
?>
<link href="css/estilo.css" type="text/css" rel="stylesheet">
<table class="listado">
    <tr class="titulo">
        <td>N</td>
        <td>Detalle</td>
        <td>Precio</td>
        <td>Tipo</td>
    </tr>
    <?php
    while($reg=mysql_fetch_array($res)){$i++;
    ?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $reg['detalle']?></td>
        <td><?php echo $reg['precio']?></td>
        <td><?php echo $reg['tipo']?></td>
        <td><a href="producto-modificar.php?cod_producto=<?php echo $reg['cod_producto']?>" class="boton" target="_parent">Modificar</a></td>
        <td><a href="producto-eliminar.php?cod_producto=<?php echo $reg['cod_producto']?>" class="boton" target="_parent">Eliminar</a></td>
    </tr>
    <?php    
    }
    ?>
</table>