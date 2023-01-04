<?php
// iniciamos una sesion
session_start();

//verificamos si hay cambios de lenguaje mediante POST
if (isset($_POST["lang"])) {
	$lang = $_POST["lang"];
	if (!empty($lang)) {
		$_SESSION["lang"] = $lang;
	}
}
// verificamos la sesion creada
if (isset($_SESSION['lang'])) {
	// si es true, se crea el require y la variable lang
	$lang = $_SESSION["lang"];
	require "lang/" . $lang . ".php";
	// si no hay sesion por default se carga el lenguaje espanol
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
	<meta property="og:title" content="JCP Perú Tours | Servicios turísticos" />
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
	<meta name="keywords" content="turismo, travel, gastronomía, tours">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->

	<meta property="article:publisher" content="https://www.facebook.com/JCP-PER%C3%9A-TOURS-348723299046407" />
	<meta property="og:image" content="https://www.jcptoursperu.com/img/jcpperutours.jpg" />
	<meta property="og:image:width" content="980px" />
	<meta property="og:image:height" content="516px" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<title><?php echo $lang["srv-carriage"]; ?>- <?php echo $lang["name-jcp"]; ?></title>

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
						<?php echo $lang["title-srvespecials"]; ?>
					</h1>

					<p class="text-white link-nav"><a href="index.php"><?php echo $lang["menu-inicio"]; ?></a> <span class="lnr lnr-arrow-right"></span> <a href="servtransporte.php"><?php echo $lang["menu-transporte"]; ?></a>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						<div class="col-lg-12">
							<div class="feature-img">
								<img class="img-fluid" src="img/specialservices/feature-img4.jpg" alt="">
							</div>
						</div>
						<div class="col-lg-3  col-md-3 meta-details">
							<div class="user-details row">

								<p class="view col-lg-12 col-md-12 col-6"><?php echo $lang["state"]; ?>: Lima <span class="lnr lnr-eye"></span>
								</p>
								<!-- Your share button code -->


								<ul class="social-links col-lg-12 col-md-12 col-6">
									<div class="fb-share-button" data-href="https://www.jcptoursperu.com" data-layout="box_count">
									</div>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<h3 class="mt-20 mb-20"><?php echo $lang["menu-transporte"]; ?></h3>
							<p class="excert">
								<?php echo $lang["servtrans-description"]; ?>
							</p>


						</div>
						<div class="col-lg-12">
							<div class="quotes">
								<?php echo $lang["servtrans-description-two"]; ?>

							</div>
							<div class="row mt-30 mb-30">
								<div class="col-6">
									<img class="img-fluid" src="img/specialservices/post-img7.jpg" alt="">
								</div>
								<div class="col-6">
									<img class="img-fluid" src="img/specialservices/post-img8.jpg" alt="">
								</div>
								<br>

							</div>
						</div>
					</div>
					<div class="navigation-area">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
								<div class="thumb">
									<a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
								</div>
								<div class="arrow">
									<a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
								</div>
								<div class="detials">
									<p> <?php echo $lang["srv-before"]; ?> r</p>
									<a href="servgastronomia.php">
										<h4>
											<?php echo $lang["srv-cousine"]; ?> </h4>
									</a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
								<div class="detials">
									<p> <?php echo $lang["srv-after"]; ?> </p>
									<a href="servfulldays.php">
										<h4>
											<?php echo $lang["srv-fulldays"]; ?></h4>
									</a>
								</div>

							</div>
						</div>
					</div>

				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
						<div class="single-sidebar-widget popular-post-widget">
							<h4 class="popular-title"><?php echo $lang["title-srvespecials"]; ?></h4>
							<div class="popular-post-list">
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="img/specialservices/pp1.jpg" alt="">
									</div>
									<div class="details">
										<a href="servgastronomia.php">
											<h6><?php echo $lang["srv-cousine"]; ?></h6>

										</a>

									</div>
								</div>
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="img/specialservices/pp2.jpg" alt="">
									</div>
									<div class="details">
										<a href="servshows.php">
											<h6><?php echo $lang["srv-shows"]; ?></h6>

										</a>

									</div>
								</div>
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="img/specialservices/pp3.jpg" alt="">
									</div>
									<div class="details">
										<a href="servfulldays.php">
											<h6><?php echo $lang["srv-fulldays"]; ?></h6>
										</a>

									</div>
								</div>
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="img/specialservices/pp4.jpg" alt="">
									</div>
									<div class="details">
										<a href="servtransporte.php">
											<h6><?php echo $lang["srv-carriage"]; ?></h6>
										</a>

									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End post-content Area -->

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
	<script src="js/main.js"></script>

</body>

</html>