<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-02">
	<div class="slider">
		<div class="container">
			<div class="header">
				<div class="left-widget-icons">
					<div class="social-icons">
						<a class="icon-link" href="#"><i class="fa fa-twitter"></i></a>
						<a class="icon-link" href="#"><i class="fa fa-facebook"></i></a>
						<a class="icon-link" href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
				<div class="right-widget-info">
					<div class="widget-info">
						<div class="cover-info">
							<i class="fa fa-envelope"></i>
							<h4 class="icon-box">info@surfing.com</h4>
						</div>
					</div>
					<div class="widget-info">
						<div class="cover-info">
							<i class="fa fa-headphones"></i></i>
							<h4 class="icon-box">031 567 653</h4>
						</div>
					</div>
					<div class="dropdown widget-info ">
						<div class="cover-info_lang">
							<a href="#" class="lang_sel_sel icl-en dropbtn" style="text-decoration: none;">
								<img class="iclflag" src="<?php bloginfo('stylesheet_directory'); ?>/images/en.png" alt="en" title="English" style="margin-bottom: 10px;">
								&nbsp;English
								<i class="fa fa-chevron-down"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="cover-slider">
			<div class="slider-item">
				<img src="http://<?php echo $url_path ?>/images/slider1.jpg" srcset="https://demo.proteusthemes.com/shaka/wp-content/uploads/sites/38/2016/06/slider1.jpg 1920w, https://demo.proteusthemes.com/shaka/wp-content/uploads/sites/38/2016/06/slider1-960x330.jpg 960w, https://demo.proteusthemes.com/shaka/wp-content/uploads/sites/38/2016/06/slider1-480x165.jpg 480w" alt="hinh1" >
			</div>
		</div>
		<div class="container">
			<div class="title">
				<div class="title_content">
					THE BEST WATERSPORTS WORDPRESS THEME
				</div>
				<div class="title_sub_content">
					We have made the most advanced, constumizable and user-friendly sporty theme in the world.
				</div>
				<p class="b4t">
					<a class="btn-primary b4t_b5t" href="#" target="_blank"> BUY NOW FOR $79</a>
					<a class="btn-light b4t_b5t" href="#" target="_self"> LEARN MORE</a>
				</p>
			</div>
		</div>
		<div class="button">
			<div class="button_right size_button">
				<i class="fa fa-chevron-right "></i>
			</div>
			<div class="button_left size_button">
				<i class="fa fa-chevron-left "></i>
			</div>
		</div>
	</div>
</div>