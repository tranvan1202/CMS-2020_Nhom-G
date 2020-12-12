<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="type-46">
                <div class="row">
                    <div class="featured-panel">
                        <div class="pricing-list">
                            <div class="pricing-list__item"> 
                                <span class="pricing-list__badge">INCLUDED IN PRICE</span> 
                                <span class="pricing-list__title">Accomodation</span> 
                                <span class="pricing-list__line"></span> 
                                <span class="pricing-list__price">$50/day</span>
                                <p class="pricing-list__description"> Comfortable hostel stay with 3 meals per day.</p>
                            </div>

                            <div class="pricing-list__item"> 
                                <span class="pricing-list__title">Trainer</span> 
                                <span class="pricing-list__line"></span> 
                                <span class="pricing-list__price">$20/hour</span>
                                <p class="pricing-list__description"> Well educated trainers are included in price of this trip. Our range of courses include introductory course to help you get the taste of windsurfing.</p>
                            </div>

                            <div class="pricing-list__item"> 
                                <span class="pricing-list__title">HOSTEL ACCOMODATION</span> 
                                <span class="pricing-list__line"></span> 
                                <span class="pricing-list__price">$40</span>
                            </div>

                            <div class="pricing-list__item"> 
                                <span class="pricing-list__title">TENT ACCOMODATION</span> 
                                <span class="pricing-list__line"></span> 
                                <span class="pricing-list__price">$10</span>
                            </div>

                            <div class="pricing-list__item"> 
                                <span class="pricing-list__title">BOAT TRIPS TO ISLANDS</span> 
                                <span class="pricing-list__line"></span> 
                                <span class="pricing-list__price">$30</span>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="type-45">
                <div class="row">

                    Test



                </div>
            </div>
        </div>

    </div>
</div>