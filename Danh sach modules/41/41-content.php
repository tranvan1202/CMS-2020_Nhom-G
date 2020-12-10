<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-41">
    <div class="container">
        <div class="row">

            <a class="custom-card" href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="./images/41-item1" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-price"> $650</p>
                        <h5 class="card-title">
                            Trip to Spain
                        </h5>
                        <div class="card-items">
                            <p class="card-item">
                                <i class="fa fa-map-marker"></i>
                                Los Riomare
                            </p>
                            <p class="card-item">
                                <i class="fa fa-check"></i>
                                Accomodation
                            </p>
                        </div>

                    </div>
                </div>
            </a>

        </div>
    </div>
</div>