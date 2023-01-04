<?php

session_start();

if (isset($_POST["lang"])) {
	$lang = $_POST["lang"];
	if (!empty($lang)) {
		$_SESSION["lang"] = $lang;
	}
}

if (isset($_SESSION['lang'])) {

	$lang = $_SESSION["lang"];
	require "lang/" . $lang . ".php";
} else {
	require "lang/es.php";
}
?>


<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<meta property="og:locale" content="es_ES" />
	<meta property="og:url" content="https://www.jcptoursperu.html" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="JCP Perú Tours | Servicio de transporte, tours y guía turística en Lima - Perú." />
	<meta property="og:description" content=" Somos un operador turístico, proveemos servicios de transporte y guía a particulares, agencias de turismo y hoteles." />
	<meta property="og:site_name" content="JCP Perú Tours | Servicios turísticos" />
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="GYA SERVICES SAC">
	<!-- Meta Description -->
	<meta name="description" content="Somos un operador turístico, proveemos servicios de transporte y guiado turístico a particulares, agencias de turismo y hoteles.">
	<!-- Meta Keyword -->
	<meta name="keywords" content="turismo, travel, gastronomía, tours, full day Lima, tour Lima, Lima turismo, Lima tours  ">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->

	<meta property="article:publisher" content="https://www.facebook.com/JCP-PER%C3%9A-TOURS-348723299046407" />
	<meta property="og:image" content="https://www.jcptoursperu.com/img/jcpperutours.jpg" />
	<meta property="og:image:width" content="980px" />
	<meta property="og:image:height" content="516px" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<title><?php echo $lang["menu-contacto"]; ?>- <?php echo $lang["name-jcp"]; ?></title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/icon.ico">


</head>

<body>
	<header id="header">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 col-sm-6 col-6 header-top-left">
						<div class="header-social">
							<form action="" method="POST">

								<button value="es" name="lang" type="submit" class="genric-btn primary-border small"><?php echo $lang["opcion_2"]; ?></button>
								<button value="en" name="lang" type="submit" class="genric-btn primary-border small"><?php echo $lang["opcion_3"]; ?></button>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li><a href="https://www.jcptoursperu.com/index.php"><?php echo $lang["menu-inicio"]; ?></a></li>
						<li><a href="https://www.jcptoursperu.com/servtransporte.php"><?php echo $lang["menu-transporte"]; ?></a></li>
						<li><a href="https://www.jcptoursperu.com/packages.php"><?php echo $lang["menu-paquetes"]; ?></a></li>
						<li><a href="https://www.jcptoursperu.com/tours.php"><?php echo $lang["menu-tours"]; ?></a></li>
						<li><a href="https://www.jcptoursperu.com/contact.php"><?php echo $lang["menu-contacto"]; ?></a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->

	<!-- start banner Area -->
	<section class="relative about-banner">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						<?php echo $lang["menu-contacto"]; ?>
					</h1>

					<p class="text-white link-nav"><a href="index.php"><?php echo $lang["menu-inicio"]; ?></a> <span class="lnr lnr-arrow-right"></span> <a href="contact.php"><?php echo $lang["menu-contacto"]; ?></a>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<div class="map-wrap" style="width:100%; height: 445px;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.3430964968884!2d-77.03825178561736!3d-12.088648145971339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c85e54e8f9c5%3A0x848dae7f9f872369!2sAv.%20C%C3%A9sar%20Vallejo%20330%2C%20Lince%2015073!5e0!3m2!1ses-419!2spe!4v1630788443704!5m2!1ses-419!2spe" width="1150" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="col-lg-4 d-flex flex-column address-wrap">
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-home"></span>
						</div>
						<div class="contact-details">
							<h5>Lince, Lima - Perú</h5>
							<p>
								César Vallejo 330
							</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
						</div>
						<div class="contact-details">
							<h5>998 910 126</h5>
							<h5>959 358 331</h5>

						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-envelope"></span>
						</div>
						<div class="contact-details">
							<h5>operaciones@jcptoursperu.com</h5>

						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
					<?php
								
								$namecontact = "form-name-contact";
								$mailcontact = "form-mail-contact";
								$subjectcontact = "form-subject-contact";
								$messagecontact = "form-message-contact";

								?>
						<div class="row">
							<div class="col-lg-6 form-group">
								<input name="name" placeholder=<?php echo $lang[$namecontact]; ?> onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $lang[$namecontact]; ?>'" class="common-input mb-20 form-control" required="" type="text">

								<input name="email" placeholder=<?php echo $lang[$mailcontact]; ?> pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $lang[$mailcontact]; ?>'" class="common-input mb-20 form-control" required="" type="email">

								<input name="subject" placeholder=<?php echo $lang[$subjectcontact ]; ?>  onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $lang[$subjectcontact ]; ?> '" class="common-input mb-20 form-control" required="" type="text">
							</div>
							<div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="message" placeholder=<?php echo $lang[$messagecontact ]; ?>  onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $lang[$messagecontact ]; ?>'" required=""></textarea>
							</div>
							<div class="col-lg-12">
								<div class="alert-msg-contact" style="text-align: left;"></div>
								<button type="submit" class="genric-btn primary" style="float: right;"><?php echo $lang["btn-contact"]; ?></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End contact-page Area -->

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>JCP PERU TOURS</h6>
						<p>
							<?php echo $lang["about-footer"]; ?>
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6> <?php echo $lang["nav-page"]; ?></h6>
						<div class="row">
							<div class="col">
								<ul>
									<li><a href="index.php"><?php echo $lang["menu-inicio"]; ?></a></li>
									<li><a href="servtransporte.php"><?php echo $lang["menu-transporte"]; ?></a></li>
									<li><a href="packages.php"><?php echo $lang["menu-paquetes"]; ?></a></li>
									<li><a href="tours.php"><?php echo $lang["menu-tours"]; ?></a></li>
									<li><a href="contact.php"><?php echo $lang["menu-contacto"]; ?></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">

					<div class="single-footer-widget">

						<div id="mc_embed_signup">
							<h6> <?php echo $lang["menu-contacto"]; ?> </h6>
							<p>
								<li> <?php echo $lang["form-phone"]; ?> : 998 910 126</li>
								<li><?php echo $lang["form-phone"]; ?>: 959 358 331</li>
							</p>
							<p>
								operaciones@jcptoursperu.com
							</p>

						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20"> <?php echo $lang["like-face"]; ?></h6>

						<div class="fb-page" data-href="https://www.facebook.com/JCP-PERÚ-TOURS-348723299046407" data-width="250" data-hide-cover="false" data-show-facepile="true">
						</div>
					</div>
				</div>
			</div>

			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-8 col-sm-12 footer-text m-0">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved
					</i> by <a href="https://www.gyaservs.com" target="_blank">GYA</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="https://www.facebook.com/JCP-PERÚ-TOURS-348723299046407"><i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com/jcpperutours/"><i class="fa fa-instagram"></i></a>

				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v11.0" nonce="EdReJmLT"></script>
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mail-script-index.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>