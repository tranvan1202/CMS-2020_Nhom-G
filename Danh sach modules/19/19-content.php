<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class = "content-area container">
    <div class="col-xs-12  col-md-3  col-md-pull-9">
        <div class="sidebar" role="complementary">
            <div class="widget  woocommerce widget_shopping_cart">
                <h4 class="sidebar__headings">Cart</h4>
                <div class="widget_shopping_cart_content">
                    <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                </div>
            </div>
        </div>
    </div>