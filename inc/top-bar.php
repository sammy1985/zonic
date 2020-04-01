<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="top-bar-wrapper">
			<div class="container top-bar">
			<div class="section group">
                <div class="col span_1_of_2 top-bar-left">
					<?php if(get_theme_mod('top_bar_left_content') == 'text'){ ?>
						<p class="top-bar-custom-text"><?php echo esc_html(get_theme_mod('top_bar_text')); ?></p>
					<?php }elseif(get_theme_mod('top_bar_left_content') == 'menu') { ?>
						<nav id="top-navigation" class="top-navigation">
							<?php
							wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'top-menu',
							) );
							?>
				        </nav><!-- #site-navigation -->
					<?php }elseif(get_theme_mod('top_bar_left_content') == 'social'){
						get_template_part('inc/social','media');
					} ?>
                    
                </div><!-- .span_1_of_2 -->
                <div class="col span_1_of_2 top-bar-right">
				<?php if(get_theme_mod('top_bar_right_content') == 'text'){ ?>
						<p class="top-bar-custom-text"><?php echo esc_html(get_theme_mod('top_bar_text')); ?></p>
					<?php }elseif(get_theme_mod('top_bar_right_content') == 'menu') { ?>
						<nav id="top-navigation" class="top-navigation">
							<?php
							wp_nav_menu( array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'top-menu',
							) );
							?>
				        </nav><!-- #site-navigation -->
					<?php }elseif(get_theme_mod('top_bar_right_content') == 'social'){
						get_template_part('inc/social','media');
					} ?>
                </div><!-- .span_1_of_2 -->
            </div><!-- .group -->
			</div><!-- .top-bar -->
</div><!-- .top-bar-wrapper -->