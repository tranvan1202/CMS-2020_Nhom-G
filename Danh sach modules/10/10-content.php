<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-10">
    <div class="container">
        <div class="row">

            <div class="card-deck">
                <a  href="#" class="card">
                    <img src="./images/10-cate" class="card-img-top" alt="...">
                    <div class="card-text">Centered</div>
                </a>

                <a  href="#" class="card">
                    <img src="./images/10-cate" class="card-img-top" alt="...">
                    <div class="card-text">Centered</div>
                </a>

                <a  href="#" class="card">
                    <img src="./images/10-cate" class="card-img-top" alt="...">
                    <div class="card-text">Centered</div>
                </a>

            <div class="container">
                <div class="row btn-shopmore">

                    <p>
                        <a class="btn btn-dark" href="#s">SHOP MORE</a>
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>