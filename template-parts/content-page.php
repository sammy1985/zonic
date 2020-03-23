<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package zonic
 */

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

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'zonic' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
