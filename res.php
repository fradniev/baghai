<?php 
/*
Template Name: Baghai Residential
 */
 ?>
<?php get_header("other"); ?>
<div class="container" id="home">
	<div class="carousel-test">
		<div class="div-img-large gradient">
			
			<img  src="<?php echo get_template_directory_uri() . '/images/residential.jpg'; ?>">
		</div>
		<div class="row carousel-text center-align" style="top:50%;">
			<div class="car">
				<div class="col s8 make-home-div" >
					<h4 class="make-home" style=" background-color: darkblue; position: relative; background-size: 100px;">MAKE YOUR PROPERTY</h4>
				</div>
				<div class="col s12">
					<h1><b>AS SAFE AS POSSIBLE!</b></h1>
					<p class="text">We understand the importance of keeping your property safe, <br>
					whether it is your home or place of business</p>
					<div class="row">
						<div class="col offset-s6 s2">
							<div id="divider" class="divider-services center-align"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>		
	<!--<div class="carousel carousel-slider valign-wrapper">
		<a class="carousel-item gradient" href="#one!" >
			<img  src="<?php echo get_template_directory_uri() . '/images/carousel-inic.jpg'; ?>">
		</a>
		<a class="carousel-item gradient" href="#two!" ><img src="<?php echo get_template_directory_uri() . '/images/background.jpg'; ?>"></a>
		<a class="carousel-item gradient" href="#three!" ><img src="<?php echo get_template_directory_uri() . '/images/download (1).jpg'; ?>"></a>
		<a class="carousel-item gradient" href="#four!" ><img src="<?php echo get_template_directory_uri() . '/images/download (2).jpg'; ?>"></a>
		<div class="row carousel-text center-align" style="top:50%;">
			<div class="car">
				<div class="col s8" style="position: relative; left:50%">
					<h4 class="make-home" style="left:-50%; background-color: darkblue; position: relative; background-size: 100px;">MAKE YOUR HOME</h4>
				</div>
				<div class="col s12">
					<h1><b>AS SAFE AS POSSIBLE!</b></h1>
					<p class="text">We understand the importance of keeping your property safe, <br>
					whether it is your home or place of business</p>
					<div class="row">
						<div class="col offset-s6 s2">
							<div id="divider" class="divider-services center-align"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- RESIDENTIAL -->
	<div id="residential-div" class="row residential-text center-align valign-wrapper">
		<div class="col s12">
			<h2 class="res-title"><b>RESIDENTIAL</b></h2>
			<div class="row">
				<div class="col offset-s6 s2 div-residential">
					<div id="divider" class="divider-residential center-align"></div>
				</div>
			</div>
			<p class="text-res res-text-inic">Keeping your home safe is something that must be taken very seriously and we are here to help. We want our customers to get the best value for their dollar while still getting a top notch security system. Thats why we price our packages at a competitive rate yet we take no shortcuts in ensuring that the services that we offer are installed to perfection and feature the latest technology available. Check out the packages that we offer below and select the one that best suits your needs! 
			</p>
			<div class="row-promo">
				<div class="box-promo box-promo-1" >
					<div class="box-title promo-1">
						<h5>Basic Monitoring Plan</h5>
						<p></p>
						<div class="row div-1">
							<div class=" div-residential-2">
								<div id="divider" class="divider-residential-2 center-align"></div>
							</div>
						</div>
					</div>
					<h3>$25.00</h3>
					<p>per month</p>
					<a href="mailto:sean@baghaidigital.net?subject=Residential - Basic  Monitoring Plan Inquiry"><button class="button-residential waves-effect waves-light btn">Order</button></a>
				</div>
				<div class="box-promo box-promo-2">
					<div class="box-title promo-2">
						<h5>GSM Cellular Plan</h5>
						<p>including open/close reporting</p>
						<div class="row div-2">
							<div class="div-residential-2">
								<div id="divider" class="divider-residential-2 center-align"></div>
							</div>
						</div>
					</div>
					<h3>$40.00</h3>
					<p>per month</p>
					<a href="mailto:sean@baghaidigital.net?subject=Residential - GSM Cellular Plan"><button class="button-residential waves-effect waves-light btn">Order</button></a>
				</div>
				<div class="box-promo">
					<div class="box-title">
						<h5>GSM Cellular Plan</h5>
						<p>Including open/close reporting and Interactive Remote Apps, and technical support including on site labor</p>
						<div class="row">
							<div class=" div-residential-2">
								<div id="divider" class="divider-residential-2 center-align"></div>
							</div>
						</div>
					</div>
					<h3>$60.00</h3>
					<p>per month</p>
					<a href="mailto:sean@baghaidigital.net?subject=Residential - Advance GSM Cellular Plan"><button  class="button-residential waves-effect waves-light btn">Order</button></a>
				</div>
			</div>
			<p class="text-res small-final">
				If you would like a custom package do not hesitate to contact us! We will be happy to give you a quote! 
			</p>
		</div>
	</div>	
	<!-- END RESIDENTIAL -->
	<!-- CONTACT -->
	<div id="contact" class="row contact-text center-align valign-wrapper">
		<div class="col s12">
			<h2>CONTACT US</h2>
			<form id="form" class="form" method="post" action="">
				<div class="row">
					<div class="col offset-s6 s2 div-con">
						<div id="divider" class="divider-contact center-align"></div>
					</div>
				</div>
				<div class="box">
					<div class="row name-email-row">
						<div class="offset-s1 col s5 name-email name-box">
							<div class="input-field">
								<input placeholder="Name" id="name" name="name" type="text" class="border-input validate" required="" aria-required="true">
							</div>
						</div>
						<div class="col s5 name-email email-box">
							<div class="input-field">
								<input placeholder="Email" id="email" name="email" type="email" class="border-input validate" required="" aria-required="true">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col offset-s1 s10 message-box">
							<div class="input-field message-div">
								<textarea placeholder="Message" id="message" name="message" class="border-input materialize-textarea" required="" aria-required="true"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s1 offset-s6 contact-button">
							<button type="submit" name="submit" id="button-contact" class="waves-effect waves-light btn">Send</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>	
	<!-- END CONTACT -->
	<!-- END -->
	<div class="row end-text left-align pc-end">
		<div class="col s4 end-rows">
			<div class="row">
				<div class="col s12 left-end">
					<img id="white-logo" src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" >
				</div>
			</div>
			<!--<div class="row">
				<div class="col s12 left-end text-end">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porttitor justo et <br> dignissim euismod. Nulla molestie massa eget tellus commodo, eget volutpat sem pulvinar.</p>
				</div>
			</div>-->
			<div class="row">
				<div class="col s11 left-end">
					<div id="divider" class="divider-end center-align"></div>
				</div>
			</div>
		</div>
		<div class="col s4 left-align end-rows">
			<div class="row">
				<div class="col offset-s5 s6" >
					<h5 style="margin-top: 0 !important;"><b>MENU</b></h5>
				</div>
			</div>
			<div class="row left-align-align">
				<div class="offset-s5 col s7">
					<div class="row">
						<div class="col s6">
							<div class="row text-end">
								<div class="col s12 home-a homeend-a">
									Home
								</div>
								<div class="col s12 com-a comend-a">
									Commercial
								</div>
								<div class="col s12 res-a resend-a">
									Residential
								</div>
							</div>
						</div>
						<div class="col s6">
							<div class="row text-end">
								<div class="col s12 about-a aboutend-a">
									About
								</div>
								<div class="col s12 support-a supportend-a">
									Support
								</div>
								<div class="col s12 contact-a contactend-a">
									Contact us
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col s4 left-align end-rows">
			<div class="row">
				<div class="col s12 left-align" >
					<h5 class="contact-us"><b>CONTACT US</b></h5>
				</div>
			</div>
			<div class="row">
				<div class="col s12 text-end left-align">
					<div class="valign-wrapper">
						<a class="logos-link-ubic" target="_blank" href="https://www.google.com/maps/place/BAGHAI+DIGITAL+A+div.+of+Baghai+Security+%26+Electronic+Surveillance+Inc./@43.7581109,-79.4090893,17z/data=!4m12!1m6!3m5!1s0x882b34aa53592bbb:0xab8c0a2be0e37118!2sBAGHAI+DIGITAL+A+div.+of+Baghai+Security+%26+Electronic+Surveillance+Inc.!8m2!3d43.7581109!4d-79.4090893!3m4!1s0x882b34aa53592bbb:0xab8c0a2be0e37118!8m2!3d43.7581109!4d-79.4090893" >
						</a>
							<img class="img-cont" src="<?php echo get_template_directory_uri() . '/images/logos partnes/location.png'; ?>"> 
							<p class="text-cont"> 
								19 Avondale Ave, North York ON M2N 0A6<br>Toronto, Ontario. 
							</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12 text-end left-align">
					<div class="valign-wrapper">
						<a class="logos-link-ubic" href="tel:4164495992">
						</a>
						<img class="img-cont" src="<?php echo get_template_directory_uri() . '/images/logos partnes/cel.png'; ?>">
						<p class="text-cont">
							(416) 449-5992
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END -->
	<!-- mobile end -->
	<div class="row end-text left-align mobile-end" style="display: none">
		<div class="col s4 left-align end-rows">
			<div class="row">
				<div class="col s12 left-align" >
					<h5 class="contact-us"><b>CONTACT US</b></h5>
				</div>
			</div>
			<div class="row">
				<div class="col s12 text-end left-align">
					<div class="valign-wrapper">
						<a class="logos-link-ubic" target="_blank" href="https://www.google.com/maps/place/BAGHAI+DIGITAL+A+div.+of+Baghai+Security+%26+Electronic+Surveillance+Inc./@43.7581109,-79.4090893,17z/data=!4m12!1m6!3m5!1s0x882b34aa53592bbb:0xab8c0a2be0e37118!2sBAGHAI+DIGITAL+A+div.+of+Baghai+Security+%26+Electronic+Surveillance+Inc.!8m2!3d43.7581109!4d-79.4090893!3m4!1s0x882b34aa53592bbb:0xab8c0a2be0e37118!8m2!3d43.7581109!4d-79.4090893" >
						</a>
							<img class="img-cont" src="<?php echo get_template_directory_uri() . '/images/logos partnes/location.png'; ?>"> 
							<p class="text-cont"> 
								19 Avondale Ave, North York ON M2N 0A6<br>Toronto, Ontario. 
							</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12 text-end left-align">
					<div class="valign-wrapper">
						<a class="logos-link-ubic" href="tel:4164495992">
						</a>
							<img class="img-cont" src="<?php echo get_template_directory_uri() . '/images/logos partnes/cel.png'; ?>">
							<p class="text-cont">
								(416) 449-5992
							</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col s4 left-align end-rows">
			<div class="row">
				<div class="col s12" >
					<h5 class="contact-us" style="margin-top: 0 !important;"><b>MENU</b></h5>
				</div>
			</div>
			<div class="row left-align-align">
				<div class="col s12">
					<div class="row">
						<div class="col s6">
							<div class="row text-end text-menu-end">
								<div class="col s12 home-a homeend-a">
									Home
								</div>
								<div class="col s12 com-a comend-a">
									Commercial
								</div>
								<div class="col s12 res-a resend-a">
									Residential
								</div>
							</div>
						</div>
						<div class="col s6">
							<div class="row text-end text-menu-end">
								<div class="col s12 about-a aboutend-a">
									About
								</div>
								<div class="col s12 support-a supportend-a">
									Support
								</div>
								<div class="col s12 contact-a contactend-a">
									Contact us
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col s12 end-rows">
			<div class="row">
				<div class="col s12 left-end logo-div-end">
					<img id="white-logo" src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" >
				</div>
			</div>
			<!--<div class="row">
				<div class="col s12 left-end text-end">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porttitor justo et <br> dignissim euismod. Nulla molestie massa eget tellus commodo, eget volutpat sem pulvinar.</p>
				</div>
			</div>-->
		</div>

	</div>
	<!-- mobile end -->
<div id="modal1" class="modal">
    <div class="modal-content thx">
      <h4>Thank you for contacting us!</h4>
      <h4>We will get back to you shortly.</h4>
    </div>
    <div class="modal-footer">
      <a href="#!" class="thx-button modal-action modal-close waves-effect waves-green btn-flat">Continue</a>
    </div>
</div>
<?php get_footer(); ?>
