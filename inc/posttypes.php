<?php

// Register Custom Post Type
function edc_post_type_clases() {

	$labels = array(
		'name'                  => _x( 'Clases de cocina', 'Post Type General Name', 'escuelacocina' ),
		'singular_name'         => _x( 'Clase de cocina', 'Post Type Singular Name', 'escuelacocina' ),
		'menu_name'             => __( 'Clases de cocina', 'escuelacocina' ),
		'name_admin_bar'        => __( 'Clases', 'escuelacocina' ),
		'archives'              => __( 'Archivos', 'escuelacocina' ),
		'attributes'            => __( 'Atributos', 'escuelacocina' ),
		'parent_item_colon'     => __( 'Clase padre:', 'escuelacocina' ),
		'all_items'             => __( 'Toda las clases', 'escuelacocina' ),
		'add_new_item'          => __( 'Agregar nueva clase', 'escuelacocina' ),
		'add_new'               => __( 'Agregar clase', 'escuelacocina' ),
		'new_item'              => __( 'Nueva clase', 'escuelacocina' ),
		'edit_item'             => __( 'Editar clase', 'escuelacocina' ),
		'update_item'           => __( 'Actualizar clase', 'escuelacocina' ),
		'view_item'             => __( 'Ver clase', 'escuelacocina' ),
		'view_items'            => __( 'Ver clases', 'escuelacocina' ),
		'search_items'          => __( 'Buscar clase', 'escuelacocina' ),
		'not_found'             => __( 'No encontrado', 'escuelacocina' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'escuelacocina' ),
		'featured_image'        => __( 'Imagen destacada', 'escuelacocina' ),
		'set_featured_image'    => __( 'Guardar imagen destacada', 'escuelacocina' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'escuelacocina' ),
		'use_featured_image'    => __( 'Utilizar como imagen destacada', 'escuelacocina' ),
		'insert_into_item'      => __( 'Insertar en clase', 'escuelacocina' ),
		'uploaded_to_this_item' => __( 'Agregando en clase', 'escuelacocina' ),
		'items_list'            => __( 'Lista de clases', 'escuelacocina' ),
		'items_list_navigation' => __( 'Navegacion de clases', 'escuelacocina' ),
		'filter_items_list'     => __( 'Filtrar clases', 'escuelacocina' ),
	);
	$args = array(
		'label'                 => __( 'Clases de cocina', 'escuelacocina' ),
		'description'           => __( 'Clases de cocina para el sitio web', 'escuelacocina' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor','thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon' => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'clases_cocina', $args );

}
add_action( 'init', 'edc_post_type_clases', 0 );


function edc_chef_instructores() {

	$labels = array(
		'name'                  => _x( 'Chefs / Instructores', 'Post Type General Name', 'escuelacocina' ),
		'singular_name'         => _x( 'Chef / Instructor', 'Post Type Singular Name', 'escuelacocina' ),
		'menu_name'             => __( 'Chefs / Instructores', 'escuelacocina' ),
		'name_admin_bar'        => __( 'Chefs / Instructores', 'escuelacocina' ),
		'archives'              => __( 'Archivos', 'escuelacocina' ),
		'attributes'            => __( 'Atributos', 'escuelacocina' ),
		'parent_item_colon'     => __( 'Chef padre:', 'escuelacocina' ),
		'all_items'             => __( 'Toda los chef', 'escuelacocina' ),
		'add_new_item'          => __( 'Agregar nuevo chef', 'escuelacocina' ),
		'add_new'               => __( 'Agregar chef', 'escuelacocina' ),
		'new_item'              => __( 'Nuevo chef', 'escuelacocina' ),
		'edit_item'             => __( 'Editar chef', 'escuelacocina' ),
		'update_item'           => __( 'Actualizar chef', 'escuelacocina' ),
		'view_item'             => __( 'Ver chef', 'escuelacocina' ),
		'view_items'            => __( 'Ver clases', 'escuelacocina' ),
		'search_items'          => __( 'Buscar chef', 'escuelacocina' ),
		'not_found'             => __( 'No encontrado', 'escuelacocina' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'escuelacocina' ),
		'featured_image'        => __( 'Imagen destacada', 'escuelacocina' ),
		'set_featured_image'    => __( 'Guardar imagen destacada', 'escuelacocina' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'escuelacocina' ),
		'use_featured_image'    => __( 'Utilizar como imagen destacada', 'escuelacocina' ),
		'insert_into_item'      => __( 'Insertar  chef', 'escuelacocina' ),
		'uploaded_to_this_item' => __( 'Agregando  chef', 'escuelacocina' ),
		'items_list'            => __( 'Lista de chef', 'escuelacocina' ),
		'items_list_navigation' => __( 'Navegacion de chef', 'escuelacocina' ),
		'filter_items_list'     => __( 'Filtrar chef', 'escuelacocina' ),
	);
	$args = array(
		'label'                 => __( 'Chefs / Instructores', 'escuelacocina' ),
		'description'           => __( 'Chefs / Instructores para el sitio web', 'escuelacocina' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor','thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon' => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'chef_instructores', $args );

}
add_action( 'init', 'edc_chef_instructores', 0 );