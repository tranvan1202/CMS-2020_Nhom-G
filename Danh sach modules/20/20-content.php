<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="content-area  container">
    <div class="row">
        <div class="col-xs-12  col-md-3  col-md-pull-9">
            <div class="sidebar" role="complementary">
                <div class="widget  woocommerce widget_product_categories">
                    <h4 class="sidebar__headings">Product Categories</h4>
                    <ul class="product-categories">
                        <li class="cat-item cat-item-31"><a href="https://demo.proteusthemes.com/shaka/product-category/beach-accesories/">Beach Accesories</a></li>
                        <li class="cat-item cat-item-26"><a href="https://demo.proteusthemes.com/shaka/product-category/diving/">Diving</a></li>
                        <li class="cat-item cat-item-34"><a href="https://demo.proteusthemes.com/shaka/product-category/trips/">Trips</a></li>
                        <li class="cat-item cat-item-51"><a href="https://demo.proteusthemes.com/shaka/product-category/uncategorized/">Uncategorized</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>