<?php
/*
Template Name: SAILING AND NAVIGATION
*/

get_header();
?>

<main id="primary" class="site-main">
    <div class="type-22">
        <div class="container">
            <div class="type-16">
                <div class="container">
                    <nav class="navbar navbar-expand-sm navbar-dark">
                        <!-- Links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-twitter " aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-youtube " aria-hidden="true"></i></a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto social-icon__right">
                            <li class="nav-item">
                                <a class="nav-link icon-box" href="#"> <i class="fa fa-envelope" aria-hidden="true"></i>INFO&#64;SURFING.COM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-headphones" aria-hidden="true"></i>031 567 653</a>
                            </li>

                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/en.png" alt="english">ENGLISH
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/de.png" alt=""> Deutsch</a>
                                    <a class="dropdown-item" href="#">WPML support</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <h2 class="type-22__title">
            SAILING AND NAVIGATION
            </h2>
            <div class="type-22__breadcrumb">
                <div>
                    <a class="type-22__breadcrumb__item" href="#">SHAKA</a>
                </div>
                <div>
                    <a class="type-22__breadcrumb__item-primary" href="#">Shaka -> SAILING AND NAVIGATION</a>
                </div>
            </div>
        </div>
    </div>

    <div class="type-33 type-33-all-services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget_product_categories">
                        <ul class="product-categories">
                            <li class="cat-item"><a href="./services">All Services</a></li>
                            <!-- <canvas width="225" height="64" id="myCanvas" class="funky-item-draw" style="position: absolute;top: -7px;left: -7px;bottom: -7px;"></canvas> -->
                            <li class="cat-item"><a href="./services/surfing">Surfing</a></li>
                            <li class="cat-item"><a href="./services/windsurfing">WINDSURFING</a></li>
                            <li class="cat-item"><a href="./services/kiting">Kiting</a></li>
                            <li class="cat-item"><a href="./services/waterskiing-and-suping">WATER-SKIING AND SUPING</a></li>
                            <li class="cat-item"><a href="./services/diving-and-snorkeling">DIVING AND SNORKELING</a></li>
                            <li class="cat-item cat-item-active"><a href="./services/sailing-and-navigation">SAILING AND NAVIGATION</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <h4>BỎ CÁC MODULES VÀO ĐÂY</h4>
                </div>
            </div>
        </div>
    </div>

    <?php
    //get_template_part('template-parts/30/30', 'content');
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
