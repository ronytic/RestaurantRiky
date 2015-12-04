<?php
session_start();
if($_SESSION['correcto']=="no"){
    header("Location:login.html");//Se va a otra pagina automaticamente
}
include_once("basededatos.php");
$res=mysql_query("SELECT * FROM personal");

$res1=mysql_query("SELECT * FROM producto WHERE tipo='B'");
$res2=mysql_query("SELECT * FROM producto WHERE tipo='P'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
    
	<!-- End WOWSlider.com HEAD section -->
    <title>Bolivia Gastronomica</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    *{ margin:0px;}
    </style>
    <script language="javascript">
    $(document).on("ready",function(){
        $(".oproducto").change(function(e) {
            var precio=$(this).attr("rel-precio");
            var valor=$(this).val();
            var fecha=$("input[name=fecha]").val();
            $.post("venta-cantidad.php",{'cod_producto':valor,'fecha':fecha},function(data){
                $("input[name=cantidadstock]").val(data)
                $("input[name=cantidad]").attr("max",data)
            })
            
            $("input[name=precio]").val(precio);
            
        });
        $("input[name=precio],input[name=cantidad]").change(function(e) {
            var precio=parseFloat($("input[name=precio]").val());
            var cantidad=parseFloat($("input[name=cantidad]").val());
            var total=precio*cantidad;
            $("input[name=preciototal]").val(total);
        });
    })
    </script>
</head>
<body>
<div class="cabecera">
<img src="imagenes/logo.jpg" width="457" height="102" />
</div>
<div  class="botones">
    <div id="header">
    <ul class="nav">
        <li><a href="index.html">INICIO</a></li>
        <li><a>NOSOTROS</a>
            <ul>
                <li> <a href="quienessomos.html">QUIENES SOMOS</a></li>
                <li> <a href="objetivos.html">OBJETIVOS</a></li>
                <li> <a href="ubicacion.html">UBICACION</a></li>
            </ul>
        </li>
        <li><a href="precios.html">PRECIOS</a></li>
        <li><a href="login.html">INICIAR SESION</a></li>
    </ul>
    </div>
</div>
<br />
<div class="main">
    <div class="contenido">
        <h2><center>Nueva Venta</center><a href="principal.php" class="boton">Menú Principal</a></h2>
            <form action="venta-guardar.php" method="post" target="guardar">
            <table>
                <tr>
                    <td><h3>BEBIDAS</h3>
                        <?php while($reg=mysql_fetch_array($res1)){?>
                        <input type="radio" name="cod_producto" value="<?php echo $reg['cod_producto']?>" class="oproducto" rel-precio="<?php echo $reg['precio']?>"><?php echo $reg['detalle']?> - <?php echo $reg['precio']?> Bs
                        <br />
                        <img src="imagenes/productos/<?php echo $reg['cod_producto']?>.jpg" width="80" height="80"/>
                        <br />
                        <?php }?>
                    </td>
                    <td><h3>PLATOS</h3>
                        <?php while($reg=mysql_fetch_array($res2)){?>
                        <input type="radio" name="cod_producto" value="<?php echo $reg['cod_producto']?>" class="oproducto" rel-precio="<?php echo $reg['precio']?>"><?php echo $reg['detalle']?> - <?php echo $reg['precio']?> Bs
                        <br />
                        <img src="imagenes/productos/<?php echo $reg['cod_producto']?>.jpg" width="80" height="80"/>
                        <br />
                        <?php }?>
                    </td>
                    <td style="vertical-align:top">
                        <label>Código de Cliente
                        <br />
                            <input type="text" name="cod_cliente" maxlength="8" size="8"/>
                        </label>
                        <br />
                        <label>Nombre de Cliente
                        <br />
                            <input type="text" name="nombrecliente"/>
                        </label>
                        <br />
                        <label>Cantidad en Stock para Venta
                        <br />
                            <input type="number" name="cantidadstock" value="0"  readonly="readonly" style="background-color:#F0C7C8;text-align:right" min="0"/>
                        </label>
                        <br />
                        <label>Cantidad
                        <br />
                            <input type="number" name="cantidad" value="0" min="0" style="text-align:right"/>
                        </label>
                        <br />
                        <label>Precio Unitario
                        <br />
                            <input type="text" name="precio"/>
                        </label>
                        <br />
                        <label>Precio Total
                        <br />
                            <input type="text" name="preciototal" readonly="readonly" style="background-color:#F0C7C8;"/>
                        </label>
                        <br />
                        <label>Fecha
                        <br />
                            <input type="date" name="fecha" value="<?php echo date("Y-m-d");?>"/>
                        </label>
                        <br />
                        <!--<label>Personal
                        <br />
                            <select name="cod_personal">
                            <?php while($reg=mysql_fetch_array($res)){?>
                                <option value="<?php echo $reg['cod_personal']?>"><?php echo $reg['nombre']." ".$reg['paterno']." ".$reg['materno']?></option>
                                <?php }?>
                            </select>
                        </label>
                        <br />-->
                        
                        <br />
                        <input type="submit" value="Guardar"/>
                    </td>
                    <td style="vertical-align:top">
                        <iframe name="guardar" width="450" height="700"></iframe>
                    </td>
                </tr>
            </table>
            
            
                
            </form>
    </div>
</div><!-- Fin del Main-->

<div class="auspiciadores">
    <img src="imagenes/auspiciadores/ketal.png" />
    <img src="imagenes/auspiciadores/sofia.png" />
    <img src="imagenes/auspiciadores/coca-cola.png" />
    <img src="imagenes/auspiciadores/polloschuy.png" />
    <img src="imagenes/auspiciadores/venado.png" />
    <img src="imagenes/auspiciadores/sabrosa.png" />
</div>
    <div class="piepagina">
        <p>© Lo mas esquisito en comida Boliviana, Para mayor información escribenos a <a href="mailto:Gastronomica.Bolivia@gmail.com ">Restaurant.rikyrikyto@gmail.com</a></p>
        <p>En este sitio podras obtener mayor informacion o hacer reclamos.</p>
    </div>
    </body>
</html>
