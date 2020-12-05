<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-72">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<p class="title-type72">Social Icon</p>
				<div class="social-icons">
					<i class="fa fa-twitter"></i>
					<i class="fa fa-facebook"></i>
					<i class="fa fa-youtube"></i>
					<i class="fa fa-google-plus"></i>
					<i class="fa fa-pinterest"></i>
					<i class="fa fa-tumblr"></i>
					<i class="fa fa-xing"></i>
					<i class="fa fa-vimeo"></i>
					<i class="fa fa-linkedin"></i>
					<i class="fa fa-facebook-square"></i>
					<i class="fa fa-twitter-square"></i>
					<i class="fa fa-youtube-square"></i>
					<i class="fa fa-google-plus-square"></i>
					<i class="fa fa-pinterest-square"></i>
					<i class="fa fa-tumblr-square"></i>
					<i class="fa fa-vimeo-square"></i>
					<i class="fa fa-linkedin-square"></i>
				</div>
			</div>
			<div class="col-md-4">
				<p class="title-type72">Skype</p>
				<div class="the-block">
					<div class="call-block">
						<div class="text-block">Call us on skype</div>
						<div class="icon-block"><i class="fa fa-skype"></i></div>
					</div>
					<div class="call-block">
						<div class="text-block">Call us on phone</div>
						<div class="icon-block"><i class="fa fa-phone"></i></i></div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<p class="title-type72">Facebook</p>
				<div class="flow-fb">
					<div class="hinh-face"></div>
				</div>
			</div>
		</div>
	</div>
</div>