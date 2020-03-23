<header id="masthead" class="site-header-center">
		<div class="container">
			<div class="section group">
					<div class="site-branding">
					<?php if( get_custom_logo() ){
							the_custom_logo();
                        } else { ?>
							  <a href="<?php echo esc_url(home_url()); ?>"><img class="zonic-logo" src="<?php echo esc_url(get_template_directory_uri().'/inc/img/logo-zonic.png'); ?>" ></a>
                    <?php } ?>
					</div><!-- .site-branding -->

				<div class="shm-nav-btn">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="icon-menu1"></span></button>
							<?php
							wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							) );
							?>
					</nav><!-- #site-navigation -->
				</div><!-- .shm-nav-btn -->
			</div><!-- .section -->
			</div><!-- .container -->
	</header><!-- #masthead -->