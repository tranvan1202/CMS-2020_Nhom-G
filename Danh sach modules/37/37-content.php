<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-37">
    <div class="login-form-custom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card__container">
                        <div class="card-header">Login</div>
                        <div class="card-body">
                            <form action="" method="">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" id="email_address" class="form-control" name="email-address" required autofocus placeholder="Username or email address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="password" id="password-field" class="form-control" name="password" placeholder="Password" required>
                                        <span toggle="#password-field" class="fa fa-eye field-icon toggle-password"></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-1">
                                        <div class="checkbox">
                                                <input type="checkbox" name="remember"> Remember me
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-login-custom">
                                        LOG IN
                                    </button>
                                    <div class="lostpass-link">
                                    <a href="#" class="btn btn-link">Lost your password?</a>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>