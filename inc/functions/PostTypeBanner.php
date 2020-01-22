<?php 
function postTypeSlide () {
    $labels = array(
        'name'               => _x( 'Slide', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Slide', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Slide', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Slide', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Adicionar Novo', 'Slide', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Adicionar Novo Slide', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Novo Slide', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editar Slide', 'your-plugin-textdomain' ),
        'view_item'          => __( 'Visualizar Slide', 'your-plugin-textdomain' ),
        'all_items'          => __( 'Todos', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Pesquisar Slide', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Slide Pai:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Nenhum Slide encontrado.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Nenhum Slide encontrado in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Descrição', 'your-plugin-textdomain' ),
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slide' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
    );
    register_post_type('slide', $args);
    add_post_type_support( 'slide', 'wps_subtitle' );
}
add_action('init', 'postTypeSlide');

function slideTax() {
    $label = array(
        'name' => 'Categorias',
        'singular_name' => 'Categoria',
        'menu_name' => 'Categoria',
        'all_items' => 'Todas as Categorias',
        'edit_item' => 'Editar Categoria',
        'view_item' => 'Visualizar',
        'update_item' => 'Atualizar',
        'add_new_item' => 'Adicionar Nova',
        'new_item_name' => 'Novo Item',
        'parent_item' => 'Categoria Pai',
        'parent_item_colon' => '',
        'search_items' => '',
        'popular_items' => '',
        'separate_items_with_commas' => '',
        'add_or_remove_items' => '',
        'choose_from_most_used' => '',
        'not_found' => ''
    );
    register_taxonomy(
        'slide',
        'slide',
        array(
            'labels' => $label,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'hierarchical' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'slide')
        )
    );
}
add_action('init',  'slideTax');