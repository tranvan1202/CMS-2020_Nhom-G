<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-24">
    <div class="type-24__image-container">
        <img class="img-fluid type-24__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/1.jpg" alt="image">
    </div>
    <div class="px-4">
        <div class="type-24__date">
            June 21, 2016
        </div>
        <div class="type-24__author">
        <i class="fa fa-user" aria-hidden="true"></i> BY PRIMO2 CIGLER
        </div>
        <h3 class="type-24__title">
            SAILING IN BAD WEATHER
        </h3>
        <div class="type-24__description">
            About One Windsurfer Tim Bennet is the esteemed founder as well as a leading instructor at Shaka. He has over 20 years of rich experience backing him up. A highly experienced RYA Senior Dinghy Instructor and RYA Powerboat Instructor along expert instructional abilities in windsurfs, kite surfs, general surfing and even paddleboards, he is a real and avid water sports buff.
        </div>
        <div class="type-24__read-more">
            <a href="#">READ MORE</a>
        </div>
      
    </div>
</div>