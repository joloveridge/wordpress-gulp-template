<?php

// Enqueue CSS & JS

function add_theme_scripts() {
//    wp_enqueue_style( 'typekit', 'https://use.typekit.net/your-code-here.css' );
//    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap', false );
    wp_enqueue_style( 'main-styles', get_stylesheet_directory_uri() . '/assets/css/main.css', false, '1.0', 'all' );
    wp_deregister_script('jquery'); // remove original WordPress jQuery
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), null, false);
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'picturefill', 'https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.2/picturefill.min.js', array(), null, true );
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/assets/js/slick-min.js', array ( 'jquery' ), '1.8.0', true);
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main-min.js', array ( 'jquery' ), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Theme settings
add_theme_support( 'menus' );
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 1568, 9999 );
add_theme_support( 'title-tag' );


// Adds html5 support
add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);

// Register a sidebar
function theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'custom-theme' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

// Initiate Options page for ACF plugin
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

// Numbered Pagination
if ( !function_exists( 'custom_pagination' ) ) {

    function custom_pagination() {

        $prev_arrow = is_rtl() ? '→' : '←';
        $next_arrow = is_rtl() ? '←' : '→';

        global $wp_query;
        $total = $wp_query->max_num_pages;
        $big = 999999999; // need an unlikely integer
        if( $total > 1 )  {
            if( !$current_page = get_query_var('paged') )
                $current_page = 1;
            if( get_option('permalink_structure') ) {
                $format = 'page/%#%/';
            } else {
                $format = '&paged=%#%';
            }
            echo paginate_links(array(
                'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'		=> $format,
                'current'		=> max( 1, get_query_var('paged') ),
                'total' 		=> $total,
                'mid_size'		=> 3,
                'type' 			=> 'list',
                'prev_text'		=> $prev_arrow,
                'next_text'		=> $next_arrow,
            ) );
        }
    }

}

// Excerpt Limit
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}
function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
    } else {
        $content = implode(" ",$content);
    }
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

// Add category nicenames in body and post class
function so20621481_category_id_class($classes) {
    global $post;
    foreach((get_the_category($post->ID)) as $category)
        $classes[] = $category->category_nicename;
    return $classes;
}
add_filter('post_class', 'so20621481_category_id_class');


// Upload limits
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

?>
