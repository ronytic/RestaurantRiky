<?php
session_start();
if($_SESSION['correcto']=="no"){
    header("Location:login.html");//Se va a otra pagina automaticamente
}
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
        <h2><center>Bienvenidos al Sistema </center></h2>
        <div class="opcion">
            <h3>Personal</h3>
            <center>
            <img src="imagenes/opcion/personal.png" width="200" height="180"/>
            </center>
            <a href="personal-nuevo.php" class="boton">Nuevo Personal</a>
            <a href="personal-ver.php"  class="boton">Ver Personal</a>
        </div>
        <div class="opcion">
            <h3>Stock</h3>
            <center>
            <img src="imagenes/opcion/stock.png" width="200" height="180"/>
            </center>
            <a href="stock-nuevo.php" class="boton">Llenar Stock</a>
            <a href="stock-ver.php"  class="boton">Ver Stock</a>
        </div>
        <div class="opcion">
            <h3>Ventas</h3>
            <center>
            <img src="imagenes/opcion/ventas.png" width="200" height="180"/>
            </center>
            <a href="venta-nuevo.php" class="boton">Nueva Venta</a>
            <br />
        </div>
        <div class="opcion">
            <h3>Reportes</h3>
            <center>
            <img src="imagenes/opcion/reportes.png" width="200" height="180"/>
            </center>
            <a href="reporte-dia.php" class="boton">Ver Reporte de Ventas</a>
            <br />
        </div>
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
