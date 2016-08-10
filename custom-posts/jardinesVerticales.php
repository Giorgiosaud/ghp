<?php
new jardinesVerticales();
class jardinesVerticales{
	public $arguments;
	private $labels;

	public function __construct($labels=null, $arguments=null)
	{
		$labels=array(
			'name'                  => _x( 'Jardines Verticales', 'Post Type General Name', 'ghp' ),
			'singular_name'         => _x( 'Jardin Vertical', 'Post Type Singular Name', 'ghp' ),
			'menu_name'             => __( 'Jardines Verticales', 'ghp' ),
			'name_admin_bar'        => __( 'Jardines Verticales', 'ghp' ),
			'archives'              => __( 'Archivo de Jardines Verticales', 'ghp' ),
			'parent_item_colon'     => __( 'Jardin Vertical Superior', 'ghp' ),
			'all_items'             => __( 'Todos los Jardines Verticales', 'ghp' ),
			'add_new_item'          => __( 'Añadir Nuevo Jardin Vertical', 'ghp' ),
			'add_new'               => __( 'Nuevo Jardin Vertical', 'ghp' ),
			'new_item'              => __( 'Nuevo Jardin Vertical', 'ghp' ),
			'edit_item'             => __( 'Editar Jardin Vertical', 'ghp' ),
			'update_item'           => __( 'Actualizar Jardin Vertical', 'ghp' ),
			'view_item'             => __( 'Ver Jardin Vertical', 'ghp' ),
			'search_items'          => __( 'Buscar Jardin Vertical', 'ghp' ),
			'not_found'             => __( 'Jardin Vertical No Encontrado', 'ghp' ),
			'not_found_in_trash'    => __( 'Jardin Vertical No Encontrado en la Papelera', 'ghp' ),
			'featured_image'        => __( 'Foto Principal Jardin', 'ghp' ),
			'set_featured_image'    => __( 'Definir Imagen de Jardin', 'ghp' ),
			'remove_featured_image' => __( 'Borrar Imagen de Jardin', 'ghp' ),
			'use_featured_image'    => __( 'Usar Como Imagen Principal', 'ghp' ),
			'insert_into_item'      => __( 'Insertar en Jardin Vertical', 'ghp' ),
			'uploaded_to_this_item' => __( 'Subidos a este Jardin Vertical', 'ghp' ),
			'items_list'            => __( 'Lista de Jardines Verticales', 'ghp' ),
			'items_list_navigation' => __( 'Lista de navegacion de Jardines Verticales', 'ghp' ),
			'filter_items_list'     => __( 'Filtrar lista de Jardines Verticales', 'ghp' ),


		);
		$arguments=array(
			'label'                 => __( 'Jardines Verticales', 'ghp' ),
			'description'           => __( 'Jardines Verticales', 'ghp' ),
			'labels'                => $labels,
			'supports'              => array( 'title','editor', 'revisions' ),
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
			'menu_icon'				=>'dashicons-palmtree',
			'capability_type'       => 'post',
		);
		$this->labels = $labels;
		$this->arguments = $arguments;
		add_action ('init', array(&$this, 'registerJardinesVerticales'));
	}
	public function registerJardinesVerticales(){
		register_post_type( 'jardinesVerticales', $this->arguments );
	}
}
