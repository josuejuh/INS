<!DOCTYPE html>
<html lang="en">
<head>
<title>RanGO - Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="RanGO Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header d-flex flex-row justify-content-end align-items-center trans_200">
		
		<!-- Logo -->
		<div class="logo mr-auto">
				<img src="images/talleres.png" width="100" height="100"> 
			</div>

		<!-- Navigation -->
		<nav class="main_nav justify-self-end text-right">
				<ul>
				
					<div class="super_container">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="about.php">Quiénes somos</a></li>
					<li><a href="places.php">Instalaciones</a></li>			
					<li><a href="contributions.php">Donaciones</a></li>
					<li class="active"><a href="#">Contáctanos</a></li>
				</ul>
			

		<!-- Hamburger -->
		<div class="hamburger_container bez_1">
			<i class="fas fa-bars trans_200"></i>
		</div>
		
	</header>

	<!-- Menu -->

	<div class="menu_container">
		<div class="menu menu_mm text-right">
			<div class="menu_close"><i class="far fa-times-circle trans_200"></i></div>
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Inicio</a></li>
				<li class="menu_mm"><a href="about.php">Quiénes somos</a></li>
				<li class="menu_mm"><a href="places.php">Instalaciones</a></li>
				<li class="menu_mm"><a href="contributions.php">Donaciones</a></li>
				<li class="menu_mm active"><a href="#">Contáctanos</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/blog_background.jpg)"></div>
		</div>
		
		<div class="home_title">
			<h2>Contact</h2>
			<div class="next_section_scroll">
				<div class="next_section nav_links" data-scroll-to=".contact">
					<i class="fas fa-chevron-down trans_200"></i>
					<i class="fas fa-chevron-down trans_200"></i>
				</div>
			</div>
		</div>
	
	</div>

	<!-- Contact -->

	<div class="contact">
		
		<div class="container">
			
			<!-- Google Map Container -->

			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="row contact_row">
				<div class="col-lg-8">
					
					<!-- Reply -->

					<div class="reply">
						
						<div class="reply_title">Leave a reply</div>
						<div class="reply_form_container">
							
							<!-- Reply Form -->

							<form id="reply_form" action="post">
								<div>
									<input id="reply_form_name" class="input_field reply_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
									<input id="reply_form_email" class="input_field reply_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
									<input id="reply_form_subject" class="input_field reply_form_subject" type="text" placeholder="Subject" required="required" data-error="Subject is required.">
									<textarea id="reply_form_message" class="text_field reply_form_message" name="message"  placeholder="Message" rows="4" required data-error="Please, write us a message."></textarea>
								</div>
								<div>
									<button id="reply_form_submit" type="submit" class="reply_submit_btn trans_300" value="Submit">
										send reply
									</button>
								</div>

							</form>

						</div>
					</div>

				</div>

				<div class="col-lg-4">
					
					<!-- Contact Info -->

					<div class="contact_info">

						<div class="contact_title">Contact info</div>
						
						<div class="contact_info_container">

							<div class="logo contact_logo">
								<a href="#">Ran<span>go</span></a>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae enim enim. Sed nec dignissim purus.</p>

							<div class="address_container clearfix">
								<div class="contact_info_icon">i</div>
								<div class="contact_info_content">
									<ul>
										<li class="address">C/ Libertad, 34</li>
										<li class="city">05200 Arévalo</li>
										<li class="phone">0034 37483 2445 322</li>
										<li class="email">hello@company.com</li>
									</ul>									
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
			
		
	</div>

	<!-- Footer -->
	<footer class="footer">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-4">
	
						<!-- Footer Intro -->
						<div class="footer_intro">
	
							<!-- Logo -->
							<div class="logo footer_logo">
								<a href="#">Tadesa</span></a>
							</div>
	
							<p>Talleres deportivos TADESA por un mejor El Salvador.</p>
							
							<!-- Social -->
							<div class="footer_social">
								<ul>
									<li><a href="https://www.facebook.com/Talleres-Deportivos-Salvadore%C3%B1os-Tadesa-183098068375455/"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
							
							<!-- Copyright -->
							<div class="footer_cr">
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados</a>
							</div>
	
						</div>
	
					</div>
					
					<!-- Footer Menu -->
					<div class="col-lg-2">
					<div class="footer_col"></div>
					</div>
					<div class="col-lg-2">
					<div class="footer_col"></div>
					</div>
					<div class="col-lg-2">
					<div class="footer_col"></div>
					</div>
	
					<div class="col-lg-2">
	
						<div class="footer_col">
							<div class="footer_col_title">Menu</div>
							<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="about.php">Quiénes somos</a></li>
							<li><a href="places.php">Instalaciones</a></li>								
							<li><a href="contributions.php">Donaciones</a></li>
							<li  class="active"><a href="#">Contáctanos</a></li>
							</ul>
						</div>
		</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/CustomGoogleMapMarker.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>
</body>

</html>