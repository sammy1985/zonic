<?php
 // Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

 <div class="zonic-home-cover">
            <?php 
                if (is_home()):
                    if (get_theme_mod('homepage_shortcode_area')):
                        echo do_shortcode(get_theme_mod('homepage_shortcode_area'));
                    endif;
                endif; 
            ?>
</div>