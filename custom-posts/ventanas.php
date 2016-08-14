<?php
new Ventanas();
class Ventanas{
	public $arguments;
	private $labels;

	public function __construct($labels=null, $arguments=null)
	{
		$labels=array(
		'name'                  => _x( 'Ventanas', 'Post Type General Name', 'ghp' ),
		'singular_name'         => _x( 'Ventana', 'Post Type Singular Name', 'ghp' ),
		'menu_name'             => __( 'Ventanas', 'ghp' ),
		'name_admin_bar'        => __( 'Ventanas', 'ghp' ),
		'archives'              => __( 'Archivo de Ventanas', 'ghp' ),
		'parent_item_colon'     => __( 'Ventana Superior', 'ghp' ),
		'all_items'             => __( 'Todas Las Ventanas', 'ghp' ),
		'add_new_item'          => __( 'Añadir Nuevo Ventana', 'ghp' ),
		'add_new'               => __( 'Nuevo Ventana', 'ghp' ),
		'new_item'              => __( 'Nuevo Ventana', 'ghp' ),
		'edit_item'             => __( 'Editar Ventana', 'ghp' ),
		'update_item'           => __( 'Actualizar Ventana', 'ghp' ),
		'view_item'             => __( 'Ver Ventana', 'ghp' ),
		'search_items'          => __( 'Buscar Ventana', 'ghp' ),
		'not_found'             => __( 'Ventana No Encontrado', 'ghp' ),
		'not_found_in_trash'    => __( 'Ventana No Encontrado en la Papelera', 'ghp' ),
		'featured_image'        => __( 'Imagen Predefinida', 'ghp' ),
		'set_featured_image'    => __( 'Definir Imagen', 'ghp' ),
		'remove_featured_image' => __( 'Borrar Imagen', 'ghp' ),
		'use_featured_image'    => __( 'Usar como imagen', 'ghp' ),
		'insert_into_item'      => __( 'Insertar en Ventana', 'ghp' ),
		'uploaded_to_this_item' => __( 'Subidos a este Ventana', 'ghp' ),
		'items_list'            => __( 'Lista de Ventanas', 'ghp' ),
		'items_list_navigation' => __( 'Lista de navegacion de Ventanas', 'ghp' ),
		'filter_items_list'     => __( 'Filtrar lista de Ventanas', 'ghp' ),


		);
		$arguments=array(
		'label'                 => __( 'Ventana', 'ghp' ),
		'description'           => __( 'Ventana', 'ghp' ),
		'labels'                => $labels,
		'supports'              => array( 'title','editor', 'revisions' ,'excerpt','thumbnail'),
		'taxonomies'            => array(  'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'menu_icon'				=>'dashicons-tablet',
		'capability_type'       => 'post',
		);
		$this->labels = $labels;
		$this->arguments = $arguments;
        add_action ('init', array(&$this, 'registerVentanas'));
	}
	public function registerVentanas(){
		register_post_type( 'ventanas', $this->arguments );
	}
}
