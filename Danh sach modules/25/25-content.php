<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-25">
    <div class="container">
        <div class="row mx-0">
            <div class="col-2">
                <div class="type-25__previous">
                    <a href="#" class="text-white"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-8">
                <div class="type-25__pagination">
                    <a href="#" class="type-25__pagination__item--active">1</a>
                    <a href="#" class="type-25__pagination__item">2</a>
                </div>
            </div>
            <div class="col-2">
                <div class="type-25__next">
                    <a href="#" class="text-white"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>