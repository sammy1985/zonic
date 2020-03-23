<?php
/**
 * Template part for displaying posts style 1
 *
 * @package zonic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-style1'); ?>>
<div class="section group">
    <div class="col span_1_of_3">
        <a href="<?php echo esc_url(the_permalink()); ?>">
            <div class="style1-fe-image" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url()); ?>);">
                
                    <?php if ( 'post' === get_post_type() ) : ?>
                        <div class="entry-meta">
                            <?php
                            zonic_posted_on();
                            zonic_posted_by();
                            ?>
                        </div><!-- .entry-meta -->
                    <?php endif; ?>
                
            </div>
        </a>
    </div><!-- .section .group -->
    <div class="col span_2_of_3">
        <header class="entry-header">
            <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
        </header><!-- .entry-header -->

        <footer class="entry-footer">
            <?php zonic_entry_footer(); ?>
        </footer><!-- .entry-footer -->
        
        <div class="entry-content">
            <?php the_excerpt(); ?>
            <a class="shm-readmore-btn" href="<?php echo esc_url(the_permalink()); ?>">Read More</a>
        </div><!-- .entry-content -->

    </div><!-- .section .group -->

</div><!-- .section .group -->
	
</article><!-- #post-<?php the_ID(); ?> -->
