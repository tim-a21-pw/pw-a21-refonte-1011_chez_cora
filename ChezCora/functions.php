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