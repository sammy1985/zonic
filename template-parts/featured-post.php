<div class="home-fe-section-wrapper" style="background-image: url(<?php 
if(esc_url(get_theme_mod('fe_section_background'))) {
        echo esc_url(get_theme_mod('fe_section_background'));
} else {
        echo esc_url(get_template_directory_uri() . '/inc/img/shm-fe-image.jpg');
}
?>">
    
        <h1><?php echo esc_html(get_theme_mod('fe_section_title', 'The fastest WordPress blog theme')); ?></h1>
        <p><?php echo esc_html(get_theme_mod('fe_section_text', 'Vestibulum id ligula porta felis euismod semper. Curabitur blandit tempus porttitor.')); ?></p>

<a class="fe-sec-button" href="<?php echo esc_url(get_theme_mod('fe_section_btn_url', '#')); ?>"><?php echo esc_html(get_theme_mod('fe_section_btn_text', 'Contact Me')); ?></a>

</div><!-- .section -->