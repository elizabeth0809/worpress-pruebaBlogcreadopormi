<?php
/*Consultas Reutilizables */
require get_template_directory(  ) . '/inc/queries.php';
/**Esto elimina el margen en la barra de navegacion */
add_filter('show_admin_bar', '__return_false');
//Scripts y styles
function gymfitness_setup(){
    //habilitar imagenes destacadas
    add_theme_support( 'post-thumbnails' );
    // titulos seo
    add_theme_support( 'title-tag' );
    //agregar imagenes de tamaño personalizado    
    add_image_size( 'cajas', 158,225,true );
    add_image_size( 'mediano', 350,350,true );
    add_image_size( 'md', 550,950,true );
    add_image_size( 'blog', 966,644,true );

}
add_action( 'after_setup_theme', 'gymfitness_setup' );
function proyect(){
    //hoja de estilos principal
    wp_enqueue_style('normalize', get_template_directory_uri(). '/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('slicknavCSS', get_template_directory_uri(  ). '/css/slicknav.min.css', array(), '1.0.0');
    if(is_page('por definir')):
    wp_enqueue_style('lightboxCSS', get_template_directory_uri(  ). '/css/lightbox.min.css', array(), '2.11.2');
   endif;
    
    //la hoja de estilos principales
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'),'1.0.0' );
    wp_enqueue_script( 'slicknavJS', get_template_directory_uri( ) . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
    if(is_page('galeria')):
    wp_enqueue_script( 'lightboxJS', get_template_directory_uri( ) . '/js/lightbox.min.js', array('jquery'), '2.11.2', true);
    endif;
    wp_enqueue_script( 'scripts', get_template_directory_uri( ) . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);

}
add_action( 'wp_enqueue_scripts', 'proyect' );

function proyect_menus(){
    register_nav_menus( array(
        'menu-principal' => __('Menu Principal', 'proyect')
    ) );
}
add_action('init', 'proyect_menus' );


    