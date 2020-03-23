<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package zonic
 */

?>

	</div><!-- #content -->
	<?php if( get_theme_mod( 'footer_widget_display', 'show' ) == 'show' ) : ?>
	<div id="footer-widget-area">
	<div class="container">
			<div class="section group">
				<div class="col span_1_of_4"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
				<div class="col span_1_of_4"><?php dynamic_sidebar( 'sidebar-3' ); ?></div>
				<div class="col span_1_of_4"><?php dynamic_sidebar( 'sidebar-4' ); ?></div>
				<div class="col span_1_of_4"><?php dynamic_sidebar( 'sidebar-5' ); ?></div>
			</div>
		</div>
	</div>
	<?php endif ?>
	
	<?php if( get_theme_mod( 'bottom_bar_display', 'show' ) == 'show' ) : ?>
		<footer id="colophon" class="site-footer">
			<div class="container">
				<div class="section group">
					<div class="col span_2_of_3 shm_footer_copyright">
					<div class="site-info">
				<?php echo wp_kses_post(get_theme_mod( 'bottom_bar_setting', 'Copyright - zonic Theme by <a target="_blank" href="https://smarthubmedia.com/">Sam M.</a>' )); ?>

				</div><!-- .site-info -->
					</div><!-- .span_1_of_2 -->
					<div class="col span_1_of_3">
					<?php if( get_theme_mod( 'bottom_bar_social') == 'show' ) :
						get_template_part('inc/social','media');
					endif ?>
					

					</div><!-- .span_1_of_2 -->
				</div><!-- .section -->
				
				
			</div><!-- .container -->
		</footer><!-- #colophon -->
	<?php endif ?>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
