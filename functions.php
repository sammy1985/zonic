<?php
/**
 * zonic functions and definitions
 *
 * @package zonic
 */

if ( !function_exists('zonic_setup') ):

    function zonic_setup()
    {

        load_theme_textdomain('zonic', get_template_directory() . '/languages');

        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'zonic') ,
            'menu-2' => esc_html__('Top', 'zonic') ,
        ));

        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('custom-background', apply_filters('zonic_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));

        add_editor_style('css/editor-style.css');

        /**
        * Support for Gutenberg wide images
        */
        add_theme_support( 'align-wide' );

    }
endif;
add_action('after_setup_theme', 'zonic_setup');

function zonic_content_width()
{
    $GLOBALS['content_width'] = apply_filters('zonic_content_width', 640);
}
add_action('after_setup_theme', 'zonic_content_width', 0);

function zonic_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'zonic') ,
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'zonic') ,
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer Widgets 1', 'zonic') ,
        'id' => 'sidebar-2',
        'description' => esc_html__('Add Footer widgets here.', 'zonic') ,
        'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="footer-widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer Widgets 2', 'zonic') ,
        'id' => 'sidebar-3',
        'description' => esc_html__('Add Footer widgets here.', 'zonic') ,
        'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="footer-widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer Widgets 3', 'zonic') ,
        'id' => 'sidebar-4',
        'description' => esc_html__('Add Footer widgets here.', 'zonic') ,
        'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="footer-widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer Widgets 4', 'zonic') ,
        'id' => 'sidebar-5',
        'description' => esc_html__('Add Footer widgets here.', 'zonic') ,
        'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="footer-widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'zonic_widgets_init');

