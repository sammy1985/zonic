<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$top_bar_background_color = get_option('top_bar_background_color','#0075fe');
$top_bar_text_color = get_option('top_bar_text_color','#ffffff');

$header_custom_padding = get_theme_mod('header_custom_padding','10px');

$website_width = esc_html(get_theme_mod('website_width','1140px'));
$header_background_color = get_option('header_background_color','#ffffff');
$sticky_header_background_color = get_option('sticky_header_background_color','#ffffff');
$sticky_header = get_theme_mod('sticky_header');
$shm_accent_color = get_option('shm_accent_color','#0075fe');
$header_bottom_border_color = get_option('header_bottom_border_color','#f7f7f7');
$header_link_color = get_option('header_link_color','#4c6785');
$header_link_hover_color = get_option('header_link_hover_color','#0075fe');
$submenu_link_color = get_option('submenu_link_color','#4c6785');
$shm_logo_width = get_theme_mod('custom_logo_width','200px');
$sticky_logo_width = get_theme_mod('sticky_logo_width','150px');
$shm_body_font_size = get_theme_mod('shm_body_font_size','16px');

$submenu_background_color = get_option('submenu_background_color','#ffffff');
$mobile_menu_background_color = get_option('mobile_menu_background_color','#ffffff');
$mobile_submenu_background_color = get_option('mobile_submenu_background_color','#ffffff');
$mobile_hamburger_color = get_option('mobile_hamburger_color','#4c6785');
$mobile_menu_link_color = get_option('mobile_menu_link_color','#4c6785');

$fe_section_height = get_theme_mod('fe_section_height','400px');
$fe_content_position = get_theme_mod('fe_content_position','flex-end');

$content_text_color = get_option('content_text_color','#4c6785');
$content_link_color = get_option('content_link_color','#0075fe');
$content_title_color = get_option('content_title_color','#173557');

$button_background_color = get_option('button_background_color','#ffffff');
$button_background_hover_color = get_option('button_background_hover_color','#0075fe');
$button_text_color = get_option('button_text_color','#4c6785');
$button_text_hover_color = get_option('button_text_hover_color','#ffffff');
$button_border_color = get_option('button_border_color','#4c6785');
$button_border_hover_color = get_option('button_border_hover_color','#0075fe');

$shm_widget_background_color = get_option('shm_widget_background_color','#f7f7f7');
$shm_widget_text_color = get_option('shm_widget_text_color','#173557');
$shm_widget_link_color = get_option('shm_widget_link_color','#0075fe');
$shm_widget_link_hover_color = get_option('shm_widget_link_hover_color','#0075fe');

$footer_background = get_option('footer_background','#f7f7f7');
$footer_text_color = get_option('footer_text_color','#4c6785');
$footer_link_color = get_option('footer_link_color','#0075fe');
$footer_link_hover_color = get_option('footer_link_hover_color','#0075fe');

$copyright_background = get_option('copyright_background','#242f37');
$copyright_text_color = get_option('copyright_text_color','#ffffff');
$copyright_link_color = get_option('copyright_link_color','#0075fe');
$copyright_link_hover_color = get_option('copyright_link_hover_color','#0075fe');
$footer_social_icon_color = get_option('footer_social_icon_color','#0075fe');
$social_icon_size = get_theme_mod('social_icon_size','20px');

?>
<style>
    body, button, input, select, textarea, p { font-size:<?php echo esc_html(get_theme_mod('shm_body_font_size')); ?>; }
    .container, .elementor-container { width: <?php echo esc_html($website_width); ?>;}
    .top-bar-wrapper { background-color: <?php echo esc_html($top_bar_background_color); ?>;}
    .top-bar-wrapper, #top-menu li a, .top-bar-wrapper ul#shm-social-icons li a { color: <?php echo esc_html($top_bar_text_color); ?>;}
    .site-header, .site-header-center { padding: <?php echo esc_html($header_custom_padding);?> 0;}
    .site-header, .site-header-center { background-color: <?php echo esc_html($header_background_color); ?>; border-bottom: 1px solid<?php echo esc_html($header_bottom_border_color); ?>;}
    <?php
