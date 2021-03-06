<?php
/**
 * The template for displaying search results pages
 *
 * @package zonic
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
			<div class="col shm-left-col span_3_of_4">

		<?php if (have_posts()): ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
    /* translators: %s: search query. */
    printf(wp_kses_post(__('<span class="icon-search"></span> Search Results for: %s', 'zonic')) , '<span>' . get_search_query() . '</span>');
?>
				</h1>
			</header><!-- .page-header -->

			<?php
    /* Start the Loop */
    while (have_posts()):
        the_post();

        /**
         * Run the loop for the search to output the results.
         * If you want to overload this in a child theme then include a file
         * called content-search.php and that will be used instead.
         */
        get_template_part('template-parts/content', 'search');

    endwhile;

    the_posts_navigation();

else:

    get_template_part('template-parts/content', 'none');

endif;
?>
		</div><!-- .span_3_of_4 -->

<div class="col shm-right-col span_1_of_4">
	<?php get_sidebar(); ?>
</div><!-- .span_1_of_4 -->
</div><!-- .section -->
			</div><!-- .container -->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();

