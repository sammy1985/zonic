<?php
/**
 * The template for displaying all single posts
 * 
 * @package zonic
 */

get_header();
?>

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

<?php
get_footer();
