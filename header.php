<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package zonic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php get_template_part('inc/customize', 'styles'); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'zonic'); ?></a>
	
	<?php if (get_theme_mod('show_top_bar') === 'show')
{
    get_template_part('inc/top', 'bar');
} ?>

	<?php if (get_theme_mod('site_header_style') === 'default')
{
    get_template_part('layouts/default', 'header');
}
elseif (get_theme_mod('site_header_style') === 'center')
{
    get_template_part('layouts/center', 'header');
}
else
{
    get_template_part('layouts/default', 'header');
} ?>

	<div id="content" class="site-content">

	<?php if (get_theme_mod('show_breadcrumbs') == 'show') { ?>
		<div class="breadcrumbs-wrapper">
				<div class="shm-breadcrumbs container">
				<?php if (function_exists('the_breadcrumb')){
					the_breadcrumb();
				} ?>
				</div><!-- .shm-breadcrumbs -->
		</div><!-- .breadcrumbs-wrapper -->
	<?php } ?>
