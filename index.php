﻿<?php
    require_once("config/conexion.php");
    require_once("models/Socialmedia.php");
    require_once("models/Lenguajes.php");
    require_once("models/Proyectosdestacados.php");
    require_once("models/Proyectos.php");

    $socialmedia = new Socialmedia();
    $lenguajes = new Lenguajes();
    $proyectos_destacados = new Proyectosdestacados();
    $proyectos = new Proyectos();

    $smx = $socialmedia -> get_socialmedia();
    $lenx = $lenguajes -> get_lenguajes();
    $pro_destacados = $proyectos_destacados -> get_proyectos_destacados();
    $prox = $proyectos -> get_proyectos();
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Aplicación PHP </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\widgets.css">
    <link rel="stylesheet" href="assets\css\responsive.css">
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <div class="preloader text-center">
        <div class="circle"></div>
    </div>
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
        <button class="off-canvas-close"><i class="elegant-icon icon_close"></i></button>
        <div class="sidebar-inner">
            <!--Categories-->
            <div class="sidebar-widget widget_categories mb-50 mt-30">
                <div class="widget-header-2 position-relative">
                    <h5 class="mt-5 mb-15">Hot topics</h5>
                </div>
                <div class="widget_nav_menu">
                    <ul>
                        <li class="cat-item cat-item-2"><a href="category.html">Travel tips</a> <span class="post-count">30</span></li>
                        <li class="cat-item cat-item-3"><a href="category-grid.html">Book review</a> <span class="post-count">25</span></li>
                        <li class="cat-item cat-item-4"><a href="category-list.html">Hotel review</a> <span class="post-count">16</span></li>
                        <li class="cat-item cat-item-5"><a href="category-masonry.html">Destinations </a> <span class="post-count">22</span></li>
                        <li class="cat-item cat-item-6"><a href="category-big.html">Lifestyle</a> <span class="post-count">25</span></li>
                    </ul>
                </div>
            </div>
            <!--Latest-->
            <div class="sidebar-widget widget-latest-posts mb-50">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Don't miss</h5>
                </div>
                <div class="post-block-list post-module-1 post-module-5">
                    <ul class="list-post">
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="assets\imgs\news\thumb-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The Life of a Travel Writer with David Farley</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">05 August</span>
                                        <span class="post-by has-dot">300 views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="assets\imgs\news\thumb-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Why Don’t More Black American Women Travel Solo?</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">12 August</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-30">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                    <a class="color-white" href="single.html">
                                        <img src="assets\imgs\news\thumb-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The 22 Best Things to See and Do in Bangkok</a></h6>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">27 August</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Ads-->
            <div class="sidebar-widget widget-ads">
                <div class="widget-header-2 position-relative mb-30">
                    <h5 class="mt-5 mb-30">Advertise banner</h5>
                </div>
                <a href="https://themeforest.net/user/alithemes/portfolio" target="_blank">
                    <img class="advertise-img border-radius-5" src="assets\imgs\ads\ads-1.jpg" alt="">
                </a>
            </div>
        </div>
    </aside>
    <!-- Start Header -->
    <header class="main-header header-style-1 font-heading">
        <div class="header-top">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-md-3 col-xs-6">
                        <a href="#"><img class="logo" style="height: 3rem ; width: 3rem" src="assets\imgs\logophp.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-sticky">
            <div class="container align-self-center">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="main-nav d-none d-lg-block float-left">
                    <nav>
                        <!--Desktop menu-->
                        <ul class="main-menu d-none d-lg-inline font-small">
                            <li><a href="#">Inicio</a> </li>
                            <?php
                                for( $i = 0 ; $i < sizeof($lenx); $i++)
                                {
                            ?>
                                <li><a href="#"><?php echo $lenx[$i] ["len_nombre"]?></a> </li>
                            <?php
                                }
                            ?>
                        </ul>
                        <!--Mobile menu-->
                        <ul style="height : 100vh" id="mobile-menu" class="d-block d-lg-none text-muted">
                            <li><a href="#">Inicio</a> </li>
                            <?php
                                for( $i = 0 ; $i < sizeof($lenx); $i++)
                                {
                            ?>
                                <li><a href="#"><?php echo $lenx[$i] ["len_nombre"]?></a> </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </nav>
                </div>
                <div class="float-right header-tools text-muted font-small">
                    <ul class="header-social-network d-inline-block list-inline mr-15">
                        <?php
                            for( $i = 0 ; $i < sizeof($smx); $i++)
                            {
                        ?>
                            <li class="list-inline-item">
                                <a class="social-icon <?php echo $smx[$i] ["sm_icon1"]?> text-xs-center" target="_blank" href="<?php echo $smx[$i] ["sm_rutaweb"]?>">
                                    <i class="<?php echo $smx[$i] ["sm_icon2"]?> fa-2x"></i>
                                </a>
                            </li>
                        <?php 
                            }
                        ?>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>

    <main>
        <div class="featured-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p class="text-muted"><span class="typewrite d-inline" data-period="2000" data-type='[ " Desarrollador Web. ", "Analista de Sistemas. ", "FullStack " ]'></span></p>
                        <h2>Hola, Soy <span>Rodrigo</span></h2>
                        <h3 class="mb-20"> Bienvenidos a mi web</h3>
                        <h5 class="text-muted">Don't miss out on the latest news about Travel tips, Hotels review, Food guide...</h5>
                    </div>
                    <div class="col-lg-6 text-right d-none d-lg-block">
                        <img src="assets\imgs\authors\featured.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="hot-tags pt-30 pb-30 font-small align-self-center">
                <div class="widget-header-3">
                    <div class="row align-self-center">
                        <div class="col-md-4 align-self-center">
                            <h5 class="widget-title">Proyectos</h5>
                        </div>
                        <div class="col-md-8 text-md-right font-small align-self-center">
                            <p class="d-inline-block mr-5 mb-0"><i class="elegant-icon  icon_tag_alt mr-5 text-muted"></i>Etiquetas:</p>
                            <ul class="list-inline d-inline-block tags">
                                <li class="list-inline-item"><a href="#"># PHP</a></li>
                                <li class="list-inline-item"><a href="#"># Node JS</a></li>
                                <li class="list-inline-item"><a href="#"># JavaScript</a></li>
                                <li class="list-inline-item"><a href="#"># SQL</a></li>
                                <li class="list-inline-item"><a href="#"># NoSQL</a></li>
                                <li class="list-inline-item"><a href="#"># Angular</a></li>
                                <li class="list-inline-item"><a href="#"># React</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loop-grid mb-30">
                <div class="row">
                    <div class="col-lg-8 mb-30">
                        <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                            <div class="arrow-cover"></div>
                            <div class="slide-fade">
                            <?php
                                for( $i = 0 ; $i < sizeof($pro_destacados); $i++)
                                {
                            ?>
                                <div class="position-relative post-thumb">
                                    <div class="thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/proyectos/<?php echo $pro_destacados[$i] ["pro_img"]?>)">
                                        <a class="img-link" target="_blank" href="<?php echo $pro_destacados[$i] ["pro_url"]?>"></a>
                                        <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                            <div class="entry-meta meta-0 font-small mb-20">
                                            <?php
                                                $datos = $proyectos -> get_proyecto_x_etiqueta($pro_destacados[$i] ["pro_id"]);
                                                foreach($datos as $row)
                                                {
                                            ?>
                                                <a href="#"><span class="post-cat text-white text-uppercase"> <?php echo $row["det_nombre"]?> </span></a>
                                            <?php 
                                                }
                                            ?>
                                            </div>
                                            <h3 class="post-title font-weight-900 mb-20">
                                                <a class="text-white" href="#"> <?php echo $pro_destacados[$i] ["pro_titulo"]?> </a><br>
                                                <h5 class="text-white margin-subtitulo" style="margin-top:-1rem"> <?php echo $pro_destacados[$i] ["pro_subtitulo"]?> </h5>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                                }
                            ?>
                            </div>
                        </div>
                    </div>
                    <?php
                            for( $i = 0 ; $i < sizeof($prox); $i++)
                            {
                    ?>
                        <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                            <div class="post-card-1 border-radius-10 hover-up">
                                <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url(assets/imgs/proyectos/<?php echo $prox[$i] ["pro_img"]?>)">
                                    <a class="img-link" target="_blank" href="<?php echo $prox[$i] ["pro_url"]?>"></a>
                                </div>
                                <div class="post-content p-30">
                                    <div class="entry-meta meta-0 font-small mb-10">
                                    <?php
                                        $datos = $proyectos -> get_proyecto_x_etiqueta($prox[$i] ["pro_id"]);
                                        foreach($datos as $row)
                                        {
                                    ?>
                                        <a href="#"><span class="post-cat text-primary text-uppercase"> <?php echo $row["det_nombre"]?> </span></a>
                                    <?php 
                                        }
                                    ?>
                                    </div>
                                    <div class="d-flex post-card-content">
                                        <h5 class="post-title mb-20 font-weight-900">
                                            <a target="_blank" href="<?php echo $prox[$i] ["pro_url"]?>"><?php echo $prox[$i] ["pro_titulo"]?></a>
                                        </h5>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on"><?php echo $prox[$i] ["pro_titulo"]?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>      
                    <?php 
                            }
                    ?>
                    
                </div>
            </div>
        </div>
    </main>
    <!-- End Main content -->

    <!-- Footer Start-->
    <footer class="pt-50 pb-20 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sidebar-widget wow fadeInUp animated mb-30 text-center">
                        <div class="textwidget">
                            <strong class="color-black">Sigueme</strong><br>
                            <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                <?php
                                    for( $i = 0 ; $i < sizeof($smx); $i++)
                                    {
                                ?>
                                    <li class="list-inline-item">
                                        <a class="<?php echo $smx[$i] ["sm_icon1"]?>" href="<?php echo $smx[$i] ["sm_rutaweb"]?>" target="_blank" title="<?php echo $smx[$i] ["sm_nombre"]?>">
                                            <i class="<?php echo $smx[$i] ["sm_icon2"]?> fa-2x"></i>
                                        </a>
                                    </li>

                                <?php 
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
                <p class="float-md-left font-small text-muted">© 2022, Stories - Plantilla de Blog HTML </p>
                <p class="float-md-right font-small text-muted">
                    Diseñado por: <a target="_blank">Rodrigo Cárdenas</a> | Derechos Reservados
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="assets\js\vendor\modernizr-3.5.0.min.js"></script>
    <script src="assets\js\vendor\jquery-1.12.4.min.js"></script>
    <script src="assets\js\vendor\popper.min.js"></script>
    <script src="assets\js\vendor\bootstrap.min.js"></script>
    <script src="assets\js\vendor\jquery.slicknav.js"></script>
    <script src="assets\js\vendor\slick.min.js"></script>
    <script src="assets\js\vendor\wow.min.js"></script>
    <script src="assets\js\vendor\jquery.ticker.js"></script>
    <script src="assets\js\vendor\jquery.vticker-min.js"></script>
    <script src="assets\js\vendor\jquery.scrollUp.min.js"></script>
    <script src="assets\js\vendor\jquery.nice-select.min.js"></script>
    <script src="assets\js\vendor\jquery.magnific-popup.js"></script>
    <script src="assets\js\vendor\jquery.sticky.js"></script>
    <script src="assets\js\vendor\perfect-scrollbar.js"></script>
    <script src="assets\js\vendor\waypoints.min.js"></script>
    <script src="assets\js\vendor\jquery.theia.sticky.js"></script>
    <!-- NewsBoard JS -->
    <script src="assets\js\main.js"></script>
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/456aaec555.js" crossorigin="anonymous"></script>
</body>

</html>