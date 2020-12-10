<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-35-36">
    <div class="type-35-36__container container">
        <ul class="nav nav-tabs wc-tabs" id="myTab" role="tablist">
            <li class="nav-item description_tabs description_first">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">DESCRIPTION</a>
            </li>
            <li class="nav-item description_tabs">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">REVIEWS(0)</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="type-35">
                    <div class="woo-tabs-panel">
                        <h2>DESCRIPTION</h2>
                        <p>With the longest stretch of uninterrupted beach and mesmerizing bays and lagoons, we boast of an ideal place to enjoy the sport to the hilt. Added to it our top notch and latest modern equipments and exceptionally talented and experienced professionals, our center is the dream destination for all those who wish to learn the sport and become a champion in it. We take care of all licenses and top safety equipments in place; we ensure that you learn the sport in the safest environment with the best in the profession.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="type-36">
                    <div class="woo-tabs-panel-comment">
                        <h2>REVIEWS</h2>
                        <p>There are no reviews yet.</p>
                        <p class="text-small">Be the first to review “Beach Air Ball”</p>
                        <p>You must be <a href="#">logged in</a> to post a review.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>