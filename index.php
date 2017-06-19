<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Search Engine -->
    <meta name="description" content="Nuevas perspectivas entre el diseño, el arte y la lógica.">
    <meta name="image" content="img/background/fondo-header.jpg">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="PauPintor">
    <meta itemprop="description" content="Nuevas perspectivas entre el diseño, el arte y la lógica.">
    <meta itemprop="image" content="img/background/fondo-header.jpg">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="PauPintor">
    <meta name="og:description" content="Nuevas perspectivas entre el diseño, el arte y la lógica.">
    <meta name="og:image" content="img/background/preview.jpg">
    <meta name="og:url" content="paupintor.cl">
    <meta name="og:site_name" content="PauPintor">
    <meta name="og:locale" content="es">
    <meta name="og:type" content="website">

    <title>PauPintor</title>
    <link rel="shortcut icon" href="img/logos/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/logos/favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logos/pintor.png" alt="inicio" height=40px></a> <!-- Aquí poner la imagen del logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portafolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#who">Perfil</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="img-centered"><img src="img/logos/pintor.png"  class="img-responsive img-centered" alt="pintor diseño" height=350px ></div>
                <h3>Diseño acompañado de Arte y Lógica</h3>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <?php include('services.php');?>

      <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portafolio</h2>
                    <h3 class="section-subheading text-muted">Revisión de mis trabajos creados a lo largo de la carrera.</h3>
                </div>
            </div>

            <?php
            $inspiracion = array_map('str_getcsv', file('csv/works.csv'));
            array_walk($inspiracion, function(&$a) use ($inspiracion) {$a = array_combine($inspiracion[0], $a);});
            array_shift($inspiracion);
            $all = count($inspiracion);
            for($n=0; $n < $all; $n++){?>


                <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item">
                    <a href="#portfolioModal<?php print $n?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                          <i class="fa fa-plus fa-3x"></i>
                        </div>
                          </div>

          <img src="<?php print($inspiracion[$n]["image"])?>" class="img-responsive" alt="previsualización del proyecto">
          </a>
                    <article class="portfolio-caption">
                      <h4><?php print($inspiracion[$n]["name"])?></h4>
                    <p class="text-muted"><?php print($inspiracion[$n]["sinopsis"])?>.</p>

                    </article>

                  </div><!--/col-sm-6-->

                <?php };?>

        </div>
    </section>

    <!-- Portfolio Modals -->
       <?php
       $inspiracion = array_map('str_getcsv', file('csv/works.csv'));
       array_walk($inspiracion, function(&$a) use ($inspiracion) {$a = array_combine($inspiracion[0], $a);});
       array_shift($inspiracion);
       $all = count($inspiracion);
       for($n=0; $n < $all; $n++){
       ?>
       <div class="portfolio-modal modal fade" id="portfolioModal<?php print $n?>" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-content">
               <div class="close-modal" data-dismiss="modal">
                   <div class="lr">
                       <div class="rl">
                       </div>
                   </div>
               </div>
               <div class="container">
                   <div class="row">

                       <div class="col-lg-8 col-lg-offset-2">
                           <div class="modal-body">
                               <h2><?php print($inspiracion[$n]["name"])?></h2>
                               <hr class="star-primary">
                               <p><?php print($inspiracion[$n]["description"])?></p>
                               <img src="<?php print($inspiracion[$n]["image"])?>" class="img-responsive img-centered" alt="vista del proyecto">
                               <ul class="list-inline item-details">
                                   <li>
                                       <strong><?php print($inspiracion[$n]["date"])?></a>
                                       </strong>
                                   </li>
                               </ul>
                               <button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
                           </div>
                           <p>PauPintor 2017</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <?php };?>


    <!-- Team Section -->
    <?php include('who.php');?>

    <!-- Contact Section -->
    <?php include('contact.php');?>

    <!-- Footer Section -->
    <?php include('footer.php');?>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
