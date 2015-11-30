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
        <h2><center>Nuevo Personal</center><a href="principal.php" class="boton">Menú Principal</a></h2>
        <center>
            <form action="personal-guardar.php" method="post">
                <label>Carnet
                <br />
                    <input type="text" name="ci"/>
                </label>
                <br />
                <label>Nombre
                <br />
                    <input type="text" name="nombre"/>
                </label>
                <br />
                <label>Apellido Paterno
                <br />
                    <input type="text" name="paterno"/>
                </label>
                <br />
                <label>Apellido Materno
                <br />
                    <input type="text" name="materno"/>
                </label>
                <br />
                <label>Direccion
                <br />
                    <input type="text" name="direccion"/>
                </label>
                <br />
                <label>Telefono
                <br />
                    <input type="text" name="telefono"  maxlength="8" max="99999999"/>
                </label>
                <br />
                <br />
                <input type="submit" value="Guardar"/>
            </form>
        </center>
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
