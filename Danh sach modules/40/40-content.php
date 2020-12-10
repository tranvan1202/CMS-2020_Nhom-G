<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-40">
    <div class="container">
        <div class="row">
            <div class="hentry">
                <div class="hentry__meta  meta  clearfix">
                    <span class="meta__item  meta__item--author>
                    <i class=" fa fa-user"></i> By Primož Cigler
                    </span>

                    <span class="meta__item  meta__item--categories">
                        <a href="#" rel="category tag">Travel</a>
                        <a href="#" rel="category tag">Trips</a>
                    </span>

                    <span class="meta__item  meta__item--tags">
                        <a href="#/" rel="tag">Summer</a>
                        <a href="#" rel="tag">Trips</a>
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>