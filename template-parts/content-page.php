<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package zonic
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php zonic_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		if ( get_theme_mod('show_page_title') === 'show' ) { ?>
			<h1><?php the_title(); ?></h1>
		<?php }
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'zonic' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
