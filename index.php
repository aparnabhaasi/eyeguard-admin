<?php include 'publicheader.php';
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eyeglass";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve form data
	$email = $_POST['email'] ?? '';
	$password = $_POST['password'] ?? '';

	// Sanitize the inputs
	$email = mysqli_real_escape_string($conn, $email);
	// You can hash the password for security before storing it in the database
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

	// SQL query to insert data into the 'users' table
	$sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashedPassword')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$q = "SELECT * FROM `product` limit 8";
$res = select($q);

$q1 = "SELECT * FROM `product` where features='1'";
$res1 = select($q1);
// Close connection
$conn->close();
?>



<!-- banner -->
<div class="banner">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>

		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div class="carousel-caption text-center">
					<h3>Men’s eyewear
						<span>Cool summer sale 50% off</span>
					</h3>
					<a href="publicshop.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="carousel-caption text-center">
					<h3>Women’s eyewear
						<span>Want to Look Your Best?</span>
					</h3>
					<a href="publicshop.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

				</div>
			</div>
			<div class="carousel-item item3">
				<div class="carousel-caption text-center">
					<h3>Men’s eyewear
						<span>Cool summer sale 50% off</span>
					</h3>
					<a href="publicshop.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

				</div>
			</div>
			<div class="carousel-item item4">
				<div class="carousel-caption text-center">
					<h3>Women’s eyewear
						<span>Want to Look Your Best?</span>
					</h3>
					<a href="publicshop.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!--//banner -->
</div>
</div>
<!--//banner-sec-->


<div class="row galsses-grids pt-lg-5 pt-3 p-2" id="unisex">
	<div class="col-lg-3 col-md-6 col-sm-6 galsses-grid-left" style="width: 50%;">
		<figure class="effect-lexi">
			<img src="images/men.jpg" alt="" class="img-fluid">
			<div class="overlay"></div>
			<figcaption>
				<h3>MEN'S
					<span>EYE GLASS</span>
				</h3>
				<a href="publicmen.php">
					<p><strong>Shop Now</strong></p>
				</a>
			</figcaption>
		</figure>
	</div>

	<div class="col-lg-3 col-md-6 col-sm-6 galsses-grid-left" style="width: 50%;">
		<figure class="effect-lexi">
			<img src="images/woman.jpg" alt="" class="img-fluid">
			<div class="overlay"></div>
			<figcaption>
				<h3>WOMEN'S
					<span>EYE GLASS</span>
				</h3>
				<a href="publicwomen.php">
					<p>Shop Now</p>
				</a>
			</figcaption>
		</figure>
	</div>

	<div class="col-lg-3 col-md-6 col-sm-6 galsses-grid-left" style="width: 50%;">
		<figure class="effect-lexi">
			<img src="images/kid.jpg" alt="" class="img-fluid">
			<div class="overlay"></div>
			<figcaption>
				<h3>KID'S
					<span>EYE GLASS</span>
				</h3>
				<a href="publickids.php">
					<p>Shop Now</p>
				</a>
			</figcaption>
		</figure>
	</div>

	<div class="col-lg-3 col-md-6 col-sm-6 galsses-grid-left" style="width: 50%;">
		<figure class="effect-lexi">
			<img src="images/sunglass.jpg" alt="" class="img-fluid">
			<div class="overlay"></div>
			<figcaption>
				<h3>SUN
					<span>GLASS</span>
				</h3>
				<a href="publicsunglass.php">
					<p>Shop Now</p>
				</a>
			</figcaption>
		</figure>
	</div>
</div>



