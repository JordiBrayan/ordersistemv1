<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Menu</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-icons">
            <img class="preload-1" src="img/core-img/preload-1.png" alt="">
            <img class="preload-2" src="img/core-img/preload-2.png" alt="">
            <img class="preload-3" src="img/core-img/preload-3.png" alt="">
        </div>
    </div>

    <!-- ***** area para buscar algo en el menu ***** -->
    <div class="caviar-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Favourite Dish ...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <img class="navbar-brand" src="img/logo.png" width="190" height="170">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item dropdown">   
                                        <a class="nav-link" href="index.html"><strong>Cerrar Sesion</strong></a>
                                </li>
                            </ul>
                            <!-- Search Btn -->
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/pagewelcome.jpg)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h2 style = "font-family:Caveat">Menu</h2>
                        <h2 style = "font-family:Caveat">¿Ya ordenaste?</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    
    <!-- ***** Breadcumb Area End ***** -->
    <br>
    <br>
    <br>
    <!-- ***** Special Menu Area Start ***** -->
    <section id="menu">
        <div class="container">
            <form action="ordenes.php" method="POST">
                <!-- ***** inicio menu 1 ***** -->
                <div class="row">
                    <div class="col-12 menu-heading">
                        <div class="section-heading text-center">
                            <h2>Menu</h2>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr class="tr-head">
                            <th>No.</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Pedir</th>
                            <th>cantidad</th>   
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("conecta.php");
                            $collection = $client->$bd->menu1;
                            if ($collection->count()>0)
                        {
                                $documentos = $collection->find();
                                $cantpz = 1;
                                $nompla = 1;
                                $idcheck = 1;
                                $iddiv = 1;
                                foreach ($documentos as $documento) {                        
                        ?>
                        <tr>
                            <td><?php echo $documento["_id"]; ?></td>    
                            <td><?php echo $documento["m1nom"]; ?></td>
                            <td><?php echo $documento["m1desc"]; ?></td>
                            <td>$<?php echo $documento["m1prec"]; ?></td>
                            <!-- <td><label>Agregar a mi orden <input type="checkbox" id="cbox1" value="first_checkbox"></label><br></td>-->
                            <td>
                            <input type="checkbox" style="display: block; margin: 0 auto;" id='<?='buttonm1'.$idcheck?>' name="<?='platillom1'.$nompla?>" value="<?php echo $documento["m1nom"]; ?>">
                            </td>
                            <td>
                                <div id="<?='newpostm1'.$iddiv?>" style="display:none" >
                                    <input type="number" class="form-control" placeholder="0" name="<?='cantpm1'.$cantpz?>" min="0"></td>
                                        <?php
                                            $cantpz++;
                                            $nompla++;
                                            $idcheck++;
                                            $iddiv++;
                                        ?>
                                </div>
                            </td>
                        </tr>
                        <?php
                            }
                        }else{
                        ?>
                        <tr>
                            <td colspan="4"><h4><i class="icon-info-sign"></i> Sin registros en la Base de Datos</h4></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- ***** Fin menu 1 ***** -->
                <br>
                <br>
                <br>
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-warning" style="color:black;>" name="ordenar"><strong>Enviar mi orden ahora</strong></button>
                </div>
            </form>
            <!-- ***** Fin menu 3 ***** -->
        </div>
    </section>
    <!-- ***** Special Menu Area End ***** -->
<br>
<br>
<br>
<br>
<br>
<br>
    <!-- ***** Footer Area Start ***** -->
    <footer class="caviar-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-text">
                        <img class="navbar-brand" src="img/logo.png" width="190" height="170">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Realiza tu orden con nosotros!!!</p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area Start ***** -->
    <script src="js/opcheck1.js"></script>
    <script src="js/opcheck2.js"></script>
    <script src="js/opcheck3.js"></script>
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
</html>