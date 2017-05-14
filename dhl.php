<!DOCTYPE HTML>

<html>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <title>RASTREA TU PEDIDO</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/user.css" />
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
            <img src="images/Logotio_web2.png" width="400px">
        </header>
        <!-- Content -->
        <section id="banner" class="inner center-block">

            <!-- Content -->
            <div style="width:500px;height:700px; position:absolute; left: 25% ; overflow:hidden" class="center-block inline-block">
            
                <iframe id="dhlPage" src="http://www.dhl.com.mx/es/express/rastreo.htm" style="top:-120px; left:-208px; position: absolute;" width="1000" height="800" scrolling="no" frameborder="1" class="center-block inline-block" #trackingIndex>
                    <p>Tu navegador no soporta este tipo de vista, </p>
                </iframe>
            </div>
            
        </section>

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