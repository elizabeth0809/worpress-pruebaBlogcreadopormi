<?php
/*
    Plugin Name: Proyect
    Plugin URI:
    Description: Añade Post Types al sitio proyect
    Version: 1.0.0
    Author: Elizabeth
    Author URI:
    Text Domain: proyect
*/
if(!defined('ABSPATH')) die(); /*Esto es seguridad por si alguien quiere ingresar extenamente */
// Registrar Custom Post Type
function proyect_servicios_post_type() {

	$labels = array(
		'name'                  => _x( 'proyectos', 'Post Type General Name', 'proyect' ),
		'singular_name'         => _x( 'proyecto', 'Post Type Singular Name', 'proyect' ),
		'menu_name'             => __( 'proyectos', 'proyect' ),
		'name_admin_bar'        => __( 'proyecto', 'proyect' ),
		'archives'              => __( 'Archivo', 'proyect' ),
		'attributes'            => __( 'Atributos', 'proyect' ),
		'parent_item_colon'     => __( 'proyecto Padre', 'proyect' ),
		'all_items'             => __( 'Todas Las proyectos', 'proyect' ),
		'add_new_item'          => __( 'Agregar proyecto', 'proyect' ),
		'add_new'               => __( 'Agregar proyecto', 'proyect' ),
		'new_item'              => __( 'Nueva proyecto', 'proyect' ),
		'edit_item'             => __( 'Editar proyecto', 'proyect' ),
		'update_item'           => __( 'Actualizar proyecto', 'proyect' ),
		'view_item'             => __( 'Ver proyecto', 'proyect' ),
		'view_items'            => __( 'Ver proyectos', 'proyect' ),
		'search_items'          => __( 'Buscar proyecto', 'proyect' ),
		'not_found'             => __( 'No Encontrado', 'proyect' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'proyect' ),
		'featured_image'        => __( 'Imagen Destacada', 'proyect' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'proyect' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'proyect' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'proyect' ),
		'insert_into_item'      => __( 'Insertar en proyecto', 'proyect' ),
		'uploaded_to_this_item' => __( 'Agregado en proyecto', 'proyect' ),
		'items_list'            => __( 'Lista de proyectos', 'proyect' ),
		'items_list_navigation' => __( 'Navegación de proyectos', 'proyect' ),
		'filter_items_list'     => __( 'Filtrar proyectos', 'proyect' ),
	);
	$args = array(
		'label'                 => __( 'proyecto', 'proyect' ),
		'description'           => __( 'proyectos para el Sitio Web', 'proyect' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'proyect_servicios', $args );

}
add_action( 'init', 'proyect_servicios_post_type', 0 );