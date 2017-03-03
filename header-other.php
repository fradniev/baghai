<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Baghai Digital</title>
	<link rel="icon" href="<?php echo get_template_directory_uri() . '/images/favicon.png'; ?>" type="image/x-icon" />
	<nav class="navbar-fixed">
		<div class="nav-wrapper">
			<div class="container">
				<!--<div class="row row-info nav-down">
					<div class="col s2 valign-wrapper" style="margin-left: 90px; ">
						<img style="width: 8%; margin-right: 5px" src="<?php echo get_template_directory_uri() . '/images/logos partnes/mail.png'; ?>">
						hello@baghaidigital.com
					</div>
					<div class="col s2 valign-wrapper phone" style="left:-3%; position: relative;">
						<img style="width: 8%; margin-right: 5px" src="<?php echo get_template_directory_uri() . '/images/logos partnes/cel.png'; ?>">
						(+84) 138.775.2208
					</div>
				</div>-->
				<div class="row row-menu">
					<div class="col s7 logo-top">
							<a href=" <?php bloginfo('url'); ?> " class="brand-logo"><img id="logo" src="<?php echo get_template_directory_uri() . '/images/logoazul.png'; ?>" ></a>			
					</div>
					<div col="col s5" id="normal" style="display:none;">
						<?php 
							wp_nav_menu(array(
								'theme_location'=>'other',
								'menu_class'=>'right marg',
								
								));
						 ?>
					</div>
					<div col="col s7 valign-wrapper" id="small" style="display:none;">
						<?php 
							wp_nav_menu(array(
								'theme_location'=>'other-2',
								'menu_class'=>'right marg',
								'container_class'=>'menu-header'
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
