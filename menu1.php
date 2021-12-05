<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>Menú </title>
<meta name="description" content="">
<meta name="author" content="WebThemez">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i><img src="images/logo2.png" width="90" height="70" /></i></b></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li class="active" id="firstLink"><a href="#home" class="scroll-link">Home</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->
<div id="#top"></div>
<section id="home">
    
  <div class="banner-container"> 
  	<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>

  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="images/inicio1.png"  width="1682" height="100" /></div>
    <div class="item"><img src="images/inicio3.png" width="1682" height="" /></div>
   
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
</div>
	
  </div>  
  
  <div class="container hero-text2" >   
  <br>
    <br>     
		<div class="col-md" >
		<h2 style="text-align: center;">¡¡Bienvenido comensal!!</h1>
			<p style="text-align: center;">Aquí podrás realizar todos tus pedidos de una manera más rápida y eficiente para asi poder asegurarte un servicio de calidad.</p>   
		
    </div>  
		<br>
    <br>
  </div>
</section>
<br>

<section >
        <div class="container"  class="table-responsive">
            
                <!-- ***** inicio menu 1 ***** -->
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="heading text-center"> 
                          <!-- Heading -->
                        <h2>Menú</h2>
                    </div>
                </div>
            </div>
                
            <form action="espera.php" method="POST">
                <!-- ***** inicio menu 1 ***** -->
                <div class="form-group">
                  <label for="formGroupExampleInput">Nombre de a quien se le hace el pedido</label>
                  <input type="text" class="form-control" name="nomorden" placeholder="Ingresa el nombre aquí…." required>
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr class="tr-head">
                           
                            <th>Nombre</th>
                            <th>Descripción</th>
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
                                $conplat = 1;
                                foreach ($documentos as $documento) {                        
                        ?>
                        <tr>
                             
                            <td>
                                <img src="<?='images/plat'.$conplat?>.png" width="90" height="70"><br><br>
                                <?php echo $documento["m1nom"]; ?>
                            </td>
                            <td><?php echo $documento["m1desc"]; ?></td>
                            <td><br>$<?php echo $documento["m1prec"]; ?></td>
                            <!-- <td><label>Agregar a mi orden <input type="checkbox" id="cbox1" value="first_checkbox"></label><br></td>-->
                            <td><br>
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
                                            $conplat++;
                                        ?>
                                </div>
                            </td>
                        </tr>
                        <?php
                            }
                        }else{
                        ?>
                        <tr>
                            <td colspan="4"><h4><i class="icon-info-sign"></i> Sin ningún registro</h4></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- ***** Fin menu 1 ***** -->
                <br>
                <br>
                <br>
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-warning" style="color:black;" name="ordenar" value="menu1"><strong>Enviar mi órden ahora</strong></button>
                </div>
            </form>
                
                </section>
            <!-- ***** Fin menu 3 ***** -->
        </div>
    <br>
    
<br>
    <br>
   
<footer>
<div class="container" style="text-align: center;">
        <div class="row" style="text-align: center;">
            
            
            <div  style="text-align: center;" >
            	<div class="col" style="text-align: center;">
                    <h4 style="text-align: center;"> ¡¡Realiza tus órdenes ahora!!</h4>
                    <p >Realiza tus pedidos de una manera más rápida y eficiente.</p>
               
                        <div style="text-align: center;">
                        <b><i><img src="images/logo2.png" width="90" height="70" /></i></b>
                           
                        </div>
              
                </div>
            </div>
            
            

             
        </div>
         
    </div>
    
</footer>
<!--/.page-section-->

<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="jsn/opcheck1.js"></script>
<script src="js/modernizr-latest.js"></script> 
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/jquery.fittext.js"></script> 
<script src="js/waypoints.js"></script> 
<script src="js/custom.js" type="text/javascript"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
