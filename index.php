<?php
/**
 * The main template file
 * @package zonic
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
			<div class="section group">
				<div class="col shm-left-col span_3_of_4">
				<?php

if (is_home()):
    if (get_theme_mod('show_fe_section') == 'show'):
        get_template_part('template-parts/featured', 'post');
    endif;
endif;

if (have_posts()):

    if (is_home() && !is_front_page()):
?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					
				</header>
				
				<?php
    endif;

    /* Start the Loop */
    while (have_posts()):
        the_post();

        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		*/
		if (get_theme_mod('home_page_layout') === 'style1'){
			get_template_part('template-parts/content','style1');
		} else {
			get_template_part('template-parts/content', get_post_type());
		}

    endwhile;

    the_posts_navigation();

else:

    get_template_part('template-parts/content', 'none');

endif;
?>
				</div><!-- .span_3_of_4 -->

				<div class="col shm-left-col span_1_of_4">
					<?php get_sidebar(); ?>
				</div><!-- .span_1_of_4 -->
			</div><!-- .section -->
			
		
			</div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

