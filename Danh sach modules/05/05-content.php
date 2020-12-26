<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/05.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/font-awesome.min.css">
</head>

<body>

    <div class="container">
        <div class="content-active">
            <h3>Our Trips</h3>
            <div class="link-active">
                <a href="#" class="active">ALL</a>
                <a href="#">SURFING</a>
                <a href="#">FAMILY TRIPS</a>
                <a href="#">WINSURFING</a>
                <a href="#">KITESURFING</a>
            </div>
        </div>
        <div class="slidesgr">
            <div class="slides">
                <div class="slide">
                    <div class="content">
                        <img src="./public/images/project8-352x198.jpg" alt="img1" class="img-fluid">
                        <div class="allTextContent">
                            <strong class="allContent">
                                <i class="dotted">SURFING VACATION</i>
                            </strong> <br>
                            <p></p>
                            <i class="fa fa-map-marker" aria-hidden="true"> Bải biển Đen, San Diego</i>
                            <i class="fa fa-info" aria-hidden="true"> Thiết bị được cung cấp</i>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="content">
                        <img src="./public/images/project9-352x198.jpg" alt="img1" class="img-fluid">
                        <div class="allTextContent">
                            <strong class="allContent"><i class="dotted">FAMILI WATER SPORTS</i></strong> <br>
                            <p></p>
                            <i class="fa fa-map-marker" aria-hidden="true"> Bải biển Đen, San Diego</i>
                            <i class="fa fa-info" aria-hidden="true"> Thiết bị được cung cấp</i>
                        </div>
                    </div>
                </div>
                
                <div class="slide">
                    <div class="content">
                        <img src="./public/images/project10-352x198.jpg" alt="img1" class="img-fluid">
                        <div class="allTextContent">
                            <strong class="allContent"><i class="dotted">YOUNG GUNS COURSES</i></strong> <br>
                            <p></p>
                            <i class="fa fa-map-marker" aria-hidden="true"> Bải biển Đen, San Diego</i>
                            <i class="fa fa-info" aria-hidden="true"> Thiết bị được cung cấp</i>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="content">
                        <img src="./public/images/project7-352x198.jpg" alt="img1" class="img-fluid">
                        <div class="allTextContent">
                            <strong class="allContent"><i class="dotted">WINSURFING FREESTYLE</i></strong> <br>
                            <p></p>
                            <i class="fa fa-map-marker" aria-hidden="true"> Bải biển Đen, San Diego</i>
                            <i class="fa fa-info" aria-hidden="true"> Thiết bị được cung cấp</i>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="content">
                        <img src="./public/images/project5-352x198.jpg" alt="img1" class="img-fluid">
                        <div class="allTextContent">
                            <strong class="allContent"><i class="dotted">SURFING FOR BEGINNERS</i></strong> <br>
                            <p></p>
                            <i class="fa fa-map-marker" aria-hidden="true"> Bải biển Đen, San Diego</i>
                            <i class="fa fa-info" aria-hidden="true"> Thiết bị được cung cấp</i>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="content">
                        <img src="./public/images/project3-352x198.jpg" alt="img1" class="img-fluid">
                        <div class="allTextContent">
                            <strong class="allContent"><i class="dotted">ADVANCED KITESURFING</i></strong> <br>
                            <p></p>
                            <i class="fa fa-map-marker" aria-hidden="true"> Bải biển Đen, San Diego</i>
                            <i class="fa fa-info" aria-hidden="true"> Thiết bị được cung cấp</i>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="content">
                        <img src="./public/images/project6-352x198.jpg" alt="img1" class="img-fluid">
                        <div class="allTextContent">
                            <strong class="allContent"><i class="dotted">PAROS ISLAND</i></strong> <br>
                            <p></p>
                            <i class="fa fa-map-marker" aria-hidden="true"> Bải biển Đen, San Diego</i>
                            <i class="fa fa-info" aria-hidden="true"> Thiết bị được cung cấp</i>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="content">
                        <img src="./public/images/project2-352x198.jpg" alt="img1" class="img-fluid">
                        <div class="allTextContent">
                            <strong class="allContent"><i class="dotted">TRIP TO SPAN</i></strong> <br>
                            <p></p>
                            <i class="fa fa-map-marker" aria-hidden="true"> Bải biển Đen, San Diego</i>
                            <i class="fa fa-info" aria-hidden="true"> Thiết bị được cung cấp</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a class="prev" onclick="changeslide(-1)"><i class="fa fa-arrow-left" aria-hidden="true"></i>
        </a>
        <a class="next" onclick="changeslide(1)"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
    <br>
    <script src="./public/js/bootstrap.min.js"></script>
    <script src="./public/js/bootstrap.js"></script>
    <script src="./public/js/jquery-2.1.4.min.js"></script>
    <script src="./index.js"></script>
</body>

</html>