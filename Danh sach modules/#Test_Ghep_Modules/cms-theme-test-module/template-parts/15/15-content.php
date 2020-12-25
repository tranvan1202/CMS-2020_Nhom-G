<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-15">
    <div class="type-15__container">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-3">
                    <div class="widget_text">
                        <img src="<?php bloginfo('stylesheet_directory');?>/images/logo-footer.png" alt="logo_footer"/>
                    </div>
                    <div class="text">
                        <p>
                            The mission of Shaka is to assist the experience of water sports in the safest and most
                            thrilling way possible, with terrific and impressive coaching as well as equipment hire.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-2">
                    <div class="widget-footer">
                        <h6 class="footer-top_heading ">SERVICES</h6>
                        <ul class="menu_service">
                            <li><a href="#">All Services</a></li>
                            <li><a href="#">Surfing</a></li>
                            <li><a href="#">Windsurfing</a></li>
                            <li><a href="#">Kiting</a></li>
                            <li><a href="#">Diving and Snorkeling</a></li>
                            <li><a href="#">Water-skiing and Suping</a></li>
                            <li><a href="#">Sailing and Navigation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-2">
                    <div class="widget-footer">
                        <h6 class="footer-top_heading ">EXTRAS</h6>
                        <ul class="menu_extras">
                            <li><a href="#">Extras</a></li>
                            <li><a href="#">Extras</a></li>
                            <li><a href="#">Accordion</a></li>
                            <li><a href="#">Brochure Box</a></li>
                            <li><a href="#">Number Counter</a></li>
                            <li><a href="#">Skype Button</a></li>
                            <li><a href="#">Error 404</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-2">
                    <div class="widget-footer">
                        <h6 class="footer-top_heading ">SHOP</h6>
                        <ul class="menu_shop">
                            <li><a href="#">Diving Fins</a></li>
                            <li><a href="#">Neoprene Suit</a></li>
                            <li><a href="#">Snorkel mask</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-3">
                    <div class="widget-footer">
                        <h6 class="footer-top_heading ">CONTACT INFO</h6>
                        <div class="widget-text">
                            <p><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>227 Marion Street Avenue, UK</p>
                            <p><i class="fa fa-phone fa-2x" aria-hidden="true"></i>1-888-123-4567</p>
                            <p><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>info@shaka.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-4">
                    <div class="footer-bottom__left">
                        <p><a href="#">Shaka Theme</a> - Made by ProteusThemes.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="footer-bottom__center">
                        <a href=""><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                        <a href=""> <i class="fa fa-youtube fa-2x " aria-hidden="true"></i></a>
                        <a href=""> <i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>

                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="footer-bottom__right">
                        <p> &copy; 2020 Shaka. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>