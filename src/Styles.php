<?php
namespace jorgelsaud\ZonaproCorpTheme;

class Styles
{

	public function __construct()
	{
		add_action( 'wp_enqueue_scripts', array($this,'enqueue' ));
		return true;
		$this->manifest_path= get_stylesheet_directory().'/compiled/build/rev-manifest.json' ;
	}
	public function enqueue()
	{
		wp_deregister_script( 'jquery' );
		wp_register_style('assetsCss',get_template_directory_uri().'/compiled/css/assets.css');
		wp_enqueue_style('assetsCss');
		wp_register_style('socicons','https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css',['assetsCss']);
		wp_enqueue_style('socicons');
		wp_register_script('jquery',get_template_directory_uri().'/compiled/js/assets.js');
		wp_localize_script( 'jquery', 'Zonapro', array( 
			'url' => admin_url( 'admin-ajax.php' ), 
			'nonce' => wp_create_nonce( 'myajax-post-comment-nonce' ),
			  ) );
		wp_enqueue_script('jquery');
		wp_register_script('mainJs',get_template_directory_uri().'/compiled/js/main.js',array('jquery'));
		wp_enqueue_script('mainJs');
		wp_register_style('mainCss',get_template_directory_uri().'/compiled/css/main.css',['assetsCss']);
		wp_enqueue_style('mainCss');
	}
}
