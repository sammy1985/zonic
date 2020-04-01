<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package zonic
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
			<div class="col shm-left-col span_3_of_4">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'zonic' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'We are sorry. But the page you are looking for is not available. Perhaps you can try a new search.', 'zonic' ); ?></p>

					<a class="z-backto-home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back To Homepage', 'zonic' ) ?></a>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
			</div> <!-- .shm-left-col -->

			<div class="col shm-right-col span_1_of_4">
				<?php get_sidebar(); ?>
			</div><!-- .shm-right-col -->
			
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
