<?php

  

  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
  
  require 'conexion.php';

  if (!empty($_POST['usuario']) && !empty($_POST['contraseña'])) {
    $records = $conn->prepare('SELECT * FROM Usuario'
    .' WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['contraseña'], $results['contrasenia'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /iniciar-sesion");
    } else {
      $message = 'Perdon, las credenciales no coinciden';
    }
  }

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
    <title>Mi Despensa </title>
    
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
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.php"><img src="images/logoff.svg" weidth=300 ></a>
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
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Información </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#manual"> Manual </a>
                </li>

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="header" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Ingresar</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="registrarse.php"><span class="item-text">Registrarse</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="iniciar-sesion.php"><span class="item-text">Iniciar sesión</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#video"> Video </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#about"> Equipo</a>
                </li>
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
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise"> Más organización </span> Menos desperdicio </h1>
                            <p class="p-large">Mi Despensa le permite llevar un control de sus alimentos en el refrigerador, la cantidad que dispone y alertarlo mediante correo electrónico cuando ya no cuente con guarniciones. </p>
                            <a class="btn-solid-lg page-scroll" href="#services">CONOCER MÁS</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="images/header-teamwork.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->



    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Mi Despensa</h2>
                    <p class="p-heading p-large"> Mi Despensa le permite tener un mayor control sobre los alimentos que almacena en su refrigerador</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-11.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Datos estadísticos</h4>
                            <p>Obtenga datos estadísticos de sus guarniciones, conozca porcentualmente la cantidad de alimentos con los que cuenta (frutas, vegetales, carnes, lacteos, etc)</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-22.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Compras más ágiles</h4>
                            <p>Revise desde cualquier lugar la cantidad de alimentos con la que cuenta, ideal para tener siempre presente qué es lo que falta y lo que ya se tiene al momento de realizar compra de insumos.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="images/services-icon-33.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Avisos por correo</h4>
                            <p>Mantengase siempre informado del contenido de alimentos en su refrigerador, reciba alertas por correo electrónico cuando falten guarniciones o estè corto de insumos</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div id= "manual" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Manual de Usuario</h2>
                        <p>Revise el siguiente macual para conocer todas las funciones que brinda Mi Despensa </p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">MANUAL</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-1-office-worker.svg" alt="alternative">
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
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/b9cde93e698d514d8030804e4ba0d2d8-0.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                     <div class="image-container">
                        <img class="img-fluid" src="images/b9cde93e698d514d8030804e4ba0d2d8-1.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    
 
    <!-- Video -->
    <div id= "video" class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Video demostrativo</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com" data-effect="fadeIn">
                                <img class="img-fluid" src="images/video-frame.svg" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                    <p>Conozca las facilidades que le brinda <strong>Mi despensa</strong> y cómo hacer uso de todas las funciones que brinda este innovador proyecto</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of video -->


    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Acerca de nuestro equipo</h2>
                    <p class="p-heading p-large">Grupo 1 - Programación de Sistemas Telemáticos</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-member-3.svg" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong>Elvia Daniela De La Cruz Intriago</strong></p>
                        <p class="job-title">Estudiante Ing. Mecatrónica</p>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->
                    
                                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-member-2.svg" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong>Carlos Axxel Naranjo Riofrío</strong></p>
                        <p class="job-title">Estudiante Ing. Mecatrónica</p>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->
                    
                                        <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-member-2.svg" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong>Sergio Kevin Véliz Aldáz</strong></p>
                        <p class="job-title">Estudiante Ing. Mecatrónica</p>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-member-2.svg" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong>Frank Andrés Vera Vera</strong></p>
                        <p class="job-title">Estudiante Ing. Mecatrónica</p>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of about -->



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