<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-15">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-3">
                    <div class="widget_text">
                        <img src="./images/logo-footer" alt="logo_footer">
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
                            <li><a href="">test</a></li>
                            <li><a href="">test</a></li>
                            <li><a href="">test</a></li>
                            <li><a href="">test</a></li>
                            <li><a href="">test</a></li>
                            <li><a href="">test</a></li>
                            <li><a href="">test</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-2">
                    <div class="widget-footer">
                        <h6 class="footer-top_heading ">EXTRAS</h6>
                        <ul class="menu_extras">
                            <li><a href="">test</a></li>
                            <li><a href="">test</a></li>
                            <li><a href="">test</a></li>
                            <li><a href="">test</a></li>
                            <li><a href="">test</a></li>
                            <li><a href="">test</a></li>
                            <li><a href="">test</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-2">
                    <div class="widget-footer">
                        <h6 class="footer-top_heading ">SHOP</h6>
                        <ul class="menu_shop">
                            <li><a href="">test</a></li>
                            <li><a href="">test</a></li>
                            <li><a href="">test</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-3">
                    <div class="widget-footer">
                        <h6 class="footer-top_heading ">CONTACT INFO</h6>
                        <div class="widget-text">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>test</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>