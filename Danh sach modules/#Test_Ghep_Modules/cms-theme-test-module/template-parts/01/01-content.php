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
                                    <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-44">
                                        <a href="#">Extras</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-955" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-955">
                                                <a href="#">Pricing</a>
                                            </li>
                                            <li id="menu-item-983" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-983">
                                                <a href="#">Accordion</a>
                                            </li>
                                            <li id="menu-item-984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-984">
                                                <a href="#">Brochure
                                                    Box</a></li>
                                            <li id="menu-item-985" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-985">
                                                <a href="#">Number
                                                    Counter</a></li>
                                            <li id="menu-item-986" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-986">
                                                <a href="#">Skype
                                                    Button</a></li>
                                            <li id="menu-item-987" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987">
                                                <a href="#">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-40" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40"><a href="#">Documentation</a></li>
                                    <li id="menu-item-41" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41"><a href="#">Buy Theme</a></li>
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
                    <a href="#">
                        <img src="https://demo.proteusthemes.com/shaka/wp-content/uploads/sites/38/2016/06/logo.png" alt="Shaka" srcset="https://demo.proteusthemes.com/shaka/wp-content/uploads/sites/38/2016/06/logo.png, https://demo.proteusthemes.com/shaka/wp-content/uploads/sites/38/2016/06/logo2x.png 2x" class="img-fluid" width="244" height="50">
                    </a>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto customs">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="home" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Service
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="./events" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Events
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="./about-us" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    About us
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="./blog" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="./shop" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="./contact" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Contact
                                </a>
                            </li>
                        </ul>
                        <a href="#" class="the-myth">BUY THEME NOW</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</div>