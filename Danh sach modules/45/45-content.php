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
                    Test
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="type-45">
                <div class="row">

                    <div id="stats-panel" class="stats-panel">

                        <div id="stats-title" class="stats-title" data-index="1">
                            <h4>SCORES BY PARTICIPANTS</h4>
                            <p>&nbsp;</p>
                        </div>

                        <div id="stats-numbers" class="stats-numbers" data-index="2">
                            <div class="row number-counters" data-speed="1000">
                                <div class="col-md-4 number-counter">
                                    <div class="number-counter__number  js-number" data-to="87">87</div>
                                    <div class="number-counter__title">New Swimmers</div>
                                </div>
                                <div class="col-md-4 number-counter">
                                    <div class="number-counter__number  js-number" data-to="3">3</div>
                                    <div class="number-counter__title">Number of Trips</div>
                                </div>
                                <div class="col-md-4 number-counter">
                                    <div class="number-counter__number  js-number" data-to="5">5</div>
                                    <div class="number-counter__title">Meals per Day</div>
                                </div>

                                <div class="col-md-4 number-counter">
                                    <div class="number-counter__number  js-number" data-to="7">7</div>
                                    <div class="number-counter__title">Difficulty</div>
                                    <div class="number-counter__bar">
                                        <div class="number-counter__bar--progress  js-nc-progress-bar" data-progress-bar-value="70" style="width: 70%;"></div>
                                    </div>
                                </div>
                                <div class="col-md-4 number-counter">
                                    <div class="number-counter__number  js-number" data-to="9">9</div>
                                    <div class="number-counter__title">Hospitality</div>
                                    <div class="number-counter__bar">
                                        <div class="number-counter__bar--progress  js-nc-progress-bar" data-progress-bar-value="90" style="width: 90%;"></div>
                                    </div>
                                </div>
                                <div class="col-md-4 number-counter">
                                    <div class="number-counter__number  js-number" data-to="10">10</div>
                                    <div class="number-counter__title">Accomodation</div>
                                    <div class="number-counter__bar">
                                        <div class="number-counter__bar--progress  js-nc-progress-bar" data-progress-bar-value="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>
</div>