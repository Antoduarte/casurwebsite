<?php



// agregar clases al menu


require_once dirname(__FILE__).'/Cmb2.php';
require_once dirname(__FILE__).'/inic/custom-cmb2.php';
require_once dirname(__FILE__).'/inic/queries.php';
require_once dirname(__FILE__).'/inic/posttypes.php';

/**
 * Registeramos Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function cas_setup(){
// imagen destacada
add_theme_support( 'post-thumbnails' );
// tamaño a la imagen
add_image_size( 'mediano', 510 , 340 , true );

// menu de navegacion
register_nav_menus(array(

'menu_principal' => esc_html__( 'Menu Principal', 'casur' ) 

)); 



}
add_action('after_setup_theme','cas_setup');



// agregar clases al menu

function cas_enlace_class($atts,$item,$args){
   if($args -> theme_location == 'menu_principal'){
    $atts['class'] = 'nav-link separador';
}
return $atts;
}
add_filter( 'nav_menu_link_attributes', 'cas_enlace_class', 10, 3);

function cas_scripts(){
wp_enqueue_style( 'bootstrap-css',get_stylesheet_directory_uri() . '/css/bootstrap.min.css', false, 'all' );
wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.3.1/css/all.css', false);
wp_enqueue_style( 'style', get_stylesheet_uri( ), false);

wp_enqueue_script( 'jquery');
wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true );
wp_enqueue_script( 'animar-js', get_stylesheet_directory_uri() . '/js/animar.js', array('bootstrap-js'), false, true );
wp_enqueue_script( 'fil-js', get_stylesheet_directory_uri() . '/js/fil.js', array('bootstrap-js'), false, true );
}


add_action( 'wp_enqueue_scripts', 'cas_scripts');

