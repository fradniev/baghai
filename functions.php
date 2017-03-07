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
		wp_enqueue_script( "baghai-js", get_template_directory_uri().'/js/index.js', array(), '', false );
		wp_localize_script( 'baghai-js', 'MyAjax', array( 'url' => admin_url( 'admin-ajax.php' ) ) );
	}
	add_action("wp_enqueue_scripts", "baghai_script_enqueue");	
	add_action('wp_ajax_send_email', 'send_email');
	function register_my_menus(){
		register_nav_menus(
			array(
				'header-menu'=> __('Header Menu'),
				'small'=> __('Small'),
				'other'=>__('Other'),
				'other-2'=>__('Other-2'),
				));
	}
	add_action('init', 'register_my_menus');
	function custom_nav_class($classes, $item){
        $classes[] = "valign-wrapper";
        return $classes;
	}
	add_filter('nav_menu_css_class' , 'custom_nav_class' , 10 , 2);
	function send_email(){
	    if(isset($_POST['name'] )){
	        $email    = $_POST['email'];
	        $email_to = "sean@baghaidigital.net";
	        $name     = $_POST['name'];
	        $subject  = "Contact: {$name}";
	        $message  = $_POST['message'];

	        $headers = [
	            "From: Web Consult <{$email_to}>",
	            "Reply-To: {$email}"
	        ];
	        wp_mail($email_to,$subject, $message, $headers);
	        $_POST['name']=null;
	        $_POST['email']=null;
	        $_POST['message']=null;
	        echo "true";
	    }
	}
	add_action('init', 'send_email')
?>
