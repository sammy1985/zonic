<?php
/**
 * Template part for displaying posts
 *
 * @package zonic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				zonic_posted_on();
				zonic_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php zonic_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		if( is_singular() ):
			the_content();
		else :
			if(get_theme_mod('home_page_post_content') === 'content'):
				the_content();
			else :
				the_excerpt(); ?>
				<a class="shm-readmore-btn" href="<?php echo esc_url(the_permalink()); ?>">Read More</a>
			<?php endif; ?>
		
		<?php endif;

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'zonic' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php zonic_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
