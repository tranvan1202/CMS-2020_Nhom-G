<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-48">
    <div class="container">
            <div class="specialoffer-title">
                <h4>SPECIAL OFFERS</h4>
            </div>

        <div class="row">
            <div class="col-md-6">
                <div class="type-47">
                    <div class="special-offer">
                        <div class="special-offer__image">
                            <img class="img-fluid" src="./images/47-item1.jpg" alt="FAMILY PACKAGE">
                        </div>

                        <div class="special-offer__content">
                            <div class="special-offer__label"> LAST MINUTE </div>
                            <h4 class="special-offer__title"> FAMILY PACKAGE</h4>
                            <div class="special-offer__price"> $960</div>
                            <div class="special-offer__features">
                                <div class="special-offer__feature">
                                    <i class="fa  fa-check" aria-hidden="true"></i> 7 Day Accomodation
                                </div>
                                <div class="special-offer__feature">
                                    <i class="fa  fa-check" aria-hidden="true"></i> All inclusive
                                </div>
                                <div class="special-offer__feature">
                                    <i class="fa  fa-check" aria-hidden="true"></i> One trip free of charge
                                </div>
                            </div>
                            <p class="special-offer__text"> Surfing requires very strong legs which can come from.</p>
                            <a href="#" target="_blank" class="btn  btn-primary  special-offer__cta">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
            <div class="type-47">
                    <div class="special-offer">
                        <div class="special-offer__image">
                            <img class="img-fluid" src="./images/47-item1.jpg" alt="FAMILY PACKAGE">
                        </div>

                        <div class="special-offer__content">
                            <h4 class="special-offer__title"> FAMILY PACKAGE</h4>
                            <div class="special-offer__price"> $960</div>
                            <div class="special-offer__features">
                                <div class="special-offer__feature">
                                    <i class="fa  fa-check" aria-hidden="true"></i> 7 Day Accomodation
                                </div>
                                <div class="special-offer__feature">
                                    <i class="fa  fa-check" aria-hidden="true"></i> All inclusive
                                </div>
                                <div class="special-offer__feature">
                                    <i class="fa  fa-check" aria-hidden="true"></i> One trip free of charge
                                </div>
                            </div>
                            <p class="special-offer__text"> Surfing requires very strong legs which can come from.</p>
                            <a href="#" target="_blank" class="btn  btn-primary  special-offer__cta">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>