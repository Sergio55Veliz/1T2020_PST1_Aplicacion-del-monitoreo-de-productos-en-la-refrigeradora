<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: /index.php");
    }
    
    $user_id = $_SESSION['user_id'];
    $usuario = $_SESSION['user'];
    $nombre = $_SESSION['nombre'];
    $contraseña = $_SESSION['contraseña'];
    $correo = $_SESSION['correo'];
    
      
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Datos usuario - Mi Despensa</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/faviconn.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.php"><img src="images/logoff.svg" alt="alternative" height="100"></a>
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <a class="navbar-brand logo-text page-scroll" href="index.php">Mi Despensa</a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                
              
                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="index.html#header" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Mis datos</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#datosComida"><span class="item-text">Alimentos disponibles</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="#datosUser"><span class="item-text">Mi Cuenta</span></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="cerrar-sesion.php">Cerrar Sesión <span class="sr-only">(current)</span></a>
                </li>
                <!-- end of dropdown menu -->

            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="datosComida" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Mis alimentos</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->




  <!-- Begin Page Content -->
        <div class="container-fluid">



          <div class="row">

                       <!-- Tasks Card Example -->
                      <div class="col-xl-6 col-md-12 mb-8">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      
                         <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample1">
                    
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Fruta</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">70%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse hide" id="collapseCardExample1">
                  <div class="card-body">
                    <!-- DataTales Example -->
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Fruta</th>
                      <th>Peso</th>
                      <th>Porcentaje</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Durazno</th>
                      <th>Peso</th>
                      <th>Porcentaje</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Guineo</td>
                      <td>1</td>
                      <td>1%</td>
                    </tr>
                    <tr>
                      <td>Manzana</td>
                      <td>1</td>
                      <td>1%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
      


                  </div>
                </div>
              </div>
                    </div>
                    <div class="col-auto">
                        <div class="image-container">
                            <img class="img-fluid" src="images/sandia.png" width="100">
                        </div> <!-- end of image-container -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
                
                
                <!-- Tasks Card Example -->
                      <div class="col-xl-6 col-md-12 mb-8">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      
                         <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample2">
                    
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Vegetales</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse hide" id="collapseCardExample2">
                  <div class="card-body">
                    <!-- DataTales Example -->
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Vegetal</th>
                      <th>Peso</th>
                      <th>Porcentaje</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Vegetal</th>
                      <th>Peso</th>
                      <th>Porcentaje</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Zanahoria</td>
                      <td>1</td>
                      <td>1%</td>
                    </tr>
                    <tr>
                      <td>Tomate</td>
                      <td>1</td>
                      <td>1%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
      


                  </div>
                </div>
              </div>
                    </div>
                    <div class="col-auto">
                                           <div class="image-container">
                        <img class="img-fluid" src="images/zanahoria.png" width="100">
                    </div> <!-- end of image-container -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
                
              </div>
            </div>
        
        <div class="container-fluid">



          <div class="row">
                       <!-- Tasks Card Example -->
            <div class="col-xl-6 col-md-12 mb-8">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      
                       <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample3">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Lacteos</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse hide" id="collapseCardExample3">
                  <div class="card-body">
                   <!-- DataTales Example -->
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Lacteo</th>
                      <th>Peso</th>
                      <th>Porcentaje</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Lacteo</th>
                      <th>Peso</th>
                      <th>Porcentaje</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Leche</td>
                      <td>1</td>
                      <td>1%</td>
                    </tr>
                    <tr>
                      <td>Queso</td>
                      <td>1</td>
                      <td>1%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
      


                  </div>
                </div>
              </div>
                    </div>
                    <div class="col-auto">
                        <div class="image-container">
                            <img class="img-fluid" src="images/leche.png" width="100">
                        </div> <!-- end of image-container -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
                       <!-- Tasks Card Example -->
            <div class="col-xl-6 col-md-12 mb-8">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      
                       <!-- Collapsable Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample4" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample4">
                    
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Carnes</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse hide" id="collapseCardExample4">
                  <div class="card-body">
                   <!-- DataTales Example -->
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Carne</th>
                      <th>Peso</th>
                      <th>Porcentaje</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Carne</th>
                      <th>Peso</th>
                      <th>Porcentaje</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Res</td>
                      <td>1</td>
                      <td>1%</td>
                    </tr>
                    <tr>
                      <td>Ave</td>
                      <td>1</td>
                      <td>1%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
      


                  </div>
                </div>
              </div>
                    </div>
                    <div class="col-auto">
                      <div class="image-container">
                        <div class="image-container">
                            <img class="img-fluid" src="images/carne.png" width="100">
                            </div> <!-- end of image-container -->
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
   
              
   <!-- Services -->
    <div id="datosUser" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Datos Usuario</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->
    
    <!-- Details 1 -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2></h2>
                        <?php?>
                        <h4>Usuario: <?= $usuario ?></h4>
                        <h4>Nombre: <?= $nombre ?></h4>
                        <h4>Correo: <?= $correo ?></h4>
                        <?php?>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/comunicaciones.svg" width="300" height="300">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->


    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox-1.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Design And Plan</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                    <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>Acerca de Mi Despensa</h4>
                        <p>Este es un proyecto de la materia Programación de Sistemas Telemáticos</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Integrantes</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Elvia De La Cruz <a class="turquoise" href="#your-link"></a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Carlos Naranjo <a class="turquoise" href="#your-link"></a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Sergio Véliz <a class="turquoise" href="#your-link"></a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Frank Vera <a class="turquoise" href="#your-link"></a></div>
                            </li>

                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Redes Sociales</h4>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                       
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->

	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
    
</body>
</html>