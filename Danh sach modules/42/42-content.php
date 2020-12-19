<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-42">
    <div class="container">
        <div class="row">
            <!-- <nav class="filter-header" id="myBtnContainer"> 

                <ul class="filter-holder">
                    <li class="filterDiv"><a href="#" class="filter-click filter1 is-active" onclick="filterSelection('all')">All</a></li>
                    <li class="filterDiv"><a href="#" class="filter-click filter2" onclick="filterSelection('surfing')">SURFING</a></li>
                    <li class="filterDiv"><a href="#" class="filter-click filter3" onclick="filterSelection('family')">FAMILY TRIPS</a></li>
                    <li class="filterDiv"><a href="#" class="filter-click filter4" onclick="filterSelection('wind')">WINDSURFING</a></li>
                    <li class="filterDiv"><a href="#" class="filter-click filter5" onclick="filterSelection('kite')">KITESURFING</a></li>
                </ul>
            </nav> -->

            <div id="myBtnContainer" class="filter-header">
                <button class="btn active" onclick="filterSelection('all')"> All</button>
                <button class="btn" onclick="filterSelection('surfing')"> SURFING</button>
                <button class="btn" onclick="filterSelection('family')"> FAMILY TRIPS</button>
                <button class="btn" onclick="filterSelection('wind')"> WINDSURFING</button>
                <button class="btn" onclick="filterSelection('kite')"> KITESURFING</button>
            </div>
        </div>

        <div class="row">

            <a class="custom-card col-md-3 surfing" href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="./images/42-item1" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-price"> $650</p>
                        <h5 class="card-title">
                            Trip to Spain 1
                        </h5>
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
                    </div>
                </div>
            </a>


            <a class="custom-card col-md-3 wind" href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="./images/42-item1" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-price"> $650</p>
                        <h5 class="card-title">
                            Trip to Spain 2
                        </h5>
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
                    </div>
                </div>
            </a>

            <a class="custom-card col-md-3 family" href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="./images/42-item1" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-price"> $650</p>
                        <h5 class="card-title">
                            Trip to Spain 3
                        </h5>
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

                    </div>
                </div>
            </a>

            <a class="custom-card col-md-3 kite" href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="./images/42-item1" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-price"> $650</p>
                        <h5 class="card-title">
                            Trip to Spain 4
                        </h5>
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
                    </div>
                </div>
            </a>

            <a class="custom-card col-md-3 kite" href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="./images/42-item1" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-price"> $650</p>
                        <h5 class="card-title">
                            Trip to Spain 5
                        </h5>
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

                    </div>
                </div>
            </a>

            <a class="custom-card col-md-3 surfing" href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="./images/42-item1" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-price"> $650</p>
                        <h5 class="card-title">
                            Trip to Spain 6
                        </h5>
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

                    </div>
                </div>
            </a>

            <a class="custom-card col-md-3 wind" href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="./images/42-item1" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-price"> $650</p>
                        <h5 class="card-title">
                            Trip to Spain 7
                        </h5>
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

                    </div>
                </div>
            </a>

            <a class="custom-card col-md-3 surfing" href="#">
                <div class="card">
                    <img class="card-img-top img-fluid" src="./images/42-item1" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-price"> $650</p>
                        <h5 class="card-title">
                            Trip to Spain 8
                        </h5>
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

                    </div>
                </div>
            </a>

        </div>
    </div>
</div>

<script>
    filterSelection("all")

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("custom-card");
        if (c == "all") c = "";
        // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    // Show filtered elements
    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    // Hide elements that are not selected
    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add active class to the current control button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>