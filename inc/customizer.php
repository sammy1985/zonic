<?php
function zonic_customize_register($wp_customize)
{

    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh))
    {
        $wp_customize
            ->selective_refresh
            ->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'zonic_customize_partial_blogname',
        ));
        $wp_customize
            ->selective_refresh
            ->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'zonic_customize_partial_blogdescription',
        ));
    }

    $colors = array();

    $colors[] = array(
        'slug' => 'shm_accent_color',
        'default' => '#4172e0',
        'label' => __('Accent color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'top_bar_background_color',
        'default' => '#4172e0',
        'label' => __('Top-bar background color', 'zonic')
	);
	
	$colors[] = array(
        'slug' => 'top_bar_text_color',
        'default' => '#ffffff',
        'label' => __('Top-bar text color', 'zonic')
    );


    $colors[] = array(
        'slug' => 'header_background_color',
        'default' => '#ffffff',
        'label' => __('Header background color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'sticky_header_background_color',
        'default' => '#ffffff',
        'label' => __('Sticky header background color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'header_bottom_border_color',
        'default' => '#f7f7f7',
        'label' => __('Header bottom border color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'header_link_color',
        'default' => '#333333',
        'label' => __('Header link color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'header_link_hover_color',
        'default' => '#4172e0',
        'label' => __('Header link hover color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'submenu_link_color',
        'default' => '#333333',
        'label' => __('Submenu link color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'submenu_background_color',
        'default' => '#ffffff',
        'label' => __('Submenu background color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'mobile_menu_background_color',
        'default' => '#f7f7f7',
        'label' => __('Mobile menu background color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'mobile_submenu_background_color',
        'default' => '#ffffff',
        'label' => __('Mobile submenu background color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'mobile_menu_link_color',
        'default' => '#333333',
        'label' => __('Mobile menu link color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'mobile_hamburger_color',
        'default' => '#333333',
        'label' => __('Mobile hamburger icon color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'content_title_color',
        'default' => '#333333',
        'label' => __('Content title color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'content_text_color',
        'default' => '#333333',
        'label' => __('Body text color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'content_link_color',
        'default' => '#4172e0',
        'label' => __('Content link color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'button_background_color',
        'default' => '#ffffff',
        'label' => __('Button background color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'button_background_hover_color',
        'default' => '#4172e0',
        'label' => __('Button background hover color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'button_text_color',
        'default' => '#333333',
        'label' => __('Button text color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'button_text_hover_color',
        'default' => '#ffffff',
        'label' => __('Button Text Hover color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'button_border_color',
        'default' => '#cccccc',
        'label' => __('Button border color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'button_border_hover_color',
        'default' => '#4172e0',
        'label' => __('Button border hover color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'shm_widget_background_color',
        'default' => '#f7f7f7',
        'label' => __('Sidebar widget background color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'shm_widget_text_color',
        'default' => '#333333',
        'label' => __('Sidebar widget text color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'shm_widget_link_color',
        'default' => '#4172e0',
        'label' => __('Sidebar widget link color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'shm_widget_link_hover_color',
        'default' => '#4172e0',
        'label' => __('Sidebar widget link hover color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'footer_background',
        'default' => '#333333',
        'label' => __('Footer background color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'footer_text_color',
        'default' => '#ffffff',
        'label' => __('Footer text color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'footer_link_color',
        'default' => '#4172e0',
        'label' => __('footer link color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'footer_link_hover_color',
        'default' => '#4172e0',
        'label' => __('Footer link hover color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'copyright_background',
        'default' => '#262626',
        'label' => __('Bottom bar background color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'copyright_text_color',
        'default' => '#ffffff',
        'label' => __('Bottom bar text color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'copyright_link_color',
        'default' => '#4172e0',
        'label' => __('Bottom bar link color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'copyright_link_hover_color',
        'default' => '#4172e0',
        'label' => __('Bottom bar link hover color', 'zonic')
    );

    $colors[] = array(
        'slug' => 'footer_social_icon_color',
        'default' => '#4172e0',
        'label' => __('Bottom bar social icon color', 'zonic')
    );

    foreach ($colors as $color)
    {
        // SETTINGS
        $wp_customize->add_setting($color['slug'], array(
            'default' => $color['default'],
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'smarthub_sanitize_color',
        ));
        // CONTROLS
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $color['slug'], array(
            'label' => $color['label'],
            'section' => 'colors',
            'settings' => $color['slug']
        )));
    }

    // GENERAL

    $wp_customize->add_setting('website_width', array(
        'default' => '1140px',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'shm_website_width', array(
        'label' => esc_html__('Webiste width', 'zonic') ,
        'section' => 'shm_general_setting',
        'priority' => 1,
        'settings' => 'website_width',
    )));

    $wp_customize->add_setting('show_page_title', array(
        'default' => 'hide',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('show_page_title', array(
        'label' => esc_html__('Page Titles', 'zonic') ,
        'section' => 'shm_general_setting',
        'settings' => 'show_page_title',
        'type' => 'radio',
        'choices' => array(
            'show' => esc_html__('Show','zonic'),
            'hide' => esc_html__('Hide','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('show_breadcrumbs', array(
        'default' => 'hide',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('show_hide_breadcrumbs', array(
        'label' => esc_html__('Show Breadcrumbs', 'zonic') ,
        'description' => esc_html__('You can show/hide breadcrumbs.(This will not show breadcrumbs on the home page)', 'zonic') ,
        'section' => 'shm_general_setting',
        'settings' => 'show_breadcrumbs',
        'type' => 'radio',
        'choices' => array(
            'show' => esc_html__('Show','zonic'),
            'hide' => esc_html__('Hide','zonic'),
        ) ,
    ));
	
	$wp_customize->add_setting('home_page_layout', array(
        'default' => 'default',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_setting('home_page_post_content', array(
        'default' => 'excerpt',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_home_page_post_content', array(
        'label' => esc_html__('Home page post content', 'zonic') ,
        'description' => esc_html__('Only works in default home page layout style', 'zonic') ,
        'section' => 'shm_general_setting',
        'settings' => 'home_page_post_content',
        'type' => 'radio',
        'choices' => array(
            'excerpt' => esc_html__('Excerpt','zonic'),
            'content' => esc_html__('Full post','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('custom_excerpt_length', array(
        'default' => '45',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'shm_custom_excerpt_length', array(
        'label' => esc_html__('Post excerpt length', 'zonic') ,
        'section' => 'shm_general_setting',
        'settings' => 'custom_excerpt_length',
    )));

    $wp_customize->add_control('shm_home_page_layout', array(
        'label' => esc_html__('Home page layout','zonic'),
        'section' => 'shm_general_setting',
        'settings' => 'home_page_layout',
        'type' => 'select',
        'choices' => array(
            'default' => esc_html__('Default Style','zonic'),
            'style1' => esc_html__('Style 1','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('archive_page_layout', array(
        'default' => 'default',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_archive_page_layout', array(
        'label' => esc_html__('Archive page layout','zonic'),
        'section' => 'shm_general_setting',
        'settings' => 'archive_page_layout',
        'type' => 'select',
        'choices' => array(
            'default' => esc_html__('Default Style','zonic'),
            'style1' => esc_html__('Style 1','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('single_post_design', array(
        'default' => 'default',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_single_post_design', array(
        'label' => esc_html__('Single post view','zonic'),
        'section' => 'shm_general_setting',
        'settings' => 'single_post_design',
        'type' => 'select',
        'choices' => array(
            'default' => esc_html__('Default Style','zonic'),
            'featured' => esc_html__('Featured Image Cover','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('show_fe_section', array(
        'default' => 'hide',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('show_home_fe_image', array(
        'label' => esc_html__('Show feature section on home', 'zonic') ,
        'section' => 'shm_general_setting',
        'settings' => 'show_fe_section',
        'type' => 'radio',
        'choices' => array(
            'show' => esc_html__('Show','zonic'),
            'hide' => esc_html__('Hide','zonic'),
        ) ,
	));
	
	$wp_customize->add_setting('fe_section_height', array(
        'default' => '350px',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'shm_fe_section_height', array(
        'label' => esc_html__('Featured section height', 'zonic') ,
        'section' => 'shm_general_setting',
        'settings' => 'fe_section_height',
    )));

    $wp_customize->add_setting('fe_section_title', array(
        'default' => esc_html__('The fastest WordPress theme', 'zonic') ,
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'fe_title', array(
        'label' => esc_html__('Featured section title', 'zonic') ,
        'section' => 'shm_general_setting',
        'settings' => 'fe_section_title',
    )));

    $wp_customize->add_setting('fe_section_text', array(
        'default' => __('Zonic is not just another Wordpress theme. It is built for the speed. Well optimised and minimal theme for your next project. No frameworks or any kind of library used. Simple and powerfull ', 'zonic') ,
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'fe_content', array(
		'label' => 'Featured section paragraph',
		'type' => 'textarea',
        'section' => 'shm_general_setting',
        'settings' => 'fe_section_text',
    )));

    $wp_customize->add_setting('fe_section_btn_text', array(
        'default' => 'Contact Me',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'fe_content_btn', array(
        'label' => esc_html__('Featured section button text', 'zonic') ,
        'section' => 'shm_general_setting',
        'settings' => 'fe_section_btn_text',
    )));

    $wp_customize->add_setting('fe_section_btn_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'fe_content_btn_url', array(
        'label' => esc_html__('Featured section button url', 'zonic') ,
        'section' => 'shm_general_setting',
        'settings' => 'fe_section_btn_url',
    )));

    $wp_customize->add_setting('fe_section_background', array(
        'default' => '',
        'sanitize_callback' => 'zonic_sanitize_file',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shm_fe_section_background', array(
        'label' => esc_html__('Featured section background image', 'zonic') ,
        'section' => 'shm_general_setting',
        'settings' => 'fe_section_background',
	)));
	
	$wp_customize->add_setting('fe_content_position', array(
        'default' => 'flex-end',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_fe_content_position', array(
        'label' => esc_html__('Featured section content position','zonic'),
        'section' => 'shm_general_setting',
        'settings' => 'fe_content_position',
        'type' => 'select',
        'choices' => array(
            'flex-start' => esc_html__('Top','zonic'),
			'center' => esc_html__('Center','zonic'),
			'flex-end' => esc_html__('Bottom','zonic'),
        ) ,
    ));

    $wp_customize->add_section('shm_general_setting', array(
        'title' => esc_html__('General settings', 'zonic') ,
        'priority' => 21,
        'description' => esc_html__('General Setting related to zonic', 'zonic') , //Descriptive tooltip
        
    ));

    //Top bar
    

    $wp_customize->add_setting('show_top_bar', array(
        'default' => 'hide',
        'sanitize_callback' => false,

    ));

    $wp_customize->add_control('shm_top_bar', array(
        'label' => esc_html__('Show the top bar','zonic'),
        'section' => 'shm_topbar_setting',
        'settings' => 'show_top_bar',
        'type' => 'radio',
        'choices' => array(
            'show' => esc_html__('Show','zonic'),
            'hide' => esc_html__('Hide','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('top_bar_text', array(
        'default' => ' ',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'shm_top_bar_text', array(
        'label' => esc_html__('Add the top bar custom text here', 'zonic') ,
        'section' => 'shm_topbar_setting',
        'settings' => 'top_bar_text',
    )));

    $wp_customize->add_setting('top_bar_left_content', array(
        'default' => '',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_top_bar_left_content', array(
        'label' => esc_html__('What to show on the left?','zonic'),
        'section' => 'shm_topbar_setting',
        'settings' => 'top_bar_left_content',
        'type' => 'select',
        'choices' => array(
            'text' => esc_html__('Custom Text','zonic'),
            'menu' => esc_html__('Top-bar Menu','zonic'),
            'social' => esc_html__('Social Menu','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('top_bar_right_content', array(
        'default' => '',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_top_bar_right_content', array(
        'label' => esc_html__('What to show on the right?','zonic'),
        'section' => 'shm_topbar_setting',
        'settings' => 'top_bar_right_content',
        'type' => 'select',
        'choices' => array(
            'text' => esc_html__('Custom Text','zonic'),
            'menu' => esc_html__('Top-bar Menu','zonic'),
            'social' => esc_html__('Social Menu','zonic'),
        ) ,
    ));

    $wp_customize->add_section('shm_topbar_setting', array(
        'title' => esc_html__('Top Bar', 'zonic') ,
        'priority' => 22,
        'description' => __('Add a top bar above the header', 'zonic') , //Descriptive tooltip
        
    ));

    //Header - logo
    $wp_customize->add_setting('custom_logo_width', array(
        'default' => '200px',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'shm_custom_logo', array(
        'label' => esc_html__('Logo width','zonic'),
        'section' => 'title_tagline',
        'settings' => 'custom_logo_width',
    )));

    $wp_customize->add_setting('sticky_logo_width', array(
        'default' => '150px',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'shm_sticky_logo_width', array(
        'label' => esc_html__('Sticky logo width','zonic'),
        'section' => 'title_tagline',
        'settings' => 'sticky_logo_width',
    )));

    // Header style
    $wp_customize->add_setting('site_header_style', array(
        'default' => 'default',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_site_header_style', array(
        'label' => esc_html__('Select theme header style','zonic'),
        'section' => 'shm_general_setting',
        'settings' => 'site_header_style',
        'priority' => 3,
        'type' => 'select',
        'choices' => array(
            'default' => esc_html__('Default Header','zonic'),
            'center' => esc_html__('Center Header','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('sticky_header', array(
        'default' => 'disable',
        'sanitize_callback' => false,

    ));

    $wp_customize->add_control('shm_sticky_header', array(
        'label' => esc_html__('Enable sticky header','zonic'),
        'section' => 'shm_general_setting',
        'settings' => 'sticky_header',
        'priority' => 5,
        'type' => 'radio',
        'choices' => array(
            'disable' => esc_html__('Disable','zonic'),
            'enable' => esc_html__('Enable','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('site_header_style', array(
        'default' => 'default',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_site_header_style', array(
        'label' => esc_html__('Select theme header style','zonic'),
        'section' => 'shm_general_setting',
        'settings' => 'site_header_style',
        'priority' => 2,
        'type' => 'select',
        'choices' => array(
            'default' => esc_html__('Default Header','zonic'),
            'center' => esc_html__('Center Header','zonic'),
        ) ,
    ));

    // Body Fonts
    $wp_customize->add_setting('custom_body_font_family', array(
        'default' => 'default',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'custom_body_font', array(
        'label' => esc_html__('Select Body Font', 'zonic') ,
        'description' => esc_html__('Using this option you can change the body font style', 'zonic') ,
        'settings' => 'custom_body_font_family',
        'priority' => 20,
        'section' => 'custom_fonts',
        'type' => 'select',
        'choices' => array(
            'default' => esc_html__('Default','zonic'),
            'lato' => esc_html__('Lato','zonic'),
            'montserrat' => esc_html__('Montserrat','zonic'),
            'roboto' => esc_html__('Roboto','zonic'),
            'ubuntu' => esc_html__('Ubuntu','zonic'),
        )
    )));

    $wp_customize->add_setting('shm_body_font_size', array(
        'default' => '15px',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'shm_body_font_size', array(
        'label' => esc_html__('Body font size','zonic'),
        'section' => 'custom_fonts',
        'settings' => 'shm_body_font_size',
        'priority' => 21,
    )));

    // Title Font
    $wp_customize->add_setting('custom_title_font_family', array(
        'default' => 'default',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'custom_title_font', array(
        'label' => esc_html__('Select title Font', 'zonic') ,
        'description' => esc_html__('Using this option you can change the title font style', 'zonic') ,
        'settings' => 'custom_title_font_family',
        'priority' => 10,
        'section' => 'custom_fonts',
        'type' => 'select',
        'choices' => array(
            'default' => esc_html__('Default','zonic'),
            'lato' => esc_html__('Lato','zonic'),
            'montserrat' => esc_html__('Montserrat','zonic'),
            'roboto' => esc_html__('Roboto','zonic'),
            'ubuntu' => esc_html__('Ubuntu','zonic'),
        )
    )));

    $wp_customize->add_section('custom_fonts', array(
        'title' => esc_html__('Typography', 'zonic') ,
        'priority' => 20,
        'capability' => 'edit_theme_options',
        'description' => esc_html__('Allows you to customize settings for Theme.', 'zonic') , 
        
    ));

    // FOOTER
    $wp_customize->add_setting('footer_widget_display', array(
        'default' => 'show',
        'transport' => 'refresh',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('footer_widget_display', array(
        'label' => esc_html__('Footer Widgets','zonic'),
        'section' => 'shm_footer',
        'settings' => 'footer_widget_display',
        'type' => 'radio',
        'choices' => array(
            'show' => esc_html__('Show','zonic'),
            'hide' => esc_html__('Hide','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('bottom_bar_display', array(
        'default' => 'show',
        'transport' => 'refresh',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('bottom_bar_display', array(
        'label' => esc_html__('Bottom bar','zonic'),
        'section' => 'shm_footer',
        'settings' => 'bottom_bar_display',
        'type' => 'radio',
        'choices' => array(
            'show' => esc_html__('Show','zonic'),
            'hide' => esc_html__('Hide','zonic'),
        ) ,
    ));

    // Footer social icons
    $wp_customize->add_setting('bottom_bar_social', array(
        'default' => 'hide',
        'transport' => 'refresh',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('bottom_bar_social', array(
        'label' => esc_html__('Social icons','zonic'),
        'section' => 'shm_footer',
        'settings' => 'bottom_bar_social',
        'type' => 'radio',
        'choices' => array(
            'show' => esc_html__('Show','zonic'),
            'hide' => esc_html__('Hide','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('social_icon_size', array(
        'default' => '20px',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'shm_social_icon_size', array(
        'label' => esc_html__('Social media icon size','zonic'),
        'section' => 'social_media',
        'settings' => 'social_icon_size',
    )));

    $wp_customize->add_setting('social_icon_fb', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'social_icon_fb', array(
        'label' => esc_html__('Facebook','zonic'),
        'section' => 'social_media',
        'settings' => 'social_icon_fb',
    )));

    $wp_customize->add_setting('social_icon_tw', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'social_icon_tw', array(
        'label' => esc_html__('Twitter','zonic'),
        'section' => 'social_media',
        'settings' => 'social_icon_tw',
    )));

    $wp_customize->add_setting('social_icon_li', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'social_icon_li', array(
        'label' => esc_html__('LinkedIn','zonic'),
        'section' => 'social_media',
        'settings' => 'social_icon_li',
    )));

    $wp_customize->add_setting('social_icon_yt', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'social_icon_yt', array(
        'label' => esc_html__('Youtube','zonic'),
        'section' => 'social_media',
        'settings' => 'social_icon_yt',
    )));

    $wp_customize->add_setting('social_icon_pi', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'social_icon_pi', array(
        'label' => esc_html__('Pinterest','zonic'),
        'section' => 'social_media',
        'settings' => 'social_icon_pi',
    )));

    $wp_customize->add_setting('social_icon_ins', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'social_icon_ins', array(
        'label' => esc_html__('Instagram','zonic'),
        'section' => 'social_media',
        'settings' => 'social_icon_ins',
    )));

    $wp_customize->add_section('social_media', array(
        'title' => esc_html__('Social Media', 'zonic') ,
    ));

    // Footer
    $wp_customize->add_setting('bottom_bar_setting', array(
        'default' => 'Proudly powered by WordPress | Theme: zonic by Sampath M.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'bottom_bar_setting', array(
        'label' => esc_html__('Bottom copyright text','zonic'),
        'section' => 'shm_footer',
        'settings' => 'bottom_bar_setting',
    )));

    $wp_customize->add_section('shm_footer', array(
        'title' => esc_html__('Footer', 'zonic') ,
    ));

}

add_action('customize_register', 'zonic_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function zonic_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function zonic_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function zonic_customize_preview_js()
{
    wp_enqueue_script('zonic-customizer', get_template_directory_uri() . '/js/customizer.js', array(
        'customize-preview'
    ) , '20151215', true);
}
add_action('customize_preview_init', 'zonic_customize_preview_js');