
<?php include 'connection.php'?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Goggles Ecommerce Category Bootstrap responsive Web Template | Single :: w3layouts</title>
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
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
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
						<a class="navbar-brand" href="index.html">
							<img src="images/logo.png" alt="" width="200"> </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
    <ul class="cart-inner-info">
        <li class="button-log">
            <div class="dropdown">
                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="fa fa-user" aria-hidden="true">
                        <?php
                        // Check if the username session variable is set
                        if (isset($_SESSION['name'])) {
                            echo $_SESSION['name'];
                        }
                        ?>
                    </span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="my_orders.php">Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </li>
        <li class="galssescart galssescart2 cart cart box_1">
            <a href="cart.php">
                <button class="" type="submit" name="submit" value="">
                    My Cart
                    <i class="fas fa-cart-arrow-down"></i>
                </button>
            </a>
        </li>
    </ul>
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
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
														<img src="images/man-s.jpg" alt=""
															style="width: 50px; height: 50px; border-radius: 50%;">
														MEN
													</a>
												</li>
												<hr>
												<li class="">
													<a href="women.php?product=eyeglass">
														<img src="images/woman-s.jpg" alt=""
															style="width: 50px; height: 50px; border-radius: 50%;">
														WOMEN
													</a>
												</li>
												<hr>
												<li>
													<a href="kids.php?product=eyeglass">
														<img src="images/kid-s.jpg" alt=""
															style="width: 50px; height: 50px; border-radius: 50%;">
														KIDS
													</a>
												</li>


											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left mb-4">
											<h6> Our Top Picks </h6>
											<ul>
												<li class="media-mini mt-3 mb-1">

													<a href="#new" class="load-section">New Arrivals</a>
												</li>
												<hr>
												<li class="mb-1">
													<a href="#unisex" class="load-section">Unisex</a>
												</li>
												<script>
													$(document).ready(function () {
														$(".load-section").click(function (e) {
															e.preventDefault(); // Prevent default link behavior

															// Get the target section's ID from the link's href attribute
															var targetId = $(this).attr("href");

															// Scroll to the target section
															$("html, body").animate({
																scrollTop: $(targetId).offset().top
															}, 1000); // You can adjust the duration as needed
														});
													});
												</script>

												<hr>
												<li class="mb-1">
													<a href="shop.php?product=computerglass">Computer
														Eyeglasses</a>
												</li>

												<hr>
												<li class="mb-1">
													<a href="shop.php?product=sunglass">Tinted Eyeglasses</a>
												</li>

											</ul>


										</div>
										<div class="col-md-4 media-list span4 text-left mb-4">
											<h6> Frame Type </h6>
											<ul>
												<li class="media-mini mt-3 mb-1">

													<a href="shop.php?frameType=Rectangle Frame">Rectangle
														Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Wayfarer Frames">Wayfarer
														Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Round Frames">Round Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Aviator Frames">Aviator Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Cat-Eye Frames">Cat-Eye Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Rimless Frames">Rimless Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Halfrim Frames">Halfrim Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Geometric Frames">Geometric
														Frames</a>
												</li>
											</ul>


										</div>

									</div>
									<hr>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
														<img src="images/man-s.jpg" alt=""
															style="width: 50px; height: 50px; border-radius: 50%;">
														MEN
													</a>
												</li>
												<hr>
												<li class="">
													<a href="women.php?product=sunglass">
														<img src="images/woman-s.jpg" alt=""
															style="width: 50px; height: 50px; border-radius: 50%;">
														WOMEN
													</a>
												</li>
												<hr>
												<li>
													<a href="kids.php?product=sunglass">
														<img src="images/kid-s.jpg" alt=""
															style="width: 50px; height: 50px; border-radius: 50%;">
														KIDS
													</a>
												</li>


											</ul>
										</div>

										<div class="col-md-4 media-list span4 text-left mb-4">
											<h6> Frame Type </h6>
											<ul>
												<li class="media-mini mt-3 mb-1">

													<a href="shop.php?frameType=Rectangle Frame">Rectangle
														Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Wayfarer Frames">Wayfarer
														Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Round Frames">Round Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Aviator Frames">Aviator Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Cat-Eye Frames">Cat-Eye Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Rimless Frames">Rimless Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Halfrim Frames">Halfrim Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Geometric Frames">Geometric
														Frames</a>
												</li>
											</ul>


										</div>
										<div class="col-md-4 media-list span4 text-left">

											<h6> <a class="text-danger" href="shop.php?product=sunglass">Shop
													Now</a> </h6>
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
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
														<img src="images/man-s.jpg" alt=""
															style="width: 50px; height: 50px; border-radius: 50%;">
														MEN
													</a>
												</li>
												<hr>
												<li class="">
													<a href="women.php?product=computerglass">
														<img src="images/woman-s.jpg" alt=""
															style="width: 50px; height: 50px; border-radius: 50%;">
														WOMEN
													</a>
												</li>
												<hr>
												<li>
													<a href="kids.php?product=computerglass">
														<img src="images/kid-s.jpg" alt=""
															style="width: 50px; height: 50px; border-radius: 50%;">
														KIDS
													</a>
												</li>


											</ul>
										</div>

										<div class="col-md-4 media-list span4 text-left mb-4">
											<h6> Frame Type </h6>
											<ul>
												<li class="media-mini mt-3 mb-1">

													<a href="shop.php?frameType=Rectangle Frame">Rectangle
														Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Wayfarer Frames">Wayfarer
														Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Round Frames">Round Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Aviator Frames">Aviator Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Cat-Eye Frames">Cat-Eye Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Rimless Frames">Rimless Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Halfrim Frames">Halfrim Frames</a>
												</li>
												<li class="mb-1">
													<a href="shop.php?frameType=Geometric Frames">Geometric
														Frames</a>
												</li>
											</ul>


										</div>
										<div class="col-md-4 media-list span4 text-left">

											<h6> <a class="text-danger" href="shop.php?product=computerglass">Shop
													Now</a> </h6>
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
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Contact lenses
							</a>
							<ul class="dropdown-menu mega-menu ">
								<li>
									<div class="row">


										<!-- Disposability Links -->
										<div class="col-md-6 media-list span4 text-left mb-4">
											<h6> Disposability </h6>
											<ul>
												<li class="media-mini mt-3 mb-1">
													<a href="lense.php?disposability=Daily">Daily Disposable</a>
												</li>
												<li class="mb-1">
													<a href="lense.php?disposability=TwoWeekly">Two Weekly
														Disposable</a>
												</li>
												<li class="mb-1">
													<a href="lense.php?disposability=Monthly">Monthly
														Disposable</a>
												</li>
												<li class="mb-1">
													<a href="lense.php?disposability=Yearly">Yearly Disposable</a>
												</li>
											</ul>
										</div>

										<div class="col-md-6 media-list span4 text-left">

											<h6> <a class="text-danger" href="lense.php">Shop Now</a> </h6>
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
		<!--//banner -->
		<!--/shop-->
		<?php