<section class="banner-bottom-wthreelayouts py-lg-5 py-3" id="new">
	<div class="container-fluid">
		<div class="inner-sec-shop px-lg-4 px-3">
			<h3 class="tittle-w3layouts my-lg-4 my-4">New Arrivals for you </h3>
			<div class="row">
				<?php
				foreach ($res as $row) {
					$id = $row['product_id'];
					$cat = $row['category'];
					$name = $row['product_name'];
					$price = $row['actual_price'];
					?>
					<!-- /womens -->
					<div class="col-md-3 product-men women_two shop-gd">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="images/s1.jpg" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="publicsingle.php?id=<?php echo $id;?>&cat=None" class="link-product-add-cart">Quick
												View</a>
										</div>
										
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4>
													<a href="single.php">
														<?php echo $name; ?>
													</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">
														<?php echo $price; ?>
													</span>
												</div>
											</div>
											<ul class="stars">
												<li>
													<a href="#">
														<i class="fa fa-star" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-star" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-star" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-star" aria-hidden="true"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-star-half-o" aria-hidden="true"></i>
													</a>
												</li>
											</ul>
										</div>
										<div class="googles single-item hvr-outline-out">
											<form action="publicsingle.php " method="post">
												
												<button type="submit" class="googles-cart pgoogles-cart">
													<i class="fas fa-cart-plus"></i>
												</button>
											</form>

										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>

				<?php } ?>

			</div>
			<!--//row-->
			<!--/meddle-->
			<div class="row">
				<div class="col-md-12 middle-slider my-4">
					<div class="middle-text-info ">

						<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Offer starts soon</h3>
						<div class="simply-countdown-custom" id="simply-countdown-custom"></div>

					</div>
				</div>
			</div>
			<!--//meddle-->
			<!--/slide-->
			<div class="slider-img mid-sec">
				<!--//banner-sec-->

				<div class="mid-slider">
					<div class="owl-carousel owl-theme row">
						<?php
						foreach ($res1 as $row1) {
							$id = $row1['product_id'];

							$name = $row1['product_name'];
							$price = $row1['actual_price'];
							?>
							<div class="item">
								<div class="gd-box-info text-center">
									<div class="product-men women_two bot-gd">
										<div class="product-googles-info slide-img googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="images/s5.jpg" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="publicsingle.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="link-product-add-cart">Quick
																View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="publicsingle.php">
																		<?php echo $name; ?>
																	</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">
																		<?php echo $name; ?>
																	</span>
																</div>
															</div>
															<ul class="stars">
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-half-o" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-o" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div>
														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item"
																	value="Fastrack Aviator">
																<input type="hidden" name="amount" value="325.00">
																<button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button>
															</form>

														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>


					</div>
				</div>
			</div>
			<!-- /testimonials -->
			<div class="testimonials py-lg-4 py-3 mt-4">
				<div class="testimonials-inner py-lg-4 py-3">
					<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Tesimonials</h3>
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<div class="testimonials_grid text-center">
									<h3>Anamaria
										<span>Customer</span>
									</h3>
									<label>Vadakara</label>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac
										scelerisque nisl nibh vel lacus.
										Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testimonials_grid text-center">
									<h3>Esmeralda
										<span>Customer</span>
									</h3>
									<label>Vadakara</label>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac
										scelerisque nisl nibh vel lacus.
										Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testimonials_grid text-center">
									<h3>Gretchen
										<span>Customer</span>
									</h3>
									<label>Vadakara</label>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac
										scelerisque nisl nibh vel lacus.
										Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
								</div>
							</div>
							<a class="carousel-control-prev test" href="#carouselExampleControls" role="button"
								data-slide="prev">
								<span class="fas fa-long-arrow-alt-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next test" href="#carouselExampleControls" role="button"
								data-slide="next">
								<span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>

							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- //testimonials -->




			<!-- /grids -->
			<div class="bottom-sub-grid-content py-lg-5 py-3">
				<div class="row">
					<div class="col-lg-4 bottom-sub-grid text-center">
						<div class="bt-icon">

							<span class="far fa-hand-paper"></span>
						</div>

						<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Satisfaction Guaranteed</h4>
						<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
							elit.</p>
						<p>
							<a href="shop.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
						</p>
					</div>
					<!-- /.col-lg-4 -->
					<div class="col-lg-4 bottom-sub-grid text-center">
						<div class="bt-icon">
							<span class="fas fa-rocket"></span>
						</div>

						<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Fast Shipping</h4>
						<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
							elit.</p>
						<p>
							<a href="shop.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
						</p>
					</div>
					<!-- /.col-lg-4 -->
					<div class="col-lg-4 bottom-sub-grid text-center">
						<div class="bt-icon">
							<span class="far fa-sun"></span>
						</div>

						<h4 class="sub-tittle-w3layouts my-lg-4 my-3">UV Protection</h4>
						<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
							elit.</p>
						<p>
							<a href="shop.php" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
						</p>
					</div>
					<!-- /.col-lg-4 -->
				</div>
			</div>
			<!-- //grids -->
			<!-- /clients-sec -->
			<div class="testimonials p-lg-5 p-3 mt-4">
				<div class="row last-section">
					<div class="col-lg-3 footer-top-w3layouts-grid-sec">
						<div class="mail-grid-icon text-center">
							<i class="fas fa-gift"></i>
						</div>
						<div class="mail-grid-text-info">
							<h3>Genuine Product</h3>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</div>
					<div class="col-lg-3 footer-top-w3layouts-grid-sec">
						<div class="mail-grid-icon text-center">
							<i class="fas fa-shield-alt"></i>
						</div>
						<div class="mail-grid-text-info">
							<h3>Secure Products</h3>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</div>
					<div class="col-lg-3 footer-top-w3layouts-grid-sec">
						<div class="mail-grid-icon text-center">
							<i class="fas fa-rupee-sign"></i>

						</div>
						<div class="mail-grid-text-info">
							<h3>Cash on Delivery</h3>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</div>
					<div class="col-lg-3 footer-top-w3layouts-grid-sec">
						<div class="mail-grid-icon text-center">
							<i class="fas fa-truck"></i>
						</div>
						<div class="mail-grid-text-info">
							<h3>Easy Delivery</h3>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
						</div>
					</div>
				</div>
			</div>
			<!-- //clients-sec -->
		</div>
	</div>
</section>
<!-- about -->
<!--footer -->
<footer class="py-lg-5 py-3">
	<div class="container-fluid px-lg-5 px-3">
		<div class="row footer-top-w3layouts">
			<div class="col-lg-3 footer-grid-w3ls">
				<div class="footer-title">
					<h3>About Us</h3>
				</div>
				<div class="footer-text">
					<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur
						sed, convallis at
						tellus. Nulla porttitor accumsana tincidunt.</p>
					<ul class="footer-social text-left mt-lg-4 mt-3">

						<li class="mx-2">
							<a href="#">
								<span class="fab fa-facebook-f"></span>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<span class="fab fa-twitter"></span>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<span class="fab fa-google-plus-g"></span>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<span class="fab fa-linkedin-in"></span>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<span class="fas fa-rss"></span>
							</a>
						</li>
						<li class="mx-2">
							<a href="#">
								<span class="fab fa-vk"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 footer-grid-w3ls">
				<div class="footer-title">
					<h3>Get in touch</h3>
				</div>
				<div class="contact-info">
					<h4>Location :</h4>
					<p>0926k 4th block building, king Avenue, New York City.</p>
					<div class="phone">
						<h4>Contact :</h4>
						<p>Phone : +121 098 8907 9987</p>
						<p>Email :
							<a href="mailto:info@example.com">info@example.com</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 footer-grid-w3ls">
				<div class="footer-title">
					<h3>Quick Links</h3>
				</div>
				<ul class="links">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="404.php">Error</a>
					</li>
					<li>
						<a href="shop.php">Shop</a>
					</li>
					<li>
						<a href="contact.php">Contact Us</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-3 footer-grid-w3ls">
				<div class="footer-title">
					<h3>Sign up for your offers</h3>
				</div>
				<div class="footer-text">
					<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
					<form action="#" method="post">
						<input class="form-control" type="email" name="Email" placeholder="Enter your email..."
							required="">
						<button class="btn1">
							<i class="far fa-envelope" aria-hidden="true"></i>
						</button>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
		</div>
		<div class="copyright-w3layouts mt-4">
			<p class="copy-right text-center ">&copy; 2018 Goggles. All Rights Reserved | Design by
				<a href="http://w3layouts.com/"> W3layouts </a>
			</p>
		</div>
	</div>
</footer>
<!-- //footer -->

<!--jQuery-->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- newsletter modal -->
<!-- Modal -->
<!-- Modal -->

<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5 mx-auto mw-100">
					<h6>Join our newsletter and get</h6>
					<h3>50% Off for your first Pair of Eye wear</h3>
					<div class="login newsletter">
						<form action="#" method="post">
							<div class="form-group">
								<label class="mb-2">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="" required="">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Get 50% Off</button>
						</form>
						<p class="text-center">
							<a href="#">No thanks I want to pay full Price</a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div> -->
<script>
	$(document).ready(function () {
		$("#myModal").modal();
	});
</script>
<!-- // modal -->

<!--search jQuery-->
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/classie-search.js"></script>
<script src="js/demo1-search.js"></script>
<!--//search jQuery-->
<!-- cart-js -->
<script src="js/minicart.js"></script>
<script>
	googles.render();

	googles.cart.on('googles_checkout', function (evt) {
		var items, len, i;

		if (this.subtotal() > 0) {
			items = this.items();

			for (i = 0, len = items.length; i < len; i++) { }
		}
	});
</script>
<!-- //cart-js -->
<script>
	$(document).ready(function () {
		$(".button-log a").click(function () {
			$(".overlay-login").fadeToggle(200);
			$(this).toggleClass('btn-open').toggleClass('btn-close');
		});
	});
	$('.overlay-close1').on('click', function () {
		$(".overlay-login").fadeToggle(200);
		$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
		open = false;
	});
</script>
<!-- carousel -->
<!-- Count-down -->
<script src="js/simplyCountdown.js"></script>
<link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
<script>
	var d = new Date();
	simplyCountdown('simply-countdown-custom', {
		year: d.getFullYear(),
		month: d.getMonth() + 2,
		day: 25
	});
</script>
<!--// Count-down -->
<script src="js/owl.carousel.js"></script>
<script>
	$(document).ready(function () {
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				600: {
					items: 2,
					nav: false
				},
				900: {
					items: 3,
					nav: false
				},
				1000: {
					items: 4,
					nav: true,
					loop: false,
					margin: 20
				}
			}
		})
	})
</script>

<!-- //end-smooth-scrolling -->


<!-- dropdown nav -->
<script>
	$(document).ready(function () {
		$(".dropdown").hover(
			function () {
				$('.dropdown-menu', this).stop(true, true).slideDown("fast");
				$(this).toggleClass('open');
			},
			function () {
				$('.dropdown-menu', this).stop(true, true).slideUp("fast");
				$(this).toggleClass('open');
			}
		);
	});
</script>
<!-- //dropdown nav -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 900);
		});
	});
</script>
<script>
	$(document).ready(function () {
		/*
								var defaults = {
									  containerID: 'toTop', // fading element id
									containerHoverID: 'toTopHover', // fading element hover id
									scrollSpeed: 1200,
									easingType: 'linear' 
								 };
								*/

		$().UItoTop({
			easingType: 'easeOutQuart'
		});

	});
</script>
<!--// end-smoth-scrolling -->

<script src="js/bootstrap.js"></script>
<!-- js file -->
</body>

</html>