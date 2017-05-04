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
        <header id="header" class="alt">
            <h1><a href="index.html">FASHIONTASTICO</a></h1>
            <nav id="nav">
                <ul>
                    <li class="special">
                        <a href="#menu" class="menuToggle"><span>Menu</span></a>
                        <div id="menu">
                            <ul>
                                <li><a href="./index.php">Pagina principal</a>
                                </li>
                                <li><a href="./dhl.php">Revisa donde esta tu pedido con DHL</a>
                                </li>
                                <li><a href="./compras.php">Compra alguno de nuestros diseños</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
        <header>
            <img src="images/fashiontastico.png" width="400px">
        </header>
        <!-- Content -->
        <!-- Main -->
        <div id="main">
            <!-- Content -->
            <section id="content" class="main">
                <form method="POST" action="./login/registro.php">
                    Nombre :
                    <input type="Text" name="Nombre">
                    <br> e-mail:
                    <input type="Text" name="Direccion">
                    <br> Usuario:
                    <input type="Text" name="Usuario"><b></b>r> Contraseña :
                    <input type="Text" name="Password">
                    <br>
                    <input type="Submit" name="submit" value="Aceptar información">
                </form>
                <section>
                    ¿Ya formas parte de nosotros?
                    <div class="inner">
                        <ul class="actions">
                            <li><a href="./login.php" class="button special">Inicia ya!</a>
                            </li>
                        </ul>
                    </div>
                </section>
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