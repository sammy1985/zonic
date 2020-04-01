<?php
/**
 * The template for displaying all single posts
 * 
 * @package zonic
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {
	if (get_theme_mod('show_breadcrumbs') == 'show') { ?>
		<div class="breadcrumbs-wrapper">
				<div class="shm-breadcrumbs container">
				<?php if (function_exists('the_breadcrumb')){
					the_breadcrumb();
				} ?>
				</div><!-- .shm-breadcrumbs -->
		</div><!-- .breadcrumbs-wrapper -->
<?php } ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

<?php 
if ( get_theme_mod('single_post_design') === 'featured' ) {
	get_template_part('template-parts/single','layout1');
} else {
	get_template_part('template-parts/single','layout2');
}
 
?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php }


get_footer();