$id= $_GET['id'];
$cat= $_GET['cat'];
if($cat == 'None'){ // Corrected the condition structure
    $q = "SELECT * FROM `product`"; // Added missing quote here
    $ress = select($q);
	$name= $ress[0]['product_name'];
$aprice= $ress[0]['actual_price'];
$sprice= $ress[0]['selling_price'];
$category= $ress[0]['category'];
$type= $ress[0]['frame_type'];
$image= $ress[0]['product_image'];
$details= $ress[0]['details'];
$description= $ress[0]['description'];
$info= $ress[0]['information'];
$image2= $ress[0]['product_image2'];
$image3= $ress[0]['product_image3'];
$image4= $ress[0]['product_image4'];
}else{

$q = "SELECT * FROM `product` WHERE category='$cat' AND product_id='$id'";
$res = select($q);


$name= $res[0]['product_name'];
$aprice= $res[0]['actual_price'];
$sprice= $res[0]['selling_price'];
$category= $res[0]['category'];
$type= $res[0]['frame_type'];
$image= $res[0]['product_image'];
$details= $res[0]['details'];
$description= $res[0]['description'];
$info= $res[0]['information'];
$image2= $res[0]['product_image2'];
$image3= $res[0]['product_image3'];
$image4= $res[0]['product_image4'];
}
$q1 = "SELECT * FROM `package`";
$res1 = select($q1);

foreach($res1 as $row1)
$pid=$row1['package_id'];
$title= $row1['title'];
$package= $row1['package'];
$prize= $row1['prize'];
?>
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
					<div class="row">
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
					
											<ul class="slides">
												<li data-thumb="images/d2.jpg">
													<div class="thumb-image"> <img src="<?php echo $image; ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												<li data-thumb="images/d1.jpg">
													<div class="thumb-image"> <img src="<?php echo $image2; ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												<li data-thumb="images/d3.jpg">
													<div class="thumb-image"> <img src="<?php echo $image3; ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									<h2><?php echo $name; ?></h2>
									<p><span class="item_price"><?php echo $aprice; ?></span>
										<del><?php echo $sprice; ?></del>
									</p>
									<p class="text-secondary"><?php echo $category; ?></p>
									<p><?php echo $type; ?></p><br>

									<div class="p-3">
										<button class="btn btn-info w-100 py-3" data-toggle="modal" data-target="#exampleModalCenter">SELECT LENSES</button>
									</div>

  
									<!-- Modal -->
									<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Choose lens package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php foreach($res1 as $row1) { ?>
                    <div class="container d-fle">
                        <div class="p-4 border">
                            <p><?php echo $row1['title']; ?></p>
                            <p><?php echo $row1['package']; ?> <?php echo $row1['prize']; ?></p>
							<input type="hidden" id="" name="package_id" value="<?php echo $id?>">
							<button class="btn btn-primary buy-now" data-package="<?php echo $row1['title']; ?> - <?php echo $row1['package']; ?> <?php echo $row1['prize'];?>" data-package-id="<?php echo $row1['package_id']; ?>">Buy now</button>
</div>
                    </div>
                <?php } ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="selectedPackage" name="package" rows="4" cols="50">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".buy-now").click(function() {
            var packageDetails = $(this).attr('data-package');
            var packageID = $(this).attr('data-package-id'); // Retrieve package ID
            $("#selectedPackage").val(packageDetails);

            // Set package ID to a hidden input field for passing to PHP
            $("#hiddenPackageID").val(packageID);

            $('#exampleModalCenter').modal('hide');
        });
    });
