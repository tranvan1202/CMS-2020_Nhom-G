<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-09">
    <div class="container">
        <div class="row">
            <div class="title-shop-a-surf">
                <a class="btn  btn-dark  js-funky-box  btn-funky  is-btn-title" href="#">
                    SHOP A SURF
                </a>
            </div>

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/09-item1" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-price"> £15.00</p>
                        <h4 class="card-title">
                            <a href="#">Snorkel Mask</a>
                        </h4>
                        <div class="card-categories">
                            <a href="#">Diving</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/09-item1" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-price"> £15.00 </p>
                        <h4 class="card-title">
                            <a href="#">Snorkel Mask</a>
                        </h4>
                        <div class="card-categories">
                            <a href="#">Diving</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/09-item1" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-price"> £15.00 </p>
                        <h4 class="card-title">
                            <a href="#">Snorkel Mask</a>
                        </h4>
                        <div class="card-categories">
                            <a href="#">Diving</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/images/09-item1" alt="Card image cap" />
                    <div class="card-body">
                        <p class="card-price"> £15.00</p>
                        <h4 class="card-title">
                            <a href="#">Snorkel Mask</a>
                        </h4>
                        <div class="card-categories">
                            <a href="#">Diving</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>