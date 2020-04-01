<?php
/**
 * The template for displaying archive pages
 *
 * @package zonic
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'archive' ) ) {

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
                <div class="container">
                    <div class="section group">
                        <div class="col shm-left-col span_3_of_4">                     
                            <?php if ( have_posts() ) : ?>
                                <header class="page-header">
                                    <?php
        the_archive_title( '<h1 class="page-title"><span class="icon-folder"></span> ', '</h1>' );
        the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
                                </header>
                                <!-- .page-header -->
    
                                <?php
    /* Start the Loop */
    while ( have_posts() ) :
        the_post();
    
        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
         */
        if (get_theme_mod('archive_page_layout') === 'style1'){
            get_template_part('template-parts/content','style1');
        } else {
            get_template_part('template-parts/content', get_post_type());
        }
    
    endwhile;
    
    the_posts_navigation();
    
    else :
    
    get_template_part( 'template-parts/content', 'none' );
    
    endif;
    ?>
                        </div>
                        <!-- .span_2_of_3 -->
    
                        <div class="col shm-right-col span_1_of_4">
                            <?php get_sidebar(); ?>
                        </div>
                        <!-- .span_1_of_3 -->
    
                    </div>
                    <!-- .section -->
    
                </div>
                <!-- .container -->
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->

<?php }

get_footer();