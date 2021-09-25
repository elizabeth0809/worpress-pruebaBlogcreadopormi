<?php
/*
    Plugin Name: Noticias
    Plugin URI:
    Description: Añade Post Types al sitio Noticias
    Version: 1.0.0
    Author: Elizabeth
    Author URI:
    Text Domain: Noticias
*/
if(!defined('ABSPATH')) die(); /*Esto es seguridad por si alguien quiere ingresar extenamente */
// Registrar Custom Post Type
function noticias_post_type() {

	$labels = array(
		'name'                  => _x( 'noticias', 'Post Type General Name', 'proyect' ),
		'singular_name'         => _x( 'noticias', 'Post Type Singular Name', 'proyect' ),
		'menu_name'             => __( 'noticias', 'proyect' ),
		'name_admin_bar'        => __( 'noticias', 'proyect' ),
		'archives'              => __( 'Archivo', 'proyect' ),
		'attributes'            => __( 'Atributos', 'proyect' ),
		'parent_item_colon'     => __( 'noticias Padre', 'proyect' ),
		'all_items'             => __( 'Todas Las noticias', 'proyect' ),
		'add_new_item'          => __( 'Agregar noticias', 'proyect' ),
		'add_new'               => __( 'Agregar noticias', 'proyect' ),
		'new_item'              => __( 'Nueva noticias', 'proyect' ),
		'edit_item'             => __( 'Editar noticias', 'proyect' ),
		'update_item'           => __( 'Actualizar noticias', 'proyect' ),
		'view_item'             => __( 'Ver noticias', 'proyect' ),
		'view_items'            => __( 'Ver noticias', 'proyect' ),
		'search_items'          => __( 'Buscar noticias', 'proyect' ),
		'not_found'             => __( 'No Encontrado', 'proyect' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'proyect' ),
		'featured_image'        => __( 'Imagen Destacada', 'proyect' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'proyect' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'proyect' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'proyect' ),
		'insert_into_item'      => __( 'Insertar en noticias', 'proyect' ),
		'uploaded_to_this_item' => __( 'Agregado en noticias', 'proyect' ),
		'items_list'            => __( 'Lista de noticias', 'proyect' ),
		'items_list_navigation' => __( 'Navegación de noticias', 'proyect' ),
		'filter_items_list'     => __( 'Filtrar noticias', 'proyect' ),
	);
	$args = array(
		'label'                 => __( 'noticias', 'proyect' ),
		'description'           => __( 'noticias para el Sitio Web', 'proyect' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-admin-plugins',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'noticias', $args );

}
add_action( 'init', 'noticias_post_type', 0 );