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
    <div class="col-md-4 trai">
        <span class="line">................................................................................</span><br>
        <span class="title"><h6>JUNIOR SURF COACHES AND ANIMATOR CARE</h6></span><br>
        <span class="des">We take care of the little ones for free.</span><br>
        <span class="line">................................................................................</span><br>
        <span class="title"><h6>ACCOMODATION AND LIVING EXPENCES</h6></span><br>
        <span class="des">Price varies by type of accomodation and placea.</span><br>
        <span class="line">................................................................................</span><br>
        </div>
    <div class="col-md-4 phai">
        <img width="400" height="300" src="images/24.jpg" alt="24">
    </div>
</div>
</div>