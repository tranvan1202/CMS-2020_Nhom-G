<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
    <div class="container">
    	<div class="cover-type3">
            <div class="panel-grid-cell">
                <div class="cover_content">
                    <a href="#" class="fvp-dynamic">
                        <div class="icon_play"><i class="fa fa-play-circle-o"></i></div>
                        <img width="352" height="198" src="https://demo.proteusthemes.com/shaka/wp-content/uploads/sites/38/2016/06/47.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" style="opacity: 0.75;">
                    </a>
                    <div class="page-box__content mr-top">
                        <h4 class="page-box__title">
                            <a href="https://demo.proteusthemes.com/shaka/services/learn-how-to-surf/">WINDSURFING</a>
                        </h4>
                        <p class="page-box__text">Our beach side is not only terrific for all types of water sports but we offer other exciting adventure sports as well. Take your family out …</p>
                        <a href="https://demo.proteusthemes.com/shaka/services/learn-how-to-surf/" class="page-box__more-link">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>