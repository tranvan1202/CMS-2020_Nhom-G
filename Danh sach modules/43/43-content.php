<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div id="featured-image" class="featured-image" data-toggle="modal" data-target="#modalBanner">
    <figure class="portfolio__gallery-item  gallery-item">
        <img class="img-slide img-fluid" src="./images/43-bg1.jpg" alt="First slide" data-target="#carouselExample" width="1920" height="450">
    </figure>
</div>


<div class="modal" id="modalBanner" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close m-0 p-3 text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bg-transparent">
            <div class="modal-body p-0">
                <div id="carouselBanner" class="carousel slide carousel-fade" data-ride="false">
                    <div class="carousel-item active">
                        <figure class="modal-gallery-item">
                            <img class="d-block w-100" src="./images/43-bg1.jpg">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="type-43">
                <div class="row">
                    <div class="card">
                        <p class="card-price"> $650</p>
                        <h2 class="card-title">Trip to Spain</h2>
                        <div class="card-text">
                            <div data-canvas-width="382.27419082465866">With our coaching classes, you can be assured of surfing like a pro in no time. All our lessons are in compliance with RYA and&nbsp;WNZ guidelines and the minimum requirement asked for course is that&nbsp;you are able to swim atleast 75m with or without using&nbsp;a buoyancy aid.</div>
                        </div>

                        <div class="card-items">
                            <p class="card-item">
                                <i class="fa fa-map-marker"></i>
                                Los Riomare
                            </p>
                            <p class="card-item">
                                <i class="fa fa-check"></i>
                                Accomodation
                            </p>
                        </div>

                        <div class="card-feature">
                            <div class="feature-item"> <i class="fa  fa-star-o" aria-hidden="true"></i> Junior Program</div>
                            <div class="feature-item"> <i class="fa  fa-map-signs" aria-hidden="true"></i> Organized Trips</div>
                            <div class="feature-item"> <i class="fa  fa-life-ring" aria-hidden="true"></i> Lifeguard</div>
                            <div class="feature-item"> <i class="fa  fa-unlock-alt" aria-hidden="true"></i> Storage option</div>
                        </div>

                        <a class="btn  btn-primary  book-now" href="#" target="_self">Book Now</a>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-lg-6">
           <?php include '../44/44-content.php' ;?>
        </div>

    </div>
</div>