function zonic_scripts()
{
    wp_enqueue_style('zonic-style', get_stylesheet_uri());
    wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css');
    wp_enqueue_style('zonic-icons', get_template_directory_uri() . '/inc/icons/zonic-font-style.css');

    if (get_theme_mod('custom_body_font_family') == 'lato')
    {
        wp_enqueue_style('lato', 'https://fonts.googleapis.com/css?family=Lato&display=swap');
    }

    elseif (get_theme_mod('custom_body_font_family') == 'montserrat')
    {
        wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    }

    elseif (get_theme_mod('custom_body_font_family') == 'roboto')
    {
        wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css?family=Roboto&display=swap');
    }

    elseif (get_theme_mod('custom_body_font_family') == 'ubuntu')
    {
        wp_enqueue_style('ubuntu', 'https://fonts.googleapis.com/css?family=Ubuntu&display=swap');
    }

    elseif (get_theme_mod('custom_body_font_family') == 'default')
    {
        wp_enqueue_style('default', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap');
    }

    if (get_theme_mod('custom_title_font_family') == 'lato')
    {
        wp_enqueue_style('lato', 'https://fonts.googleapis.com/css?family=Lato&display=swap');
    }

    elseif (get_theme_mod('custom_title_font_family') == 'montserrat')
    {
        wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    }

    elseif (get_theme_mod('custom_title_font_family') == 'roboto')
    {
        wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css?family=Roboto&display=swap');
    }

    elseif (get_theme_mod('custom_title_font_family') == 'ubuntu')
    {
        wp_enqueue_style('ubuntu', 'https://fonts.googleapis.com/css?family=Ubuntu&display=swap');
    }

    elseif (get_theme_mod('custom_title_font_family') == 'default')
    {
        wp_enqueue_style('default', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap');
    }

    wp_enqueue_script('zonic-navigation', get_template_directory_uri() . '/js/navigation.js', array() , '20151215', true);

    wp_enqueue_script('zonic-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array() , '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments'))
    {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'zonic_scripts');

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

if (defined('JETPACK__VERSION'))
{
    require get_template_directory() . '/inc/jetpack.php';
}

if (class_exists('WooCommerce'))
{
    require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Excert leangth
 */
function shm_custom_excerpt_length($length)
{
    return get_theme_mod('custom_excerpt_length','45');
}
add_filter('excerpt_length', 'shm_custom_excerpt_length', 999);

/**
 * SVG support
 */
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


/**
 * Breadcrumbs
 */
function the_breadcrumb()
{
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '&raquo;'; // delimiter between crumbs
    $home = '<img src="' . get_template_directory_uri() . '/inc/icons/home_bc_link.svg">'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb
    global $post;
    $homeLink = home_url();
    if (is_home() || is_front_page())
    {
        if ($showOnHome == 1)
        {
            echo wp_kses_post('<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>');
        }
    }
    else
    {
        echo wp_kses_post('<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ');
        if (is_category())
        {
            $thisCat = get_category(get_query_var('cat') , false);
            if ($thisCat->parent != 0)
            {
                echo wp_kses_post(get_category_parents($thisCat->parent, true, ' ' . $delimiter . ' '));
            }
            echo wp_kses_post($before . 'Archive by category "' . single_cat_title('', false) . '"' . $after);
        }
        elseif (is_search())
        {
            echo wp_kses_post($before . 'Search results for "' . get_search_query() . '"' . $after);
        }
        elseif (is_day())
        {
            echo wp_kses_post('<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ');
            echo wp_kses_post('<a href="' . get_month_link(get_the_time('Y') , get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ');
            echo wp_kses_post($before . get_the_time('d') . $after);
        }
        elseif (is_month())
        {
            echo wp_kses_post('<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ');
            echo wp_kses_post($before . get_the_time('F') . $after);
        }
        elseif (is_year())
        {
            echo wp_kses_post($before . get_the_time('Y') . $after);
        }
        elseif (is_single() && !is_attachment())
        {
            if (get_post_type() != 'post')
            {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo wp_kses_post('<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type
                ->labels->singular_name . '</a>');
                if ($showCurrent == 1)
                {
                    echo wp_kses_post(' ' . $delimiter . ' ' . $before . get_the_title() . $after);
                }
            }
            else
            {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, true, ' ' . $delimiter . ' ');
                if ($showCurrent == 0)
                {
                    $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                }
                echo wp_kses_post($cats);
                if ($showCurrent == 1)
                {
                    echo wp_kses_post($before . get_the_title() . $after);
                }
            }
        }
        elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404())
        {
            $post_type = get_post_type_object(get_post_type());
            echo wp_kses_post($before . $post_type
            ->labels->singular_name . $after);
        }
        elseif (is_attachment())
        {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo wp_kses_post(get_category_parents($cat, true, ' ' . $delimiter . ' '));
            echo wp_kses_post('<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>');
            if ($showCurrent == 1)
            {
                echo wp_kses_post(' ' . $delimiter . ' ' . $before . get_the_title() . $after);
            }
        }
        elseif (is_page() && !$post->post_parent)
        {
            if ($showCurrent == 1)
            {
                echo wp_kses_post($before . get_the_title() . $after);
            }
        }
        elseif (is_page() && $post->post_parent)
        {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id)
            {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0;$i < count($breadcrumbs);$i++)
            {
                echo wp_kses_post($breadcrumbs[$i]);
                if ($i != count($breadcrumbs) - 1)
                {
                    echo wp_kses_post(' ' . $delimiter . ' ');
                }
            }
            if ($showCurrent == 1)
            {
                echo wp_kses_post(' ' . $delimiter . ' ' . $before . get_the_title() . $after);
            }
        }
        elseif (is_tag())
        {
            echo wp_kses_post($before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after);
        }
        elseif (is_author())
        {
            global $author;
            $userdata = get_userdata($author);
            echo wp_kses_post($before . 'Articles posted by ' . $userdata->display_name . $after);
        }
        elseif (is_404())
        {
            echo wp_kses_post($before . 'Error 404' . $after);
        }
        if (get_query_var('paged'))
        {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
            {
                echo esc_html(' (');
            }
            echo esc_html__('Page', 'zonic') . ' ' . esc_html(get_query_var('paged'));
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
            {
                echo esc_html(')');
            }
        }
        echo wp_kses_post('</div>');
    }
}

/**
 * Sanitizing
 */
function zonic_sanitize_file($file, $setting)
{

    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif' => 'image/gif',
        'png' => 'image/png'
    );

    $file_ext = wp_check_filetype($file, $mimes);

    return ($file_ext['ext'] ? $file : $setting->default);
}

function smarthub_sanitize_color($color)
{
    if (empty($color) || is_array($color))
    {
        return '';
    }

    if (false === strpos($color, 'rgba'))
    {
        return sanitize_hex_color($color);
    }

    $color = str_replace(' ', '', $color);
    sscanf($color, 'rgba(%d,%d,%d,%f)', $red, $green, $blue, $alpha);

    return 'rgba(' . $red . ',' . $green . ',' . $blue . ',' . $alpha . ')';
}

