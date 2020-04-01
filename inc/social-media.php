<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<ul id="shm-social-icons">
					
					<?php if(get_theme_mod( 'social_icon_fb') !== '') { ?>
						<li><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'social_icon_fb')); ?>"><span class="icon-facebook"></span></a></li>
					<?php } 
					if(get_theme_mod( 'social_icon_tw') !== '') { ?>
						<li><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'social_icon_tw' )); ?>"><span class="icon-twitter"></span></a></li>
					<?php }
					
					if(get_theme_mod( 'social_icon_li') !== '') { ?>
						<li><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'social_icon_li' )); ?>"><span class="icon-linkedin2"></span></a></li>
					<?php }

					if(get_theme_mod( 'social_icon_yt') !== '') { ?>
						<li><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'social_icon_yt2' )); ?>"><span class="icon-youtube"></span></a></li>
					<?php }

					if(get_theme_mod( 'social_icon_pi') !== '') { ?>
						<li><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'social_icon_pi' )); ?>"><span class="icon-pinterest"></span></a></li>
					<?php }

					if(get_theme_mod( 'social_icon_ins') !== '') { ?>
						<li><a target="_blank" href="<?php echo esc_url(get_theme_mod( 'social_icon_ins' )); ?>"><span class="icon-instagram"></span></a></li>
					<?php } ?>

</ul>