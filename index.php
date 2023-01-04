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
	<title><?php echo $lang["menu-inicio"]; ?>- <?php echo $lang["name-jcp"]; ?></title>
    <!-- ======= CSS ===============-->
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
    
    <!-- Globo Whatsapp -->
    <script type="text/javascript" src="js/vendor/jquery-2.2.4.min.js"></script>
    <link rel="stylesheet" href="css/floating-wpp.css">
    <script type="text/javascript" src="js/floating-wpp.js"></script>
    
</head>

<body>
    <div id="myButton">		
	</div>
    <!-- Star header Area -->
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
	</header>
    <!-- End header Area -->

	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-between">
				<div class="col-lg-6 col-md-6 banner-left">
					<h2 class="text-yellow"><?php echo $lang["top-title"]; ?> </h2>
					<h1 class="text-yellow"><?php echo $lang["name-jcp"]; ?></h1>
					<h4 class="text-yellow"><?php echo $lang["sub-title"]; ?></h4>

				</div>

				<div class="col-lg-4-top col-md-6 banner-right">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" role="tabpanel" aria-labelledby="flight-tab">
							<form class="form-wrap" id="myFormIndex" action="enviar.php" method="post">
								<?php
								$place = "form-place";
								$name = "form-name";
								$date = "form-date";
								$passenger = "form-passenger";
								$phone = "form-phone";
								$mail = "form-mail";

								?>
								<input type="text" class="form-control" name="place" placeholder=<?php echo $lang[$place]; ?> onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $lang[$place]; ?>'" required>

								<input type="text" class="form-control" name="name" placeholder=<?php echo $lang[$name]; ?> onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $lang[$name]; ?> '" required>

								<input type="text" class="form-control date-picker" name="date" placeholder=<?php echo $lang[$date]; ?> onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $lang[$date]; ?>'" required>

								<input type="text" min="1" max="20" class="form-control" name="count" placeholder=<?php echo $lang[$passenger]; ?> onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $lang[$passenger]; ?> '" required>

								<input type="number" class="form-control" name="phone" placeholder=<?php echo $lang[$phone]; ?> onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $lang[$phone]; ?> '" required>

								<input type="email" class="form-control" name="mail" placeholder=<?php echo $lang[$mail]; ?> onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $lang[$mail]; ?>  '" required>

								<div class="col-lg-12"></div>
								<div class="alert-msg" style="text-align: left;"></div>
								<button type="submit" class="genric-btn primary" style="float: right;"><?php echo $lang["btn-request"]; ?></button>
						</div>
						</form>
					</div>

				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start Dstinos Populares -->
	<section class="recent-blog-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-9">
					<div class="title text-center">
						<h1 class="mb-10"><?php echo $lang["title-destinations"]; ?></h1>
						<p> <?php echo $lang["description-destinations"]; ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="active-recent-blog-carusel">
					<div class="single-recent-blog-post item">
						<div class="thumb">
							<img class="img-fluid" src="img/b1.jpg" alt="">
						</div>
						<div class="details">
							<div class="tags">
								<ul>
									<li>
										<a>Lima</a>
									</li>
								</ul>
							</div>
							<a href="tours.php#lima">
								<h4 class="title">LIMA</h4>
							</a>

							<p> <?php echo $lang["one-destinations"]; ?>
							</p>

						</div>
					</div>
					<div class="single-recent-blog-post item">
						<div class="thumb">
							<img class="img-fluid" src="img/b2.jpg" alt="">
						</div>
						<div class="details">
							<div class="tags">
								<ul>
									<li>
										<a>Ica</a>
									</li>

								</ul>
							</div>
							<a href="packages.php#nazca">
								<h4 class="title">NAZCA</h4>
							</a>

							<p> <?php echo $lang["two-destinations"]; ?>
							</p>

						</div>
					</div>
					<div class="single-recent-blog-post item">
						<div class="thumb">
							<img class="img-fluid" src="img/b3.jpg" alt="">
						</div>
						<div class="details">
							<div class="tags">
								<ul>
									<li>
										<a>Lima</a>
									</li>

								</ul>
							</div>
							<a href="packages.php#caral">
								<h4 class="title">CARAL</h4>
							</a>

							<p>
								<?php echo $lang["tree-destinations"]; ?>
							</p>

						</div>
					</div>
					<div class="single-recent-blog-post item">
						<div class="thumb">
							<img class="img-fluid" src="img/b4.jpg" alt="">
						</div>
						<div class="details">
							<div class="tags">
								<ul>

									<li>
										<a>Lima</a>
									</li>
								</ul>
							</div>
							<a href="tours.php#pachacamac">
								<h4 class="title">PACHACAMAC</h4>
							</a>
							<!--precio <h3></h3>-->
							<p>
								<?php echo $lang["four-destinations"]; ?>
							</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End recent-blog Area -->

	<!-- Start de otros eventos -->
	<section class="other-issue-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-9">
					<div class="title text-center">
						<h1 class="mb-10"> <?php echo $lang["title-srvespecials"]; ?></h1>
						<div class="serv">
							<p>
								<?php echo $lang["description-srvespecials"]; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-other-issue">
						<div class="thumb">
							<img class="img-fluid" src="img/o1.jpg" alt="">
						</div>
						<a href="servgastronomia.php">
							<h4><?php echo $lang["srv-cousine"]; ?> </h4>
						</a>
						<div class="serv">
							<p>
								<?php echo $lang["srv-cousine-description"]; ?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-other-issue">
						<div class="thumb">
							<img class="img-fluid" src="img/o2.jpg" alt="">
						</div>
						<a href="servshows.php">
							<h4> <?php echo $lang["srv-shows"]; ?> </h4>
						</a>
						<div class="serv">
							<p>
								<?php echo $lang["srv-shows-description"]; ?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-other-issue">
						<div class="thumb">
							<img class="img-fluid" src="img/o3.jpg" alt="">
						</div>
						<a href="servfulldays.php">
							<h4> <?php echo $lang["srv-fulldays"]; ?> </h4>
						</a>
						<div class="serv">
							<p>
								<?php echo $lang["srv-fulldays-description"]; ?>

							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-other-issue">
						<div class="thumb">
							<img class="img-fluid" src="img/o4.jpg" alt="">
						</div>
						<a href="servtransporte.php">
							<h4> <?php echo $lang["srv-carriage"]; ?> </h4>
						</a>
						<div class="serv">
							<p>
								<?php echo $lang["srv-carriage-description"]; ?>

							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End other-issue Area -->	

	<!-- Start testimonial Area -->
	<section class="testimonial-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10"> <?php echo $lang["testimonial-title"]; ?> </h1>
						<p> <?php echo $lang["testimonial-description"]; ?> </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="active-testimonial">
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="img-fluid" src="img/elements/user-5.png" alt="">
						</div>
						<div class="desc">
							<p>
								Super recomendo!
								Atenciosos e pontuais, nosso passeio foi MARAVILHOSO ❤️
							</p>
							<h4>Giovana F. </h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="img-fluid" src="img/elements/user-4.png" alt="">
						</div>
						<div class="desc">
							<p>
								Excelente servicio 100% recomendados 🤗
							</p>
							<h4>Joelys M.</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="img-fluid" src="img/elements/user-3.png" alt="">
						</div>
						<div class="desc">
							<p>
								Muy buen servicio, gracias por la atención 👍
							</p>
							<h4>Jefferson D.</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="img-fluid" src="img/elements/user-2.png" alt="">
						</div>
						<div class="desc">
							<p>
								Servicio y profesionalismo, empecemos conociendo nuestro querido Peru 👍
							</p>
							<h4>Nadia S.</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>
					<div class="single-testimonial item d-flex flex-row">
						<div class="thumb">
							<img class="img-fluid" src="img/elements/user-6.png" alt="">
						</div>
						<div class="desc">
							<p>
								Buen servicio, para grupo familiar.
							</p>
							<h4>Young M.</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End testimonial Area -->	

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
				<div id="fb-root"></div>
			</div>
		</div>

	</footer>
	<!-- End footer Area -->

</body>

<script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '51959358331',
            popupMessage: 'Hola, cómo podemos ayudarle?',
            message: "Me gustaría hacer la reserva para un tour.",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Bienvenid@ a JCP!',
            headerColor: 'green',
            backgroundColor: 'green',
            buttonImage: '<img src="img/whatsapp.svg" />'
        });
    });
</script>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v11.0" nonce="EdReJmLT"></script>
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
</html>