</script>



									<div class="container p-3">
										<ul>
											<li class="mt-2"><?php echo $details; ?></li>
											<!-- <li class="mt-2">Product details</li>
											<li class="mt-2">Product details</li>
											<li class="mt-2">Product details</li> -->
										</ul>
										<br>
									</div>
									
									<div class="occasion-cart mt-3">
    <div class="googles single-item singlepage">
     

	<form action="add_cart.php?id=<?php echo $id; ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="price" value="<?php echo $sprice; ?>">
                <input type="hidden" id="hiddenPackageID" name="package_id" value="">
                <button type="submit" name="submit" class="googles-cart pgoogles-cart p-3 px-5 w-100">
                    Add to Cart
                </button>
            </form>
    
    </div>
</div>
									</div>
									
			
								</div>
								<div class="clearfix"> </div>
								<!--/tabs-->
								<div class="responsive_tabs">
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											<li>Description</li>
											<li>Reviews</li>
											<li>Information</li>
										</ul>
										<div class="resp-tabs-container">
											<!--/tab_one-->
											<div class="tab1">
					
												<div class="single_page">
													<h6>Lorem ipsum dolor sit amet</h6>
													<p><?php echo $description; ?></p>
													<p class="para"><?php echo $info; ?></p>
												</div>
											</div>
											<!--//tab_one-->
											<div class="tab2">
					
												<div class="single_page">
													<div class="bootstrap-tab-text-grids">
														<div class="bootstrap-tab-text-grid">
															<div class="bootstrap-tab-text-grid-left">
																<img src="images/team1.jpg" alt=" " class="img-fluid">
															</div>
															<div class="bootstrap-tab-text-grid-right">
																<ul>
																	<li><a href="#">Admin</a></li>
																	<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
																</ul>
																<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
																	quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
																	autem vel eum iure reprehenderit.</p>
															</div>
															<div class="clearfix"> </div>
														</div>
														<div class="add-review">
															<h4>add a review</h4>
															<form action="#" method="post">
																	<input class="form-control" type="text" name="Name" placeholder="Enter your email..." required="">
																<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
																<textarea name="Message" required=""></textarea>
																<input type="submit" value="SEND">
															</form>
														</div>
													</div>
					
												</div>
											</div>
											<div class="tab3">
					
												<div class="single_page">
													<h6>Irayz Butterfly Sunglasses  (Black)</h6>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
														blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
														ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
														magna aliqua.</p>
													<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
														blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
														ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
														magna aliqua.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--//tabs-->
					
					</div>
				</div>
			</div>
				<div class="container-fluid">
					<!--/slide-->
					<div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
						<!--//banner-sec-->
						<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Featured Products</h3>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/s5.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.php" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.php">Fastrack Aviator </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">₹325.00</span>
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
																	<input type="hidden" name="googles_item" value="Fastrack Aviator">
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
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/s6.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.php" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.php">MARTIN Aviator </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">₹425.00</span>
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
																	<input type="hidden" name="googles_item" value="MARTIN Aviator">
																	<input type="hidden" name="amount" value="425.00">
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
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/s7.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.php" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.php">Royal Son Aviator </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">₹425.00</span>
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
																	<input type="hidden" name="googles_item" value="Royal Son Aviator">
																	<input type="hidden" name="amount" value="425.00">
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
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/s8.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.php" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.php">Irayz Butterfly </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">₹281.00</span>
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
																	<input type="hidden" name="googles_item" value="Irayz Butterfly">
																	<input type="hidden" name="amount" value="281.00">
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
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/s9.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.php" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.php">Jerry Rectangular </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">₹525.00</span>
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
																	<input type="hidden" name="googles_item" value="Jerry Rectangular ">
																	<input type="hidden" name="amount" value="525.00">
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
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="images/s10.jpg" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="single.php" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.php">Herdy Wayfarer </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">₹325.00</span>
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
																		<input type="hidden" name="googles_item" value="Royal Son Aviator">
																		<input type="hidden" name="amount" value="425.00">
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
							</div>
						</div>
					</div>
					<!--//slider-->
				</div>
		</section>
		
		<!--footer -->
		<footer class="py-lg-5 py-3">
			<div class="container-fluid px-lg-5 px-3">
				<div class="row footer-top-w3layouts">
					<div class="col-lg-3 footer-grid-w3ls">
						<div class="footer-title">
							<h3>About Us</h3>
						</div>
						<div class="footer-text">
							<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at
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
								<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
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

					for (i = 0, len = items.length; i < len; i++) {}
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

		<!-- single -->
		<script src="js/imagezoom.js"></script>
		<!-- single -->
		<!-- script for responsive tabs -->
		<script src="js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- FlexSlider -->
		<script src="js/jquery.flexslider.js"></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider1').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
		<!-- //FlexSlider-->

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
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
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