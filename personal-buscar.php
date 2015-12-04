<?php
$ci=$_POST['ci'];
$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
include_once("basededatos.php");

$res=mysql_query("SELECT * FROM personal WHERE cod_personal LIKE '$ci%' and nombre LIKE '$nombre%' and paterno LIKE '$paterno%'");
// el % significa cualquier letra al final
?>
<link href="css/estilo.css" type="text/css" rel="stylesheet">
<table class="listado">
    <tr class="titulo">
        <td>N</td>
        <td>Carnet</td>
        <td>Nombre</td>
        <td>Ap. Paterno</td>
        <td>Ap. Materno</td>
        <td>Dirección</td>
        <td>Teléfono</td>
    </tr>
    <?php
    while($reg=mysql_fetch_array($res)){$i++;
    ?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $reg['cod_personal']?></td>
        <td><?php echo $reg['nombre']?></td>
        <td><?php echo $reg['paterno']?></td>
        <td><?php echo $reg['materno']?></td>
        <td><?php echo $reg['direccion']?></td>
        <td><?php echo $reg['telefono']?></td>
        <td><a href="personal-modificar.php?cod_personal=<?php echo $reg['cod_personal']?>" class="boton" target="_parent">Modificar</a></td>
        <td><a href="personal-eliminar.php?cod_personal=<?php echo $reg['cod_personal']?>" class="boton" target="_parent">Eliminar</a></td>
    </tr>
    <?php    
    }
    ?>
</table>