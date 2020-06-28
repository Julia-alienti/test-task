<?php
function create_post_type() {
    register_post_type( 'video',
        array(
            'labels' => array(
                'name' => __( 'Видео' ),
                'singular_name' => __( 'Видео' ),
                'add_new_item' => __('Добавить новое видео'),
                'edit_item' => __('Редактировать видео'),
                'new_item' => __('Новое видео'),
                'all_items' => __('Все видео'),
                'view_item' => __('Просмотр видео'),
                'search_items' => __('Поиск видео'),
                'not_found' => __('Нет видео'),
                'not_found_in_trash' => __('Видео не найдены'),
                'menu_name' => 'Все видео'
            ),
            'show_in_rest' => true,
            'public' => true,
            'menu_position' => 5,
            'rewrite' => array('slug' => 'video'),
            'has_archive' => true,
            'supports' => array('title', 'thumbnail', 'editor')
        )
    );
}
add_action( 'init', 'create_post_type' );
//add_action( 'init', 'create_products_tax' );
//function create_products_tax(){
//    register_taxonomy(
//        'catalog',
//        'product',
//        array(
//            'label' => __('Каталог'),
//            'rewrite' => array('slug' => 'catalog'),
//            'hierarchical' => true,
//            'show_admin_column'     => true,
//            'show_in_rest'          => true,
//        )
//    );
//}