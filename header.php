<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package zonic
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

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

<?php 

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
	if (get_theme_mod('site_header_style') === 'default')
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
} 
}

?>

	<div id="content" class="site-content">
