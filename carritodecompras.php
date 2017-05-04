<?php session_start(); include './conexion.php'; if (isset($_SESSION[ 'carrito'])) { if (isset($_GET[ 'id'])) { $arreglo=$_SESSION[ 'carrito']; $encontro=false; $numero=0; for ($i=0; $i<count($arreglo); $i++) { if ($arreglo[$i][ 'Id']==$_GET[ 'id']) { $encontro=true; $numero=$i; } } if ($encontro==true) { $arreglo[$numero][ 'Cantidad']=$arreglo[$numero][ 'Cantidad']+1; $_SESSION[ 'carrito']=$arreglo; } else { $nombre="" ; $precio=0; $imagen="" ; $re=mysqli_query($con, "select * from productos where id=".$_GET[ 'id']); while ($f=mysqli_fetch_array($re)) { $nombre=$f[ 'nombre']; $precio=$f[ 'precio']; $imagen=$f[ 'imagen']; } $datosNuevos=array( 'Id'=>$_GET['id'], 'Nombre'=>$nombre, 'Precio'=>$precio, 'Imagen'=>$imagen, 'Cantidad'=>1); array_push($arreglo, $datosNuevos); $_SESSION['carrito']=$arreglo; } } } else { if (isset($_GET['id'])) { $nombre=""; $precio=0; $imagen=""; $re=mysqli_query($con, "select * from productos where id=".$_GET['id']); while ($f=mysqli_fetch_array($re)) { $nombre=$f['nombre']; $precio=$f['precio']; $imagen=$f['imagen']; } $arreglo[]=array('Id'=>$_GET['id'], 'Nombre'=>$nombre, 'Precio'=>$precio, 'Imagen'=>$imagen, 'Cantidad'=>1); $_SESSION['carrito']=$arreglo; } } ?>
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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="./js/scripts.js"></script>

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
            <!-- Content -->
            <section id="content" class="main">
                <?php $total=0; if (isset($_SESSION[ 'carrito'])) { $datos=$_SESSION[ 'carrito']; $total=0; for ($i=0; $i<count($datos); $i++) { ?>
                <div class="producto">
                    <center>
                        <img src="./productos/<?php echo $datos[$i]['Imagen'];?>" width="300px">
                        <br>
                        <span><?php echo $datos[$i]['Nombre'];?></span>
                        <br>
                        <span>Precio: <?php echo $datos[$i]['Precio'];?></span>
                        <br>
                        <span>Cantidad: 
                            <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
                            data-precio="<?php echo $datos[$i]['Precio'];?>"
                            data-id="<?php echo $datos[$i]['Id'];?>"
                            class="cantidad">
                        </span>
                        <br>
                        <span class="subtotal">Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span>
                        <br>
                        <a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a>
                    </center>
                </div>
                <?php $total=($datos[$i][ 'Cantidad']*$datos[$i][ 'Precio'])+$total; } } else { echo '<center><h2>No has añadido ningun producto</h2></center>'; } echo '<center><h2 id="total">Total: '.$total. '</h2></center>'; if ($total!=0) { //echo '<center><a href="./compras/compras.php" class="aceptar">Comprar</a></center>'; ?>
                <form method="post" action="https://sandbox.gateway.payulatam.com/ppp-web-gateway/">
                    <input name="merchantId" type="hidden" value="508029">
                    <input name="accountId" type="hidden" value="512324">
                    <input name="description" type="hidden" value="Prueba de pago Fashiontastico">
                    <input name="referenceCode" type="hidden" value="Fashiontastico.web@gmail.com">

                    <input name="tax" type="hidden" value="0">
                    <input name="taxReturnBase" type="hidden" value="0">
                    <input name="currency" type="hidden" value="MXN">

                    <input name="test" type="hidden" value="1">
                    <input name="buyerEmail" class="email" type="hidden" value="test@test.com">
                    <input name="responseUrl" type="hidden" value="localhost/pag/carritodecompras.php">
                    <input name="confirmationUrl" type="hidden" value="http://www.test.com/confirmation">
                    <input name="amount" type="hidden" value="<?php echo $total ?>">





                    <center>
                        <input type="submit" value="comprar" class="aceptar" style="width:200px">
                    </center>
                </form>
                <?php } ?>
                <center><a href="./compras.php">Ver catalogo</a>
                </center>


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