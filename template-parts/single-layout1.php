<?php
		while ( have_posts() ) :
			the_post(); ?>

			<div class="shm-single-post-cover" style="background-image:url(<?php echo esc_url(get_the_post_thumbnail_url()); ?>);">
			<div class="container shm-post-meta-wrapper">
			<h1><?php the_title(); ?></h1>
			<p class="shm-post-meta"><?php zonic_posted_on(); zonic_posted_by(); ?></p>
			</div><!-- .container -->
			</div>
			<div class="container">

			<div class="section group">
                <div class="col shm-left-col span_3_of_4">
				
			<?php the_content();
			the_post_navigation();
			
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			endwhile; // End of the loop.
		?>
				</div><!-- .span_3_of_4 -->

				<div class="col shm-right-col span_1_of_4">
					<?php get_sidebar(); ?>
				</div><!-- .span_1_of_4 -->

			</div><!-- .section -->

		
			</div><!-- .container -->