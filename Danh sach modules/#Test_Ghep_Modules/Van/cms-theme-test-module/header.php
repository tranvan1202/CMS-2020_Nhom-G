<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cms-theme-test-module
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php get_template_part('template-parts/01/01', 'content');?>
	<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/01/01', 'content' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

