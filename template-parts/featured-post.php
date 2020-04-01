<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="home-fe-section-wrapper" style="background-image: url(<?php 
if(esc_url(get_theme_mod('fe_section_background'))) {
        echo esc_url(get_theme_mod('fe_section_background'));
} else {
        echo esc_url(get_template_directory_uri() . '/inc/img/shm-fe-image.jpg');
}
?>">
    
        <h1><?php echo esc_html(get_theme_mod('fe_section_title', 'Zonic - The WordPress Theme')); ?></h1>
        <p><?php echo esc_html(get_theme_mod('fe_section_text', 'It is built for the speed. Well optimised and minimal theme for your next project. No frameworks or any kind of library used. Simple and powerfull. (Background photo by Brooke Cagle on Unsplash)')); ?></p>

<a class="fe-sec-button" href="<?php echo esc_url(get_theme_mod('fe_section_btn_url', '#')); ?>"><?php echo esc_html(get_theme_mod('fe_section_btn_text', 'Contact Now')); ?></a>

</div><!-- .section -->