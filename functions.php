<?php 
	function baghai_script_enqueue(){
		/* CSS */
		wp_enqueue_style("baghai-style", get_template_directory_uri()."/css/index.css", array(), '', 'all');
		wp_enqueue_style("baghai-font", get_template_directory_uri()."/css/font.css", array(), '', 'all');
		wp_enqueue_style("baghai-materializecss", get_template_directory_uri()."/css/materialize/css/materialize.css", array(), '', 'all');
		wp_enqueue_style("baghai-materializecssmin", get_template_directory_uri()."/css/materialize/css/materialize.min.css", array(), '', 'all');
		/* JS */
		wp_enqueue_script( "baghai-jqs", get_template_directory_uri().'/js/jquery-3.1.1.min.js', array(), '', false );
		wp_enqueue_script( "baghai-materializejs", get_template_directory_uri().'/css/materialize/js/materialize.js', array(), '', false );
		wp_enqueue_script( "baghai-materializejsmin", get_template_directory_uri().'/css/materialize/js/materialize.min.js', array(), '', false );
		wp_enqueue_script( "baghai-js", get_template_directory_uri().'/js/index.js', array(), '', true );
	}
	add_action("wp_enqueue_scripts", "baghai_script_enqueue");	

	function register_my_menu(){
		register_nav_menu( 'header-menu', __('Header Menu') );
	}
	add_action('init', 'register_my_menu');
?>