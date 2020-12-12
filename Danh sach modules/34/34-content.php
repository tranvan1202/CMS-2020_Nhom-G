<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-34">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="gallery-images">
                    <a href="#" ><img src="./images/shop5.jpg" alt="shop5" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="entry-summary">
                    <h1 class="product-title">Beach Air Ball</h1>
                    <p class="price">
                        &pound;9.99
                    </p>
                    <div class="product-detail">
                        <p>
                            Windsurfing About Content Windsurfing as an adventurous sport and recreational pastime first peaked
                            in 1980s only to fall. However, with all sorts of advancement, the sport has suddenly caught the fancy
                            of all those looking for unique
                            adventure and fun. If you want to revel in the thrill and the tornado of
                            gliding over waves at over 20-30 miles per hour, look no further than Shaka.
                            The Shaka windsurfing center is situated in the sandy paradise of the Dominic Republic.
                        </p>
                    </div>
                    <form action="#" class="cart">
                        <div class="quantity">
                            <input type="number" class="input-qty" min="1" value="1" title="QTY">
                        </div>
                        <button type="submit" class="single-add-card">ADD TO CARD</button>
                    </form>
                    <div class="product-meta">
                        <p class="posted-in">Category: <a href="#">Beach Accesories</a></p>
                        <p class="tagged-as">Tag: <a href="#">Ball</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>