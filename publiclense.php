<?php include 'publicheader.php' ?>

<!--/shop-->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container-fluid">
		<div class="inner-sec-shop px-lg-4 px-3">
			<h3 class="tittle-w3layouts my-lg-4 mt-3">Lense Collections </h3>
			<div class="row">
				<!-- product left -->
				<div class="side-bar col-lg-3">
					<div class="search-hotel">
						<h3 class="agileits-sear-head">Search Here..</h3>
						<form action="#" method="post">
							<input class="form-control" type="search" name="search" placeholder="Search here..."
								required="">
							<button class="btn1" type="submit" name="submit">
								<i class="fas fa-search"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>

					<!--preference -->
					<div class="left-side">
						<h3 class="agileits-sear-head">PRICE</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Backpack</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">Phone Pocket</span>
							</li>

						</ul>
					</div>
					<!-- // preference -->
					<!-- discounts -->
					<div class="left-side">
						<h3 class="agileits-sear-head">Discount</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">5% or More</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">10% or More</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">20% or More</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">30% or More</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">50% or More</span>
							</li>
							<li>
								<input type="checkbox" class="checked">
								<span class="span">60% or More</span>
							</li>
						</ul>
					</div>
					<!-- //discounts -->

					<!-- deals -->
					<div class="deal-leftmk left-side">
						<h3 class="agileits-sear-head">Special Deals</h3>
						<div class="special-sec1">
							<div class="img-deals">
								<img src="images/s1.jpg" alt="">
							</div>
							<div class="img-deal1">
								<h3>Farenheit (Grey)</h3>
								<a href="publicsingle.php">$575.00</a>
							</div>
							<div class="clearfix"></div>
						</div>

					</div>
					<!-- //deals -->
				</div>
				<!-- //product left -->
				<!--/product right-->
				<div class="left-ads-display col-lg-9">
					<div class="wrapper_top_shop">
						<div class="row">
							<div class="col-md-6 shop_left">
								<img src="images/banner3.jpg" alt="">
								<h6>40% off</h6>
							</div>
							<div class="col-md-6 shop_right">
								<img src="images/banner4.jpg" alt="">
								<h6>50% off</h6>
							</div>

						</div>
						<div class="row">
							<?php
							// Retrieve parameters from the URL
							$disposability = isset($_GET['disposability']) ? $_GET['disposability'] : '';

							// Build the SQL query
							$q = "SELECT * FROM `product` WHERE product='contactlense'";

							// Check if disposability is specified, and add a WHERE condition accordingly
							if (!empty($disposability)) {
								$q .= " AND disposability = '$disposability'";
							}

							$res = select($q);

							foreach ($res as $row) {
								// Your existing code for displaying products goes here
								$id = $row['product_id'];
								$name = $row['product_name'];
								$price = $row['actual_price'];
								$cat = $row['category'];

								?>


								<!-- /womens -->
								<div class="col-md-3 product-men women_two shop-gd">
									<div class="product-googles-info googles">
										<div class="men-pro-item">
											<div class="men-thumb-item">
												<img src="images/s1.jpg" class="img-fluid" alt="">
												<div class="men-cart-pro">
													<div class="inner-men-cart-pro">
														<a href="publicsingle.php?id=<?php echo $id; ?>&cat=<?php echo $cat; ?>"
															class="link-product-add-cart">Quick
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
																	<?php echo $name ?>
																</a>
															</h4>
															<div class="grid-price mt-2">
																<span class="money ">
																	<?php echo $price ?>
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
														<form action="#" method="post">
															<input type="hidden" name="cmd" value="_cart">
															<input type="hidden" name="add" value="1">
															<input type="hidden" name="googles_item" value="Farenheit">
															<input type="hidden" name="amount" value="575.00">
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
					</div>
				</div>
				<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Featured Products</h3>
				<div class="mid-slider">
					<div class="owl-carousel owl-theme row">
						<?php


						if (isset($_POST['submit'])) {
							$search = $_POST['search'];
							$q = "SELECT * FROM `product` where category='woman'and  product like '%$search%'";
						} else {

							$q = "SELECT * FROM `product` limit 8";
						}
						$res = select($q);
						foreach ($res as $row) {
							$id = $row['product_id'];

							$name = $row['product_name'];
							$price = $row['actual_price'];


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
															<a href="publicheader.php#login"
																class="link-product-add-cart">Quick
																View</a>
														</div>
														<script>
															$(document).ready(function () {
																// Function to show the login popup
																function showLoginPopup() {
																	$(".overlay-login").fadeIn();
																}

																// Function to hide the login popup
																function hideLoginPopup() {
																	$(".overlay-login").fadeOut();
																}

																// Event listener for the "Quick View" link
																$(".link-product-add-cart").on("click", function (e) {
																	e.preventDefault();
																	showLoginPopup();
																});

																// Event listener for the close button in the login popup
																$(".overlay-close1").on("click", function () {
																	hideLoginPopup();
																});
															});
														</script>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="publicsingle.php">
																		<?php echo $name ?>
																	</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">
																		<?php echo $price ?>
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
		</div>
		<!--//slider-->
	</div>
	</div>
</section>
<!--footer -->
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
						<a href="publicshop.php">Shop</a>
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
<!-- price range (top products) -->
<script src="js/jquery-ui.js"></script>
<script>
	//<![CDATA[ 
	$(window).load(function () {
		$("#slider-range").slider({
			range: true,
			min: 0,
			max: 9000,
			values: [50, 6000],
			slide: function (event, ui) {
				$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
			}
		});
		$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

	}); //]]>
</script>
<!-- //price range (top products) -->

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