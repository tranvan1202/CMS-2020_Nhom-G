<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-32">
    <div class="container">
        <div class="row">
            <div class="panel-gird">
                <div class="contact-field">
                    <h4 class="apply_contact">WRITE US A MESSAGE OR APPLY HERE</h4>
                </div>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="firstname" placeholder="FIRST NAME">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="inputPassword4" placeholder="LAST NAME">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">

                            <input type="email" class="form-control" id="inputEmail1" placeholder="EMAIL">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="inputsubject" placeholder="SUBJECT">
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="FormControlTextarea1" rows="8" placeholder="MESSENGER"></textarea>
                    </div>
                    <div class="panel-field-bottom">
                       
                        <button type="submit" class="btn btn-primary btn-send-messenger">SEND MESSENGER</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>