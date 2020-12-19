<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-49">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="siteorigin-widget-tinymce textwidget">
                    <h2 style="font-weight: 300">All about the trips and fun text. We’re a bold bunch of riders, explorers.
                        <p></p>
                    </h2>
                    <p>Surfing requires very strong legs which can come from swimming lessons. Swimming also increases a person’s endurance and stamina to paddle in water which constitutes over 50 percent of the surfing time.</p>
                    <p style="text-align: left">
                        <span style="color: #888888">
                            <span class="icon-container">
                                <span class="fa fa-check" style="color:#d80019;"></span>
                            </span> &nbsp;&nbsp;Getting to know the equipment
                        </span>
                    </p>

                    <p style="text-align: left">
                        <span style="color: #888888">
                            <span class="icon-container">
                                <span class="fa fa-check" style="color:#d80019;"></span>
                            </span> &nbsp; Weather conditions and wind
                        </span>
                    </p>
                    <p style="text-align: left">
                        <span style="color: #888888">
                            <span class="icon-container">
                                <span class="fa fa-check" style="color:#d80019;"></span>
                            </span> &nbsp; Motion techniques
                        </span>
                    </p>
                    <hr class="hr--dotted">
                    <h6>24/7 CARE FOR SMALL CHILDREN IN SEASHIRE PROGRAM</h6>
                    <p>Our animators will on every step with the little ones.</p>
                    <hr class="hr--dotted">
                    <h6>WELL ORGANIZED TRIPS AND WATER SPORTS PROGRAMS</h6>
                    <p>Activites to keep you busy through the vacation.</p>
                    <hr class="hr--dotted">
                </div>
            </div>


            <div class="col-md-6">
                <div class="type-51">
                    <div id="gallery-1" class="gallery galleryid-271 gallery-columns-2 gallery-size-medium">
                        <figure class="gallery-item">
                            <div class="gallery-icon landscape">
                                <a href="#" data-featherlight="image">
                                    <img width="300" height="169" src="./images/49&51-images.jpg" class="attachment-medium size-medium" alt="" loading="lazy" aria-describedby="gallery-1-97" srcset="./images/49&51-images.jpg 300w, ./images/49&51-images.jpg 768w, ./images/49&51-images.jpg 540w, ./images/49&51-images.jpg 352w, ./images/49&51-images.jpg 360w, ./images/49&51-images.jpg 864w" sizes="(max-width: 300px) 100vw, 300px">
                                </a>
                            </div>
                            <figcaption class="wp-caption-text gallery-caption" id="gallery-1-97"> Banana water ride</figcaption>
                        </figure>
                        <figure class="gallery-item">
                            <div class="gallery-icon landscape">
                                <a href="#" data-featherlight="image">
                                    <img width="300" height="169" src="./images/49&51-images2.jpg" class="attachment-medium size-medium" alt="" loading="lazy" srcset="./images/49&51-images2.jpg 300w, ./images/49&51-images2.jpg 768w, ./images/49&51-images2.jpg 540w, ./images/49&51-images2.jpg 352w, ./images/48&51-images2.jpg 360w, ./images/49&51-images2.jpg 864w" sizes="(max-width: 300px) 100vw, 300px">
                                </a>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>