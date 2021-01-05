<?php
/*
Template Name: Extras
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
                Extras
            </h2>
            <div class="type-22__breadcrumb">
                <div>
                    <a class="type-22__breadcrumb__item" href="#">SHAKA</a>
                </div>
                <div>
                    <a class="type-22__breadcrumb__item-primary" href="#">Extras</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modules-missing">
    <h4 style="text-align: center;">Thiếu hoặc lỗi module 89 -> 93 (Ko ghép đc)</h4>
    </div>
    <?php
    //get_template_part('template-parts/30/30', 'content');
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
