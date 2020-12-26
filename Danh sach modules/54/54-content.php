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
        <div class="col-md-4">
            <span class="pricing-list__title">SURF RENT</span>
            <span class="pricing-list__line">..............................................................</span>
            <span class="pricing-list__price">$45</span><br>
            <span class="pricing-list__description"> Our boards and sails are of one of the most coveted and most wanted brands of the world.</span><br>
           

            <span class="pricing-list__title">EQUIPMENT STORAGE</span>
            <span class="pricing-list__line">......................</span>
            <span class="pricing-list__price">$50/month</span><br>
            <span class="pricing-list__description">Each sail has been rigged with the carbon mast and the carbon booms as per the recommended standard.</span>
        </div>
        <div class="col-md-4">
            <span class="pricing-list__title">PRIVATE LESSONS</span>
            <span class="pricing-list__line">..............................</span>
            <span class="pricing-list__price">$60/hour</span><br>
            <span class="pricing-list__description">To make the deal more attractive for you, we have an amazing price range with discounts for bulk bookings.</span><br>
            <span class="pricing-list__title">GROUP LESSONS</span>
            <span class="pricing-list__line">....................................</span>
            <span class="pricing-list__price">$100/hour</span><br>
            <span class="pricing-list__description">For professional our coast and equipments are the best to hone your skills and get at the top of the game.</span>
        </div>
    </div>
</div>