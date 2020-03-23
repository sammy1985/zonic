<header id="masthead" class="site-header">
		<div class="container">
			<div class="section default-header-wrap">
				<div class="shm-logo-wrapper">
					<div class="site-branding">
                        <?php if( get_custom_logo() ){
							the_custom_logo();
                        } else { ?>
							  <a href="<?php echo esc_url(home_url()); ?>"><img class="zonic-logo" src="<?php echo esc_url(get_template_directory_uri().'/inc/img/logo-zonic.png'); ?>" ></a>
                        <?php } ?>
					</div><!-- .site-branding -->
				</div><!-- .span_1_of_3 -->

				<div class="shm-nav-btn shm-menu-wrapper">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="icon-menu1"></span></button>
							<?php
							wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							) );
							?>
					</nav><!-- #site-navigation -->
				</div><!-- .span_2_of_3 -->
			</div><!-- .section -->
			</div><!-- .container -->
	</header><!-- #masthead -->