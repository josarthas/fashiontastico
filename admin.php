<?php session_start(); include "./conexion.php"; if(isset($_SESSION[ 'Usuario'])){ }else{ header( "Location: ./index.php?Error=Acceso denegado"); } ?>

<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>fASHIONTASTICO - CARRITO DE COMPRAS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

</head>

<body class="landing">

    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Header -->



        <header>
            <img src="images/fashiontastico.png" width="400px">
        </header>
        <!-- Content -->
        <div>
            <!-- Content -->
            <section id="content" class="main">
                <nav class="menu2">
                    <menu>
                        <li><a href="./">Inicio</a>
                        </li>
                        <li><a href="#" class="selected">Admin</a>
                        </li>
                        <li><a href="./admin/agregarproducto.php">Agregar</a>
                        </li>
                        <li><a href="./admin/modificar.php">Modificar</a>
                        </li>
                        <li><a href="./index.php">Salir</a>
                        </li>
                    </menu>
                </nav>

                <center>
                    <h1>Últimas Compras</h1>
                </center>
                <table border="0px" width="100%">
                    <tr>
                        <td>Imagen</td>
                        <td>Nombre</td>
                        <td>Precio</td>
                        <td>Cantidad</td>
                        <td>Subtotal</td>
                    </tr>

                    <?php include 'conexion.php'; $re=mysqli_query($con, "select * from compras"); $numeroventa=0; while ($f=mysqli_fetch_array($re)) { if($numeroventa !=$f[ 'numeroventa']){ echo '<tr><td>Compra Número: '.$f[ 'numeroventa']. ' </td></tr>'; } $numeroventa=$f[ 'numeroventa']; echo '<tr>
						<td><img src="./productos/'.$f[ 'imagen']. '" width="100px" heigth="100px" /></td>
						<td>'.$f[ 'nombre']. '</td>
						<td>'.$f[ 'precio']. '</td>
						<td>'.$f[ 'cantidad']. '</td>
						<td>'.$f[ 'subtotal']. '</td>

					</tr>'; } ?>
                </table>
            </section>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <section>
                <h2>CONTACTO</h2>
                <dl class="alt">
                    <dt>Telefono</dt>
                    <dd>(+52) 1 222 564 5392</dd>
                    <dd>(+52) 1 222 563 5687</dd>
                    <dt>Correo</dt>
                    <dd><a href="#">contacto@fashiontastico.com.mx</a>
                    </dd>
                </dl>
                <ul class="icons">
                    <li><a href="www.facebook.com/fashiontastico" class="icon fa-facebook"><span class="label">Facebook</span></a>
                    </li>
                    <li><a href="www.instagram.com/fashiontasticooficial/" class="icon fa-instagram"><span class="label">Instagram</span></a>
                    </li>

                </ul>
            </section>
            <p class="copyright">&copy;Diseñado: <a href="">Skytec Enterprises</a>.</p>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>

</body>

</html>