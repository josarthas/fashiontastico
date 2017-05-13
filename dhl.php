<!DOCTYPE HTML>
<!--
    Stellar by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>


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
                                <li><a href="index.php">Pagina principal</a>
                                </li>
                                <li><a href="dhl.php">Revisa donde esta tu pedido con DHL</a>
                                </li>
                                <li><a href="compras.php">Compra alguno de nuestros diseños</a>
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
        <div>
            <!--
            Este selector trae resultados pero sólo cuando se ha interactuado con el iframe a traves de elements de las opciones de desarrollo de Chrome
            $("div.navigation_content")

            Una ves que se puede seleccionar la barra, se puede incluso ocultar
            $("div.navigation_content").hide();
            -->
            <!-- Content -->
            <div style="width:700px;height:300px; position:relative; overflow:hidden">
            
                <iframe id="dhlPage" src="http://www.dhl.com.mx/es/express/rastreo.htm" style="top:-125px; position: absolute;" width="800" height="600" scrolling="yes" frameborder="1" #trackingIndex>
                    <p>Tu navegador no soporta este tipo de vista, </p>
                </iframe>
            </div>
            
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



</body>

</html>