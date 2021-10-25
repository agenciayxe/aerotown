<?php 
function postTypeEvents () {
    $labels = array(
        'name'               => _x( 'Eventos', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Eventos', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Eventos', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Eventos', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Adicionar Novo', 'Eventos', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Adicionar Novo Eventos', 'your-plugin-textdomain' ),
        'new_item'           => __( 'Novo Eventos', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Editar Eventos', 'your-plugin-textdomain' ),
        'view_item'          => __( 'Visualizar Eventos', 'your-plugin-textdomain' ),
        'all_items'          => __( 'Todos', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Pesquisar Eventos', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Eventos Pai:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'Nenhum Eventos encontrado.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'Nenhum Eventos encontrado in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Descrição', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Eventos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'thumbnail'),
        'taxonomies'         => array('Eventos')
    );
    register_post_type('Eventos', $args);
    add_post_type_support( 'Eventos', 'wps_subtitle' );
}
add_action('init', 'postTypeEvents');

function eventsTax() {
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
        'Eventos',
        'Eventos',
        array(
            'labels' => $label,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'hierarchical' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'Eventos')
        )
    );
}
add_action('init',  'eventsTax');