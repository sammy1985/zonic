<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

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

    // Topbar colors

    $topbar_colors = array();

    $topbar_colors[] = array(
        'slug' => 'top_bar_background_color',
        'default' => '#4172e0',
        'label' => __('Top-bar background color', 'zonic')
	);
	
	$topbar_colors[] = array(
        'slug' => 'top_bar_text_color',
        'default' => '#ffffff',
        'label' => __('Top-bar text color', 'zonic')
    );

    foreach ($topbar_colors as $topbar_color)
    {
        // SETTINGS
        $wp_customize->add_setting($topbar_color['slug'], array(
            'default' => $topbar_color['default'],
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'smarthub_sanitize_color',
        ));
        // CONTROLS
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $topbar_color['slug'], array(
            'label' => $topbar_color['label'],
            'section' => 'shm_topbar_setting',
            'settings' => $topbar_color['slug'],
        )));
    }

    // Header color

    $header_colors = array();

    $header_colors[] = array(
        'slug' => 'header_background_color',
        'default' => '#ffffff',
        'label' => __('Header background color', 'zonic')
    );

    $header_colors[] = array(
        'slug' => 'sticky_header_background_color',
        'default' => '#ffffff',
        'label' => __('Sticky header background color', 'zonic')
    );

    $header_colors[] = array(
        'slug' => 'header_bottom_border_color',
        'default' => '#f7f7f7',
        'label' => __('Header bottom border color', 'zonic')
    );

    $header_colors[] = array(
        'slug' => 'header_link_color',
        'default' => '#333333',
        'label' => __('Header link color', 'zonic')
    );

    $header_colors[] = array(
        'slug' => 'header_link_hover_color',
        'default' => '#4172e0',
        'label' => __('Header link hover color', 'zonic')
    );

    $header_colors[] = array(
        'slug' => 'submenu_link_color',
        'default' => '#333333',
        'label' => __('Submenu link color', 'zonic')
    );

    $header_colors[] = array(
        'slug' => 'submenu_background_color',
        'default' => '#ffffff',
        'label' => __('Submenu background color', 'zonic')
    );

    $header_colors[] = array(
        'slug' => 'mobile_menu_background_color',
        'default' => '#f7f7f7',
        'label' => __('Mobile menu background color', 'zonic')
    );

    $header_colors[] = array(
        'slug' => 'mobile_submenu_background_color',
        'default' => '#ffffff',
        'label' => __('Mobile submenu background color', 'zonic')
    );

    $header_colors[] = array(
        'slug' => 'mobile_menu_link_color',
        'default' => '#333333',
        'label' => __('Mobile menu link color', 'zonic')
    );

    $header_colors[] = array(
        'slug' => 'mobile_hamburger_color',
        'default' => '#333333',
        'label' => __('Mobile hamburger icon color', 'zonic')
    );


    foreach ($header_colors as $header_color)
    {
        // SETTINGS
        $wp_customize->add_setting($header_color['slug'], array(
            'default' => $header_color['default'],
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'smarthub_sanitize_color',
        ));
        // CONTROLS
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $header_color['slug'], array(
            'label' => $header_color['label'],
            'section' => 'shm_header_styles',
            'settings' => $header_color['slug'],
        )));
    }

    // Widget color

    $widget_colors = array();

    $widget_colors[] = array(
        'slug' => 'shm_widget_background_color',
        'default' => '#f7f7f7',
        'label' => __('Widget background color', 'zonic')
    );

    $widget_colors[] = array(
        'slug' => 'shm_widget_text_color',
        'default' => '#333333',
        'label' => __('Widget text color', 'zonic')
    );

    $widget_colors[] = array(
        'slug' => 'shm_widget_link_color',
        'default' => '#4172e0',
        'label' => __('Widget link color', 'zonic')
    );

    $widget_colors[] = array(
        'slug' => 'shm_widget_link_hover_color',
        'default' => '#4172e0',
        'label' => __('Widget link hover color', 'zonic')
    );

    foreach ($widget_colors as $widget_color)
    {
        // SETTINGS
        $wp_customize->add_setting($widget_color['slug'], array(
            'default' => $widget_color['default'],
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'smarthub_sanitize_color',
        ));
        // CONTROLS
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $widget_color['slug'], array(
            'label' => $widget_color['label'],
            'section' => 'shm_sidebar',
            'settings' => $widget_color['slug'],
        )));
    }

    // Footer color

    $footer_colors = array();

    $footer_colors[] = array(
        'slug' => 'footer_background',
        'default' => '#333333',
        'label' => __('Footer background color', 'zonic')
    );

    $footer_colors[] = array(
        'slug' => 'footer_text_color',
        'default' => '#ffffff',
        'label' => __('Footer text color', 'zonic')
    );

    $footer_colors[] = array(
        'slug' => 'footer_link_color',
        'default' => '#4172e0',
        'label' => __('footer link color', 'zonic')
    );

    $footer_colors[] = array(
        'slug' => 'footer_link_hover_color',
        'default' => '#4172e0',
        'label' => __('Footer link hover color', 'zonic')
    );

    $footer_colors[] = array(
        'slug' => 'copyright_background',
        'default' => '#262626',
        'label' => __('Bottom bar background color', 'zonic')
    );

    $footer_colors[] = array(
        'slug' => 'copyright_text_color',
        'default' => '#ffffff',
        'label' => __('Bottom bar text color', 'zonic')
    );

    $footer_colors[] = array(
        'slug' => 'copyright_link_color',
        'default' => '#4172e0',
        'label' => __('Bottom bar link color', 'zonic')
    );

    $footer_colors[] = array(
        'slug' => 'copyright_link_hover_color',
        'default' => '#4172e0',
        'label' => __('Bottom bar link hover color', 'zonic')
    );

    $footer_colors[] = array(
        'slug' => 'footer_social_icon_color',
        'default' => '#4172e0',
        'label' => __('Bottom bar social icon color', 'zonic')
    );

    foreach ($footer_colors as $footer_color)
    {
        // SETTINGS
        $wp_customize->add_setting($footer_color['slug'], array(
            'default' => $footer_color['default'],
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'smarthub_sanitize_color',
        ));
        // CONTROLS
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $footer_color['slug'], array(
            'label' => $footer_color['label'],
            'section' => 'shm_footer',
            'settings' => $footer_color['slug'],
        )));
    }

    // GENERAL SETTINGS

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


    //add setting to your section
    $wp_customize->add_setting('tags_on_posts', array(
            'default' => 1,
            'sanitize_callback' => false,
        )
    );
      
    $wp_customize->add_control('tags_on_posts', array(
            'label' => esc_html__( 'Hide tags on posts', 'zonic' ),
            'section' => 'shm_general_setting',
            'type' => 'checkbox'
        )
    );

    $wp_customize->add_section('shm_general_setting', array(
        'title' => esc_html__('General settings', 'zonic') ,
        'priority' => 30,
        'description' => esc_html__('General Setting related to zonic', 'zonic') , //Descriptive tooltip
        
    ));


    // Single post settings

    $wp_customize->add_setting('single_post_design', array(
        'default' => 'default',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_single_post_design', array(
        'label' => esc_html__('Single post view','zonic'),
        'section' => 'shm_single_post',
        'settings' => 'single_post_design',
        'type' => 'select',
        'choices' => array(
            'default' => esc_html__('Default Style','zonic'),
            'featured' => esc_html__('Featured Image Cover','zonic'),
        ) ,
    ));

    $wp_customize->add_section('shm_single_post', array(
        'title' => esc_html__('Single post', 'zonic') ,
        'priority' => 55,
        'description' => esc_html__('Settings for the single post', 'zonic') , //Descriptive tooltip
        
    ));

   // Archive page settings

   $wp_customize->add_setting('archive_page_layout', array(
    'default' => 'default',
    'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_archive_page_layout', array(
    'label' => esc_html__('Archive page layout','zonic'),
    'section' => 'shm_archive_styles',
    'settings' => 'archive_page_layout',
    'type' => 'select',
    'choices' => array(
        'default' => esc_html__('Default Style','zonic'),
        'style1' => esc_html__('Style 1','zonic'),
        ) ,
    ));

    $wp_customize->add_section('shm_archive_styles', array(
        'title' => esc_html__('Archives', 'zonic') ,
        'priority' => 56,
        'capability' => 'edit_theme_options',
        'description' => esc_html__('Style your theme archive pages.', 'zonic') , 
    ));

    // Sidebar settings

    $wp_customize->add_section('shm_sidebar', array(
        'title' => esc_html__('Sidebar', 'zonic') ,
        'priority' => 60,
        'description' => esc_html__('Theme sidebar settings', 'zonic') , //Descriptive tooltip
        
    ));

    // Home page settings

    $wp_customize->add_setting('homepage_shortcode_area', array(
        'default' => '',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'shm_homepage_shortcode_area', array(
        'label' => esc_html__('Home page shortcode', 'zonic') ,
        'description' => esc_html__('You can use this area to include a shorcode. Something like a slider. This will dislay on the top of the home page','zonic'),
        'section' => 'shm_homepage_styles',
        'settings' => 'homepage_shortcode_area',
    )));

    $wp_customize->add_setting('home_page_sc_display', array(
        'default' => 'select',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_home_page_sc_display', array(
        'label' => esc_html__('Home page shortcode position','zonic'),
        'section' => 'shm_homepage_styles',
        'settings' => 'home_page_sc_display',
        'type' => 'select',
        'choices' => array(
            'select' => esc_html__('- Select -','zonic'),
            'default' => esc_html__('Default view','zonic'),
            'cover' => esc_html__('Cover','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('home_page_layout', array(
        'default' => 'default',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_home_page_layout', array(
        'label' => esc_html__('Home page post layout','zonic'),
        'section' => 'shm_homepage_styles',
        'settings' => 'home_page_layout',
        'type' => 'select',
        'choices' => array(
            'default' => esc_html__('Default Style','zonic'),
            'style1' => esc_html__('Style 1','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('home_page_post_content', array(
        'default' => 'excerpt',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_home_page_post_content', array(
        'label' => esc_html__('Home page post content', 'zonic') ,
        'description' => esc_html__('Only works in default home page layout style', 'zonic') ,
        'section' => 'shm_homepage_styles',
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
        'section' => 'shm_homepage_styles',
        'settings' => 'custom_excerpt_length',
    )));

    $wp_customize->add_setting('show_fe_section', array(
        'default' => 'hide',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('show_home_fe_image', array(
        'label' => esc_html__('Show feature section on home', 'zonic') ,
        'section' => 'shm_homepage_styles',
        'settings' => 'show_fe_section',
        'type' => 'radio',
        'choices' => array(
            'show' => esc_html__('Show','zonic'),
            'hide' => esc_html__('Hide','zonic'),
        ) ,
	));
	
	$wp_customize->add_setting('fe_section_height', array(
        'default' => '400px',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'shm_fe_section_height', array(
        'label' => esc_html__('Featured section height', 'zonic') ,
        'section' => 'shm_homepage_styles',
        'settings' => 'fe_section_height',
    )));

    $wp_customize->add_setting('fe_section_title', array(
        'default' => esc_html__('The fastest WordPress theme', 'zonic') ,
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'fe_title', array(
        'label' => esc_html__('Featured section title', 'zonic') ,
        'section' => 'shm_homepage_styles',
        'settings' => 'fe_section_title',
    )));

    $wp_customize->add_setting('fe_section_text', array(
        'default' => __('Zonic is not just another WordPress theme. It is built for the speed. Well optimised and minimal theme for your next project. No frameworks or any kind of library used. Simple and powerfull ', 'zonic') ,
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'fe_content', array(
		'label' => 'Featured section paragraph',
		'type' => 'textarea',
        'section' => 'shm_homepage_styles',
        'settings' => 'fe_section_text',
    )));

    $wp_customize->add_setting('fe_section_btn_text', array(
        'default' => 'Contact Me',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'fe_content_btn', array(
        'label' => esc_html__('Featured section button text', 'zonic') ,
        'section' => 'shm_homepage_styles',
        'settings' => 'fe_section_btn_text',
    )));

    $wp_customize->add_setting('fe_section_btn_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'fe_content_btn_url', array(
        'label' => esc_html__('Featured section button url', 'zonic') ,
        'section' => 'shm_homepage_styles',
        'settings' => 'fe_section_btn_url',
    )));

    $wp_customize->add_setting('fe_section_background', array(
        'default' => '',
        'sanitize_callback' => 'zonic_sanitize_file',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shm_fe_section_background', array(
        'label' => esc_html__('Featured section background image', 'zonic') ,
        'section' => 'shm_homepage_styles',
        'settings' => 'fe_section_background',
	)));
	
	$wp_customize->add_setting('fe_content_position', array(
        'default' => 'flex-end',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_fe_content_position', array(
        'label' => esc_html__('Featured section content position','zonic'),
        'section' => 'shm_homepage_styles',
        'settings' => 'fe_content_position',
        'type' => 'select',
        'choices' => array(
            'flex-start' => esc_html__('Top','zonic'),
			'center' => esc_html__('Center','zonic'),
			'flex-end' => esc_html__('Bottom','zonic'),
        ) ,
    ));

    $wp_customize->add_section('shm_homepage_styles', array(
        'title' => esc_html__('Home Page', 'zonic') ,
        'priority' => 50,
        'capability' => 'edit_theme_options',
        'description' => esc_html__('Customize the home page', 'zonic') , 
    ));

    // Top bar
    
    $wp_customize->add_setting('show_top_bar', array(
        'default' => 'hide',
        'sanitize_callback' => false,

    ));

    $wp_customize->add_control('shm_top_bar', array(
        'label' => esc_html__('Show the top bar','zonic'),
        'section' => 'shm_topbar_setting',
        'settings' => 'show_top_bar',
        'priority'  => 1,
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
        'default' => 'select',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_top_bar_left_content', array(
        'label' => esc_html__('What to show on the left?','zonic'),
        'section' => 'shm_topbar_setting',
        'settings' => 'top_bar_left_content',
        'type' => 'select',
        'choices' => array(
            'select' => esc_html__('- Select -','zonic'),
            'text' => esc_html__('Custom Text','zonic'),
            'menu' => esc_html__('Top-bar Menu','zonic'),
            'social' => esc_html__('Social Menu','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('top_bar_right_content', array(
        'default' => 'select',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('shm_top_bar_right_content', array(
        'label' => esc_html__('What to show on the right?','zonic'),
        'section' => 'shm_topbar_setting',
        'settings' => 'top_bar_right_content',
        'type' => 'select',
        'choices' => array(
            'select' => esc_html__('- Select -','zonic'),
            'text' => esc_html__('Custom Text','zonic'),
            'menu' => esc_html__('Top-bar Menu','zonic'),
            'social' => esc_html__('Social Menu','zonic'),
        ) ,
    ));

    $wp_customize->add_section('shm_topbar_setting', array(
        'title' => esc_html__('Top Bar', 'zonic') ,
        'priority' => 42,
        'description' => __('Add a top bar above the header', 'zonic') , //Descriptive tooltip
        
    ));

    // Custom logo settings

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

    // Header settings

    $wp_customize->add_setting('sticky_header', array(
        'default' => 'disable',
        'sanitize_callback' => false,

    ));

    $wp_customize->add_control('shm_sticky_header', array(
        'label' => esc_html__('Enable sticky header','zonic'),
        'section' => 'shm_header_styles',
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
        'section' => 'shm_header_styles',
        'settings' => 'site_header_style',
        'priority' => 2,
        'type' => 'select',
        'choices' => array(
            'default' => esc_html__('Default Header','zonic'),
            'center' => esc_html__('Center Header','zonic'),
        ) ,
    ));

    $wp_customize->add_setting('header_custom_padding', array(
        'default' => '10px',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'shm_header_custom_padding', array(
        'label' => esc_html__('Header custom padding','zonic'),
        'description' => esc_html__('You can change the top and bottom padding of the header here','zonic'),
        'section' => 'shm_header_styles',
        'settings' => 'header_custom_padding',
        'priority' => 3,
    )));

    $wp_customize->add_section('shm_header_styles', array(
        'title' => esc_html__('Header', 'zonic') ,
        'priority' => 45,
        'capability' => 'edit_theme_options',
        'description' => esc_html__('Style your theme header.', 'zonic') , 
    ));

    //Typography settings

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
    
    $wp_customize->add_section('custom_fonts', array(
        'title' => esc_html__('Typography', 'zonic') ,
        'priority' => 35,
        'capability' => 'edit_theme_options',
        'description' => esc_html__('Theme typography settings', 'zonic') , 
        
    ));

    // Social icons

    $wp_customize->add_setting('bottom_bar_social', array(
        'default' => 'hide',
        'transport' => 'refresh',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('bottom_bar_social', array(
        'label' => esc_html__('Bottom bar social icons','zonic'),
        'section' => 'shm_footer',
        'priority' => 3,
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
        'priority' => 35,
    ));

    // Footer widgets area

    $wp_customize->add_setting('footer_widget_display', array(
        'default' => 'show',
        'transport' => 'refresh',
        'sanitize_callback' => false,
    ));

    $wp_customize->add_control('footer_widget_display', array(
        'label' => esc_html__('Footer widget area','zonic'),
        'section' => 'shm_footer',
        'priority' => 1,
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
        'label' => esc_html__('Theme bottom bar','zonic'),
        'section' => 'shm_footer',
        'priority' => 2,
        'settings' => 'bottom_bar_display',
        'type' => 'radio',
        'choices' => array(
            'show' => esc_html__('Show','zonic'),
            'hide' => esc_html__('Hide','zonic'),
        ) ,
    ));

    // Footer copyright

    $wp_customize->add_setting('bottom_bar_copyright', array(
        'default' => 'Copyright - Zonic WordPress theme by <a target="_blank" href="https://smarthubmedia.com/">Sam M.</a>',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control(new WP_Customize_control($wp_customize, 'shm_bottom_bar_copyright', array(
        'label' => esc_html__('Bottom copyright text','zonic'),
        'section' => 'shm_footer',
        'priority' => 4,
        'settings' => 'bottom_bar_copyright',
    )));

    $wp_customize->add_section('shm_footer', array(
        'title' => esc_html__('Footer', 'zonic') ,
    ));

    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('header_image');
    $wp_customize->remove_control( 'display_header_text' );

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