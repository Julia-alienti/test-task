<?php
function remove_dashboard_meta() {
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );

    remove_meta_box( 'appscreo_news', 'dashboard', 'normal' );
}
function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}

if ( ! function_exists( 'setup' ) ) :
    function setup() {
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');
        if( !is_admin() ){
            add_action( 'wp_enqueue_scripts', 'xyz_remove_admin_bar_css', 21 );
            add_action( 'admin_enqueue_scripts', 'xyz_remove_admin_bar_css', 21 );
            function xyz_remove_admin_bar_css() {
                wp_dequeue_style( 'admin-bar' );
                wp_dequeue_style( 'admin-bar-min' );
            }
        }

        remove_action('wp_head','feed_links_extra', 3);
        remove_action('wp_head','feed_links', 2);
        remove_action('wp_head','rsd_link');
        remove_action('wp_head','wlwmanifest_link');
        remove_action('wp_head','wp_generator');

        remove_action('wp_head','start_post_rel_link',10);
        remove_action('wp_head','index_rel_link');
        remove_action('wp_head','adjacent_posts_rel_link_wp_head', 10 );
        remove_action('wp_head','wp_shortlink_wp_head', 10 );

        remove_action( 'wp_head', 'rest_output_link_wp_head');
        remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
        remove_action( 'template_redirect', 'rest_output_link_header', 11 );

        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');


        add_filter('the_generator', '__return_empty_string');
        remove_action( 'wp_head', 'wp_resource_hints', 2);
        remove_action( 'wp_head','locale_stylesheet');
        add_filter('show_admin_bar', '__return_false');



        add_action( 'admin_init', 'remove_dashboard_meta' );


        add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );
    }
endif;
add_action( 'after_setup_theme', 'setup' );