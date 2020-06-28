<?php
define("THEME_DIR", get_template_directory_uri());

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/walker.php';
require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/classes.php';

add_action( 'after_setup_theme', 'test_register_nav_menu' );
function test_register_nav_menu() {
    register_nav_menu( 'primary', 'Primary Menu' );
}

add_filter('navigation_markup_template', 'test_navigation_template', 10, 2 );
function test_navigation_template( $template, $class ){
    return '<div class="pagination">%3$s</div>';
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}


function test_scripts() {
    wp_enqueue_style( 'site-font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=cyrillic' );
    wp_enqueue_style( 'site-bootstrap', THEME_DIR .  '/css/bootstrap.min.css' );
    wp_enqueue_style( 'site-style', THEME_DIR .  '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'test_scripts' );

add_post_type_support( 'video', 'custom-fields' );

add_action('pre_get_posts', ['VideoOrderBy', 'orderby'], 1);