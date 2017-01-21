<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Baghai Digital</title>
	<nav class="navbar-fixed">
		<div class="nav-wrapper">
			<div class="container">
				<div class="row row-info">
					<div class="col offset-s1 s2">
						Info
					</div>
				</div>
				<div class="row row-menu">
					<div class="col offset-s1 s2">
							<a href=" <<?php bloginfo('url'); ?> " class="brand-logo"><img id="logo" src="<?php echo get_template_directory_uri() . '/images/logoazul.png'; ?>" ></a>			
					</div>
					<div col="col s6">
					<?php 
						wp_nav_menu(array(
							'theme_location'=>'header-menu',
							'menu_class'=>'right hide-on-med-and-down',
							));
					 ?>
					</div>
				</div>
			</div>
			
		</div>
	</nav>
	<?php wp_head(); ?>
</head>
<body>
