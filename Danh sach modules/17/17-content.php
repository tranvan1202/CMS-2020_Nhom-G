<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<li class="clearfix hentry product type-product post-1143 status-publish first instock product_cat-beach-accesories product_tag-ball has-post-thumbnail shipping-taxable purchasable product-type-simple">
<div class="col-6 col-md-4 col-lg-3 mb-3">
        <div class="item">
            <a href="#">
            <img class="hinh" width="300" height="300" src="./images/shop5.jpg">
            <h2>Beach Air Ball</h2>
            <span class="price">£ 9.99</span>
            </a>
            <a href="" class="form-control btn btn-info add-card">ADD TO CARD</a>
        </div>
    </div>
</li>