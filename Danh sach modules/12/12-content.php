<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-12">
    <div class="container">
        <div class="row">

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top img-fluid" src="./images/12-image" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-date"> June 21, 2016</p>
                        <h4 class="card-title">
                            <a href="#">Catching that first wave</a>
                        </h4>
                        <div class="card-readmore">
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>