<?php 
	function baghai_script_enqueue(){
		/* CSS */
		wp_enqueue_style("baghai-style", get_template_directory_uri()."/css/index.css", array(), rand(111,9999), 'all');
		wp_enqueue_style("baghai-font", get_template_directory_uri()."/css/font.css", array(), rand(111,9999), 'all');
		wp_enqueue_style("baghai-materializecss", get_template_directory_uri()."/css/materialize/css/materialize.css", array(), '', 'all');
		wp_enqueue_style("baghai-awesome", get_template_directory_uri()."/font-awesome/css/font-awesome.min.css", array(), '', 'all');
		wp_enqueue_style("baghai-materializecssmin", get_template_directory_uri()."/css/materialize/css/materialize.min.css", array(), '', 'all');
		/* JS */
		wp_enqueue_script( "baghai-jqs", get_template_directory_uri().'/js/jquery-3.1.1.min.js', array(), '', false );
		wp_enqueue_script( "baghai-materializejs", get_template_directory_uri().'/css/materialize/js/materialize.js', array(), '', false );
		wp_enqueue_script( "baghai-materializejsmin", get_template_directory_uri().'/css/materialize/js/materialize.min.js', array(), '', false );
		wp_enqueue_script( "baghai-js", get_template_directory_uri().'/js/index.js', array(), '', true );
	}
	add_action("wp_enqueue_scripts", "baghai_script_enqueue");	

	function register_my_menus(){
		register_nav_menus(
			array(
				'header-menu'=> __('Header Menu'),
				'small'=> __('Small'),

				));
	}
	add_action('init', 'register_my_menus');
	function send_email(){
		if(isset($_POST['name'] )){
			$email=$_POST['email'];
			$email_to="xerdrein@gmail.com";
			$name=$_POST['name'];
			$subject=$email.' - '.$name;
			$message=$_POST['message'];
			wp_mail($email_to,$subject, $message);
		}
	}
	add_action('init', 'send_email')
?>