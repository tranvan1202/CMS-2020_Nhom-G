<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-39">

    <div class="container">
        <div class="row">
            <div class="hentry__header">
                <img src="./images/39.jpg" alt="hinhanhprovip">
            </div>
            <div class="entry-content">
                <a class="hentry-date" href="#">June 21, 2016</a>
                <h1 class="hentry__title">SAILING IN BAD WEATHER</h1>
                <p>About One Windsurfer Tim Bennet is the esteemed founder as well as a leading instructor at Shaka. He has over 20 years of rich experience backing him up. A highly experienced RYA Senior Dinghy Instructor and RYA Powerboat Instructor along expert instructional abilities in windsurfs, kite surfs, general surfing and even paddleboards, he is a real and avid water sports buff.</p>
                <p>Developing the passion for water sports at a very early age, he grew up with it first in Dominic Republic and then in North Wales. He was even an Olympic medal winner and later he took up the career of instructing and coaching people in water sports. He worked in a number of leading windsurfing institutes across Europe and USA for well over a decade and picked up rich experience in all types of surfing in different water conditions.</p>
                <p>Finally, he returned home and started his own academy in Dominic Republic as he wishes to nurture all local talent to this sport and help them make a mark in the world. Apart from water sports, Tim loves mountaineering, hiking and participates from time to time in biking expeditions. He is deeply committed to making every people enjoy the way to fitness and good health through water sports.</p>
                <div class="hentry-meta">
                    <span class="meta__item meta__item--author"><i class="fa fa-user" aria-hidden="true"></i>BY PRIMOŽ CIGLER</span>
                    <span class="meta__item meta__item--categories"><a href="#">TRAVEL</a></span>
                    <span class="meta__item meta__item--tags"><a href="#">SUMMER</a> <a href="#">COURSE</a></span>
                    
                </div>
            </div>
        </div>
    </div>

</div>