if ($sticky_header === 'enable')
{
    echo '.shm-sticky {
            position: fixed;
        }';
}
?>
    .shm-sticky { background-color: <?php echo esc_html($sticky_header_background_color); ?> !important;}
    .sub-menu { border-top: 2px solid <?php echo esc_html($shm_accent_color); ?>;}
    .sub-menu { background-color: <?php echo esc_html($submenu_background_color); ?>;}
    .sub-menu li a { color: <?php echo esc_html($submenu_link_color); ?> !important;}
    .sub-menu li:hover a { color: <?php echo esc_html($header_link_hover_color); ?>;}
    .main-navigation a { color: <?php echo esc_html($header_link_color); ?>;}
    .main-navigation a:hover, .main-navigation a:active, .main-navigation a:focus { color: <?php echo esc_html($header_link_hover_color); ?>;}
    img.custom-logo { width: <?php echo esc_html($shm_logo_width); ?>;}
    .shm-sticky img.custom-logo { width: <?php echo esc_html($sticky_logo_width); ?>;}
    .menu-toggle span::before { color: <?php echo esc_html($mobile_hamburger_color); ?>;}
    .toggled a { color: <?php echo esc_html($mobile_menu_link_color); ?> !important;}
    
    body { color:  <?php echo esc_html($content_text_color); ?>; }
    a { color:  <?php echo esc_html($content_link_color); ?>; }
    h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color: <?php echo esc_html($content_title_color); ?> !important;}

    .home-fe-section-wrapper { min-height: <?php echo esc_html($fe_section_height); ?>; }
    .home-fe-section-wrapper { justify-content: <?php echo esc_html($fe_content_position); ?>;}
    .fe-sec-button { color: <?php echo esc_html($shm_accent_color); ?>;}

    a.shm-readmore-btn, button { background-color: <?php echo esc_html($button_background_color); ?>; color: <?php echo esc_html($button_text_color); ?>; border-color: <?php echo esc_html($button_border_color); ?>;}
    a.shm-readmore-btn:hover, button:hover { background-color: <?php echo esc_html($button_background_hover_color); ?>; color: <?php echo esc_html($button_text_hover_color); ?>; border-color: <?php echo esc_html($button_border_hover_color); ?>;}

    .archive .page-title span.icon-folder, .search .page-title span.icon-search { color: <?php echo esc_html($shm_accent_color); ?>;}

    .widget-area .widget { background-color: <?php echo esc_html($shm_widget_background_color); ?>; color: <?php echo esc_html($shm_widget_text_color) ?>}
    .widget a { color: <?php echo esc_html($shm_widget_link_color); ?>;}
    .widget a:hover { color: <?php echo esc_html($shm_widget_link_hover_color); ?>;}

    #footer-widget-area { background-color: <?php echo esc_html($footer_background); ?>; color: <?php echo esc_html($footer_text_color); ?>;}
    #footer-widget-area a { color: <?php echo esc_html($footer_link_color); ?>;}
    #footer-widget-area a:hover { color: <?php echo esc_html($footer_link_hover_color); ?>;}

    footer.site-footer { background-color: <?php echo esc_html($copyright_background); ?>; color: <?php echo esc_html($copyright_text_color); ?>;}
    footer.site-footer a { color: <?php echo esc_html($copyright_link_color); ?>;}
    footer.site-footer a:hover { color: <?php echo esc_html($copyright_link_hover_color); ?>;}
    .site-footer ul#shm-social-icons a { color: <?php echo esc_html($footer_social_icon_color); ?>;}
    .site-footer #shm-social-icons span { font-size: <?php echo esc_html($social_icon_size); ?>;}

    @media only screen and (max-width: 480px) {
        #primary-menu { background-color: <?php echo esc_html($mobile_menu_background_color); ?>;}
        .sub-menu { background-color: <?php echo esc_html($mobile_submenu_background_color); ?>;}
    }
</style>
