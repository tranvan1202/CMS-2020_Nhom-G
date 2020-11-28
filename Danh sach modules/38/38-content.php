<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-38">
    <div class="login-form-custom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card__container">
                        <div class="card-header">Lost your password?Please enter your username or emmail address. You will receive a link to create  a new password via email.</div>
                        <div class="card-body">
                            <form action="" method="">
                                <div class="form-group row">
                                    <div class="col-md-12">
                            
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Username or email</label>
                          
                                    </div>
                                    <div class="col-md-12">
                                   
                                        <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
                                    </div>
                                </div>

                                

                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-login-custom">
                                        RESET PASSWORD
                                    </button>
                                   
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>