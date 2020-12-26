<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
<div class="main">
    <header class="woocommerce-products-header"></header>
    <div class="woocommerce-notices-wrapper"></div>
    <p class="woocommerce-result-count"> Showing all 8 results</p>
    <form class="woocommerce-ordering" method="get">
        <select name="orderby" class="orderby" aria-label="Shop order">
            <option value="menu_order" selected="selected">Default sorting</option>
            <option value="popularity">Sort by popularity</option>
            <option value="rating">Sort by average rating</option>
            <option value="date">Sort by latest</option>
            <option value="price">Sort by price: low to high</option>
            <option value="price-desc">Sort by price: high to low</option>
        </select>
        <input type="hidden" name="paged" value="1">
    </form>
</div>
</div>