<?php
		while ( have_posts() ) :
			the_post(); ?>

			<div class="container">

			<div class="section group">
                <div class="col shm-left-col span_3_of_4">
                <?php zonic_post_thumbnail(); ?>
            <h1><?php the_title(); ?></h1>	
            <?php zonic_posted_on(); zonic_posted_by(); ?>
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