<?php
session_start();
 include 'connection.php'?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Eyeguard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="icon" type="images" href="images/favicon.png">
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<style>
		.galsses-grid-left {
							position: relative;
							overflow: hidden;
							margin-bottom: 30px; /* Add margin at the bottom for spacing */
						}
					
						.effect-lexi {
							position: relative;
						}
					
						.effect-lexi img {
							display: block;
							max-width: 100%;
							height: auto;
						}
					
						.effect-lexi figcaption {
							position: absolute;
							bottom: 0;
							left: 0;
							width: 100%;
							padding: 20px;
							color: #fff;
							text-align: center;
							z-index: 1; /* Ensure the text appears above the gradient */
							box-sizing: border-box; /* Include padding in the width calculation */
						}
					
						.overlay {
							position: absolute;
							top: 0;
							left: 0;
							width: 100%;
							height: 100%;
							background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0) 100%);
							z-index: 0; /* Ensure the overlay is behind the text */
						}
					
						.effect-lexi:hover figcaption {
							transform: translateY(0);
						}
					
						.effect-lexi h3,
						.effect-lexi span,
						.effect-lexi p {
							margin: 0;
						}
					
						.effect-lexi h3 {
							font-size: 1.8em;
						}
					
						.effect-lexi span {
							display: block;
							font-size: 0.7em;
							margin-top: 5px;
						}
					
						.effect-lexi p {
							font-size: 1em;
						}

	@media (max-width: 767px) {
        .galsses-grid-left span{
            color: rgb(255, 255, 255) !important;
        }
		.galsses-grid-left span,h3{
            font-size: smaller !important;
        }
		.carousel-caption h3 {
            font-size: 30px !important; /* Adjust the font size as needed */
        }
    }
	</style>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4 mt-3">
					<h6>Need Help</h6>
					<ul>
						<li ><i class="fas fa-phone"></i> Call</li>
						<li class="number-phone mt-2">12345678099</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.php">
							<img src="images/logo.png" alt="" width="200"> </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<li class="button-log">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_googles_cart" type="submit" name="submit" value="">
									My Cart
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form>
						</li>
					</ul>
					<!---->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Login Now</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="login.php" method="post">
									<div class="form-group">
										<label class="mb-2">Email address</label>
										<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group">
										<label class="mb-2">Password</label>
										<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
									</div>
									
									<button type="submit" name="submit" class="btn btn-primary submit mb-4">Sign In</button>
									<div class="form-check mb-2">
										<!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
										<a href="register.php"><label class="form-check-label" for="exampleCheck1">Dont have an account?</label></a>
									</div>
								</form>
							</div>
							<!---->
						</div>
					</div>
					<!---->
				</div>
			</div>
			
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Eyeglassess
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left mb-4">
											<h6> Select Category </h6>
											<ul>
												<li class="media-mini mt-3">
													<a href="men.php?product=eyeglass">
														<img src="images/man-s.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
														MEN
													</a>
												</li>
												<hr>												
												<li class="">
													<a href="women.php?product=eyeglass">
														<img src="images/woman-s.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
														WOMEN
													</a>
												</li><hr>
												<li>
													<a href="kids.php?product=eyeglass">
														<img src="images/kid-s.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
														KIDS
													</a>
												</li>
												
												
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left mb-4">
											<h6> Our Top Picks </h6>
											<ul>
												<li class="media-mini mt-3 mb-1">

													<a href="shop.php">New Arrivals</a>
												</li><hr>
												<li class="mb-1">
													<a href="shop.php">Unisex</a>
												</li><hr>
												<li class="mb-1">
													<a href="shop.php">Computer Eyeglasses</a>
												</li><hr>
												<li class="mb-1">
													<a href="shop.php">Tinted Eyeglasses</a>
												</li>
												
											</ul>
											

										</div>
										<div class="col-md-4 media-list span4 text-left mb-4">
											<h6> Frame Type </h6>
											<ul>
												<li class="media-mini mt-3 mb-1">

													<a href="shop.php">Rectangle Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Wayfarer Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Round Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Aviator Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Cat-Eye Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Rimless Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Halfrim Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Geometric Frames</a>
												</li>
											</ul>
											

										</div>
										
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Sunglasses
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left mb-4">
											<h6> Select Category </h6>
											<ul>
												<li class="media-mini mt-3">
													<a href="men.php?product=sunglass">
														<img src="images/man-s.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
														MEN
													</a>
												</li>
												<hr>												
												<li class="">
													<a href="women.php?product=sunglass">
														<img src="images/woman-s.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
														WOMEN
													</a>
												</li><hr>
												<li>
													<a href="kids.php?product=sunglass">
														<img src="images/kid-s.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
														KIDS
													</a>
												</li>
												
												
											</ul>
										</div>
										
										<div class="col-md-4 media-list span4 text-left mb-4">
											<h6> Frame Type </h6>
											<ul>
												<li class="media-mini mt-3 mb-1">

													<a href="shop.php">Rectangle Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Wayfarer Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Round Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Aviator Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Cat-Eye Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Rimless Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Halfrim Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Geometric Frames</a>
												</li>
											</ul>
											

										</div>
										<div class="col-md-4 media-list span4 text-left">

											<h6 > <a class="text-danger" href="shop.php">Shop Now</a> </h6>
											<div class="media-mini mt-3">
												<a href="shop.php">
													<img src="images/sunglass-nav.jpg" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Computer glasses
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left mb-4">
											<h6> Select Category </h6>
											<ul>
												<li class="media-mini mt-3">
													<a href="men.php?product=computerglass">
														<img src="images/man-s.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
														MEN
													</a>
												</li>
												<hr>												
												<li class="">
													<a href="women.php?product=computerglass">
														<img src="images/woman-s.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
														WOMEN
													</a>
												</li><hr>
												<li>
													<a href="kids.php?product=computerglass">
														<img src="images/kid-s.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
														KIDS
													</a>
												</li>
												
												
											</ul>
										</div>
										
										<div class="col-md-4 media-list span4 text-left mb-4">
											<h6> Frame Type </h6>
											<ul>
												<li class="media-mini mt-3 mb-1">

													<a href="shop.php">Rectangle Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Wayfarer Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Round Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Aviator Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Cat-Eye Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Rimless Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Halfrim Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php">Geometric Frames</a>
												</li>
											</ul>
											

										</div>
										<div class="col-md-4 media-list span4 text-left">

											<h6 > <a class="text-danger" href="shop.php">Shop Now</a> </h6>
											<div class="media-mini mt-3">
												<a href="shop.php">
													<img src="images/computerglass-nav.jpg" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Contact lenses
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">
										
										
										<div class="col-md-6 media-list span4 text-left mb-4">
											<h6> Disposablity </h6>
											<ul>
												<li class="media-mini mt-3 mb-1">

													<a href="shop.php">Daily Disposable</a>
												</li><hr>
												<li class="mb-1">
													<a href="shop.php">Two Weekly Disposable</a>
												</li><hr>
												<li class="mb-1">
													<a href="shop.php">Monthly Disposable</a>
												</li><hr>
												<li class="mb-1">
													<a href="shop.php">Yearly Disposable</a>
												</li>
												
											</ul>
											

										</div>
										<div class="col-md-6 media-list span4 text-left">

											<h6 > <a class="text-danger" href="shop.php">Shop Now</a> </h6>
											<div class="media-mini mt-3">
												<a href="shop.php">
													<img src="images/contactlense-nav.jpg" class="img-fluid" alt="">
												</a>
											</div>

										</div>
									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->