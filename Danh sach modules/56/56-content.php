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
        <div class="col-md-5 trai">
            <span class="title"><h5>WINDSURFING IN FUERTAVENTURA</h5></span><br>
            <span class="des">Our beach side is not only terrific for all types of water sports but we offer other
                exciting adventure sports as well. Take your family out for an exciting day at the beach.</span><br>
            <a href="#"><h5><i class="fa  fa-file-o">  WINDSURFING APPLICATION FORM</i></h5></a>
        </div>
        <div class="col-md-5 phai">
            <img width="400" height="200" src="images/6.jpg" alt="">
        </div>
    </div>
    <span class="line">......................................................................................................................................................................................................................................................</span>
    <div class="row ">
        <div class="col-md-5 trai2">
            <span class="title"><h5>WINDSURFING IN FUERTAVENTURA</h5></span><br>
            <span class="des">Our beach side is not only terrific for all types of water sports but we offer other
                exciting adventure sports as well. Take your family out for an exciting day at the beach.</span><br>
            <a href="#"><h5><i class="fa  fa-file-o">  WINDSURFING APPLICATION FORM</i></h5></a>
        </div>
        <div class="col-md-5 phai2">
            <img width="400" height="200" src="images/6.jpg" alt="">
        </div>
    </div>
</div>