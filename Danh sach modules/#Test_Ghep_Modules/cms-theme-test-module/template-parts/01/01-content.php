<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-01">

    <div class="top">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="top__left">
                        <div class="widget  widget-icon-box">
                            <div class="icon-box">
                                <i class="fa  fa-home"></i>
                                <h4 class="icon-box__title">Surfing School, 227 Marrion Street, 110056 Fuertaventura
                                </h4>
                                <span class="icon-box__subtitle"></span>
                            </div>
                        </div>
                    </div>
                    <div class="top__right">
                        <div class="widget  widget_nav_menu">
                            <div class="menu-top-menu-container">
                                <ul id="menu-top-menu" class="menu">
                                    <li id="menu-item-44"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-44">
                                        <a href="https://demo.proteusthemes.com/shaka/extras/">Extras</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-955"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-955">
                                                <a
                                                    href="https://demo.proteusthemes.com/shaka/extras/pricing/">Pricing</a>
                                            </li>
                                            <li id="menu-item-983"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-983">
                                                <a
                                                    href="https://demo.proteusthemes.com/shaka/extras/accordion/">Accordion</a>
                                            </li>
                                            <li id="menu-item-984"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-984">
                                                <a href="https://demo.proteusthemes.com/shaka/extras/brochure-box/">Brochure
                                                    Box</a></li>
                                            <li id="menu-item-985"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-985">
                                                <a href="https://demo.proteusthemes.com/shaka/extras/number-counter/">Number
                                                    Counter</a></li>
                                            <li id="menu-item-986"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-986">
                                                <a href="https://demo.proteusthemes.com/shaka/extras/skype-button/">Skype
                                                    Button</a></li>
                                            <li id="menu-item-987"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987">
                                                <a href="https://demo.proteusthemes.com/shaka/404">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-40"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40"><a
                                            href="https://www.proteusthemes.com/docs/shaka/">Documentation</a></li>
                                    <li id="menu-item-41"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41"><a
                                            href="https://www.proteusthemes.com/pricing/">Buy Theme</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__container">
        <div class="container">
            <div class="header">

                <div class="header__logo">
                    <a href="https://demo.proteusthemes.com/shaka/">
                        <img src="https://demo.proteusthemes.com/shaka/wp-content/uploads/sites/38/2016/06/logo.png"
                            alt="Shaka"
                            srcset="https://demo.proteusthemes.com/shaka/wp-content/uploads/sites/38/2016/06/logo.png, https://demo.proteusthemes.com/shaka/wp-content/uploads/sites/38/2016/06/logo2x.png 2x"
                            class="img-fluid" width="244" height="50">
                    </a>
                </div>
                <nav>
                    <ul class="header_navigation">
                        <li>
                            <a class="active" href="#home">Home</a>
                            <canvas width="61" height="15" class="funky-underline" style="position: absolute; left: 10px; bottom: 38px;"></canvas>
                        </li>
                        <li><a href="#news">Service</a></li>
                        <li><a href="#contact">Event</a></li>
                        <li ><a href="#about">About us</a></li>
                        <li ><a href="#about">Blog</a></li>
                        <li ><a href="#about">Shop</a></li>
                        <li ><a href="#about">Contract</a></li>
                        <a href="https://www.proteusthemes.com/pricing/" class="btn  btn-primary-outline  main-navigation__featured-link" target="_blank">BUY THEME NOW</a>
                    </ul>
                    
                </nav>
            </div>
        </div>
    </div>
</div>