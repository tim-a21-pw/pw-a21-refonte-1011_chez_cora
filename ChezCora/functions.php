<?php    
add_theme_support('post-thumbnails');     
set_post_thumbnail_size(800, 480);      

function new_excerpt_length($length) {
    return 10; // Nombre de mots limite
}
add_filter('excerpt_length', 'new_excerpt_length');


function creer_menu(){         
    register_nav_menu('menu_principal', 'Menu principal');     
}     
    add_action('init', 'creer_menu');
    register_nav_menus(array(         
    'menu_principal' => 'Menu principal',         
    'menu_secondaire' => 'Menu secondaire', 
    'menu_menu' => 'Menu menu',  
    'menu_fidelite' => 'Menu fidelite',  
    'menu_footer' => 'Menu footer',                    
 ));

 function tp1_menu() {

    $labels = array(
        'name'                  => _x( 'Menu', 'Post Type General Name', 'cora' ),
        'singular_name'         => _x( 'Menu', 'Post Type Singular Name', 'cora' ),
        'menu_name'             => __( 'Menu', 'cora' ),
        'name_admin_bar'        => __( 'Post Type', 'cora' ),
        'archives'              => __( 'Item Archives', 'cora' ),
        'attributes'            => __( 'Item Attributes', 'cora' ),
        'parent_item_colon'     => __( 'Parent Item:', 'cora' ),
        'all_items'             => __( 'Tous les Menu', 'cora' ),
        'add_new_item'          => __( 'Ajouter un item', 'cora' ),
        'add_new'               => __( 'Ajouter un item', 'cora' ),
        'new_item'              => __( 'Nouveau item', 'cora' ),
        'edit_item'             => __( 'Éditer le item', 'cora' ),
        'update_item'           => __( 'MAJ le item', 'cora' ),
        'view_item'             => __( 'View Item', 'cora' ),
        'view_items'            => __( 'View Items', 'cora' ),
        'search_items'          => __( 'Search Item', 'cora' ),
        'not_found'             => __( 'Not found', 'cora' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'cora' ),
        'featured_image'        => __( 'Featured Image', 'cora' ),
        'set_featured_image'    => __( 'Set featured image', 'cora' ),
        'remove_featured_image' => __( 'Remove featured image', 'cora' ),
        'use_featured_image'    => __( 'Use as featured image', 'cora' ),
        'insert_into_item'      => __( 'Insert into item', 'cora' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'cora' ),
        'items_list'            => __( 'Items list', 'cora' ),
        'items_list_navigation' => __( 'Items list navigation', 'cora' ),
        'filter_items_list'     => __( 'Filter items list', 'cora' ),
    );
    $args = array(
        'label'                 => __( 'Menu', 'cora' ),
        'description'           => __( 'Menu', 'cora' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-food',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'menu', $args );

}

add_action( 'init', 'tp1_menu', 0 );

if ( function_exists('acf_add_options_page') ) {
    // on ajoute une page d'option
    acf_add_options_page(array(
    'page_title' => 'Options générales de mon thème',
    'menu_title' => 'Options du thème',
    'menu_slug' => 'cw4-theme-options',
    'capability' => 'edit_posts',
    'redirect' => false
    ));
    // on ajoute une sous-page à la page précédente via le paramètre parent_slug
    acf_add_options_sub_page(array(
    'page_title' => 'Options du pied de page',
    'menu_title' => 'Pied de page',
    'parent_slug' => 'cw4-theme-options',
    ));
    }