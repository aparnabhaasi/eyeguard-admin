<?php
session_start();
include 'connection.php';
$user_id = $_SESSION['user_id'];
$qr = "SELECT * FROM tbl_childcart 
        INNER JOIN tbl_mastcart USING(mastcart_id)  
        INNER JOIN product USING(product_id)  
        INNER JOIN users ON users.user_id = tbl_mastcart.user_id 
        INNER JOIN tbl_order USING(mastcart_id) 
        INNER JOIN user_address USING(user_address_id) 
        WHERE tbl_mastcart.user_id = '$user_id'";

$hh = select($qr);


?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta
      name="keywords"
      content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script>
      addEventListener(
        "load",
        function () {
          setTimeout(hideURLbar, 0);
        },
        false
      );

      function hideURLbar() {
        window.scrollTo(0, 1);
      }
    </script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/login_overlay.css" rel="stylesheet" type="text/css" />
    <link href="css/style6.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/shop.css" type="text/css" />
    <link href="css/contact.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <link
      href="//fonts.googleapis.com/css?family=Inconsolata:400,700"
      rel="stylesheet"
    />
    <link
      href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
      rel="stylesheet"
    />

    <style>
      @import url("https://fonts.googleapis.com/css?family=Open+Sans&display=swap");
      body {
        background-color: #eeeeee;
        font-family: "Open Sans", serif;
      }
      .container {
        margin-top: 50px;
        margin-bottom: 50px;
      }
      .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 0.1rem;
      }
      .card-header:first-child {
        border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0;
      }
      .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      }
      .track {
        position: relative;
        background-color: #ddd;
        height: 7px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 60px;
        margin-top: 50px;
      }
      .track .step {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        width: 25%;
        margin-top: -18px;
        text-align: center;
        position: relative;
      }
      .track .step.active:before {
        background: #ff5722;
      }
      .track .step::before {
        height: 7px;
        position: absolute;
        content: "";
        width: 100%;
        left: 0;
        top: 18px;
      }
      .track .step.active .icon {
        background: #ee5435;
        color: #fff;
      }
      .track .icon {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        position: relative;
        border-radius: 100%;
        background: #ddd;
      }
      .track .step.active .text {
        font-weight: 400;
        color: #000;
      }
      .track .text {
        display: block;
        margin-top: 7px;
      }
      .itemside {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
      }
      .itemside .aside {
        position: relative;
        -ms-flex-negative: 0;
        flex-shrink: 0;
      }
      .img-sm {
        width: 80px;
        height: 80px;
        padding: 7px;
      }
      ul.row,
      ul.row-sm {
        list-style: none;
        padding: 0;
      }
      .itemside .info {
        padding-left: 15px;
        padding-right: 7px;
      }
      .itemside .title {
        display: block;
        margin-bottom: 5px;
        color: #212529;
      }
      p {
        margin-top: 0;
        margin-bottom: 1rem;
      }
      .btn-warning {
        color: #ffffff;
        background-color: #ee5435;
        border-color: #ee5435;
        border-radius: 1px;
      }
      .btn-warning:hover {
        color: #ffffff;
        background-color: #ff2b00;
        border-color: #ff2b00;
        border-radius: 1px;
      }
    </style>
  </head>

  <body>
    <div class="banner-top container-fluid" id="home">
      <!-- header -->
      <header>
        <div class="row">
          <div class="col-md-3 top-info text-left mt-lg-4">
            <h6>Need Help</h6>
            <ul>
              <li><i class="fas fa-phone"></i> Call</li>
              <li class="number-phone mt-3">12345678099</li>
            </ul>
          </div>
          <div class="col-md-6 logo-w3layouts text-center">
            <h1 class="logo-w3layouts">
              <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="" width="300" />
              </a>
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
                  <input type="hidden" name="cmd" value="_cart" />
                  <input type="hidden" name="display" value="1" />
                  <button
                    class="top_googles_cart"
                    type="submit"
                    name="submit"
                    value=""
                  >
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
                  <form action="#" method="post">
                    <div class="form-group">
                      <label class="mb-2">Email address</label>
                      <input
                        type="email"
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        placeholder=""
                        required=""
                      />
                      <small id="emailHelp" class="form-text text-muted"
                        >We'll never share your email with anyone else.</small
                      >
                    </div>
                    <div class="form-group">
                      <label class="mb-2">Password</label>
                      <input
                        type="password"
                        class="form-control"
                        id="exampleInputPassword1"
                        placeholder=""
                        required=""
                      />
                    </div>
                    <div class="form-check mb-2">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="exampleCheck1"
                      />
                      <label class="form-check-label" for="exampleCheck1"
                        >Check me out</label
                      >
                    </div>
                    <button type="submit" class="btn btn-primary submit mb-4">
                      Sign In
                    </button>
                  </form>
                </div>
                <!---->
              </div>
            </div>
            <!---->
          </div>
        </div>
        <div class="search">
          <div class="mobile-nav-button">
            <button id="trigger-overlay" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
          <!-- open/close -->
          <div class="overlay overlay-door">
            <button type="button" class="overlay-close">
              <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <form action="#" method="post" class="d-flex">
              <input
                class="form-control"
                type="search"
                placeholder="Search here..."
                required=""
              />
              <button type="submit" class="btn btn-primary submit">
                <i class="fas fa-search"></i>
              </button>
            </form>
          </div>
          <!-- open/close -->
        </div>
        <label class="top-log mx-auto"></label>
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2"
        >
          <button
            class="navbar-toggler mx-auto"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-mega mx-auto">
              <li class="nav-item">
                <a class="nav-link ml-lg-0" href="index.html"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Features
                </a>
                <ul class="dropdown-menu mega-menu">
                  <li>
                    <div class="row">
                      <div class="col-md-4 media-list span4 text-left">
                        <h5 class="tittle-w3layouts-sub">Tittle goes here</h5>
                        <ul>
                          <li class="media-mini mt-3">
                            <a href="shop.html">Designer Glasses</a>
                          </li>
                          <li class="">
                            <a href="shop.html"> Ray-Ban</a>
                          </li>
                          <li>
                            <a href="shop.html">Prescription Glasses</a>
                          </li>
                          <li class="mt-3">
                            <h5>View more pages</h5>
                          </li>
                          <li class="mt-2">
                            <a href="about.html">About</a>
                          </li>
                          <li>
                            <a href="customer.html">Customers</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-4 media-list span4 text-left">
                        <h5 class="tittle-w3layouts-sub">Tittle goes here</h5>
                        <div class="media-mini mt-3">
                          <a href="shop.html">
                            <img src="images/g2.jpg" class="img-fluid" alt="" />
                          </a>
                        </div>
                      </div>
                      <div class="col-md-4 media-list span4 text-left">
                        <h5 class="tittle-w3layouts-sub">Tittle goes here</h5>
                        <div class="media-mini mt-3">
                          <a href="shop.html">
                            <img src="images/g3.jpg" class="img-fluid" alt="" />
                          </a>
                        </div>
                      </div>
                    </div>
                    <hr />
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown1"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Shop
                </a>
                <ul class="dropdown-menu mega-menu">
                  <li>
                    <div class="row">
                      <div class="col-md-4 media-list span4 text-left">
                        <h5 class="tittle-w3layouts-sub">Tittle goes here</h5>
                        <ul>
                          <li class="media-mini mt-3">
                            <a href="shop.html">Designer Glasses</a>
                          </li>
                          <li class="">
                            <a href="shop.html"> Ray-Ban</a>
                          </li>
                          <li>
                            <a href="shop.html">Prescription Glasses</a>
                          </li>
                          <li>
                            <a href="shop.html">Rx Sunglasses</a>
                          </li>
                          <li>
                            <a href="shop.html">Contact Lenses</a>
                          </li>
                          <li>
                            <a href="shop.html">Multifocal Glasses</a>
                          </li>
                          <li>
                            <a href="shop.html">Kids Glasses</a>
                          </li>
                          <li>
                            <a href="shop.html">Lightweight Glasses</a>
                          </li>
                          <li>
                            <a href="shop.html">Sports Glasses</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-4 media-list span4 text-left">
                        <h5 class="tittle-w3layouts-sub">Tittle goes here</h5>
                        <ul>
                          <li class="media-mini mt-3">
                            <a href="shop.html">Brooks Brothers</a>
                          </li>
                          <li>
                            <a href="shop.html">Persol</a>
                          </li>
                          <li>
                            <a href="shop.html">Polo Ralph Lauren</a>
                          </li>
                          <li>
                            <a href="shop.html">Prada</a>
                          </li>
                          <li>
                            <a href="shop.html">Ray-Ban Jr</a>
                          </li>
                          <li>
                            <a href="shop.html">Sferoflex</a>
                          </li>
                        </ul>
                        <ul class="sub-in text-left">
                          <li>
                            <a href="shop.html">Polo Ralph Lauren</a>
                          </li>
                          <li>
                            <a href="shop.html">Prada</a>
                          </li>
                          <li>
                            <a href="shop.html">Ray-Ban Jr</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-4 media-list span4 text-left">
                        <h5 class="tittle-w3layouts-sub-nav">
                          Tittle goes here
                        </h5>
                        <div class="media-mini mt-3">
                          <a href="shop.html">
                            <img src="images/g1.jpg" class="img-fluid" alt="" />
                          </a>
                        </div>
                      </div>
                    </div>
                    <hr />
                  </li>
                </ul>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
    </div>
    <!--// header_top -->
    <!-- top Products -->
    <?php 
    $user_id=$_SESSION['user_id'];
    $users="select * from users inner join user_address using(user_id) where user_id='$user_id'";
    $res67=select($users);
    ?>
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
      <div class="container">
        <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Profile</h3>
        <div class="inner_sec">
          
          <div class="address row">
            <div class="col-lg-4 address-grid">
              <div class="row address-info">
                <div class="col-md-3 address-left text-center">
                  <i class="far fa-map"></i>
                </div>
                <div class="col-md-9 address-right text-left">
                  <h6>Name</h6>
                  <p><?php echo $res67[0]['name'];?></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 address-grid">
              <div class="row address-info">
                <div class="col-md-3 address-left text-center">
                  <i class="far fa-envelope"></i>
                </div>
                <div class="col-md-9 address-right text-left">
                  <h6>Email</h6>
                  <p>
                    <a href="mailto:example@email.com"><?php echo $res67[0]['email'];?></a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 address-grid">
              <div class="row address-info">
                <div class="col-md-3 address-left text-center">
                  <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="col-md-9 address-right text-left">
                  <h6>Phone</h6>
                  <p><?php echo $res67[0]['phone'];?></p>
                </div>
              </div>
            </div>
          </div>

          <?php 
    $user_id = $_SESSION['user_id'];
    $userss = "SELECT * FROM users 
               INNER JOIN user_address USING(user_id) 
               INNER JOIN tbl_mastcart USING(user_id) 
               INNER JOIN tbl_childcart USING(mastcart_id) 
               INNER JOIN tbl_order USING(user_address_id) 
               INNER JOIN product USING(product_id) 
               WHERE user_id='$user_id'";
    $res674 = select($userss);

    // Calculate delivery date
    $order_date = $res674[0]['order_date'];
    $estimated_delivery_date = date('d F Y', strtotime($order_date . ' + 7 days'));
?>

<!-- Order Tracking -->
<div class="container mt-5">
    <h4 class="mb-3">Track your order</h4>
    <article class="card">
        <header class="card-header">My Orders / Tracking</header>
        <div class="card-body">
            <h6>Order ID: OD45345345435</h6>
            <article class="card mt-3">
                <div class="card-body row">
                    <div class="col">
                        <strong>Estimated Delivery date:</strong> <br /><?php echo $estimated_delivery_date; ?>
                    </div>
                    <div class="col">
                        <strong>Address:</strong> <br />
                        <?php echo $res674[0]['address'];?> <br> <i class="fa fa-phone"></i> <?php echo $res674[0]['phone'];?>
                    </div>
                    <div class="col">
                        <strong>Product name:</strong> <br />
                        <?php echo $res674[0]['product_name'];?>
                    </div>
                </div>
            </article>
        </div>
    </article>
</div>

                <?php 
$user_id = $_SESSION['user_id'];

// Query for orders with status 'pending'
$pending_query = "SELECT * FROM users
                  INNER JOIN user_address USING(user_id)
                  INNER JOIN tbl_mastcart USING(user_id)
                  INNER JOIN tbl_childcart USING(mastcart_id)
                  INNER JOIN tbl_order USING(user_address_id)
                  INNER JOIN product USING(product_id)
                  WHERE user_id='$user_id' AND status='pending'";
$res_pending = select($pending_query);

// Query for orders with status 'shipped'
$shipped_query = "SELECT * FROM users
                  INNER JOIN user_address USING(user_id)
                  INNER JOIN tbl_mastcart USING(user_id)
                  INNER JOIN tbl_childcart USING(mastcart_id)
                  INNER JOIN tbl_order USING(user_address_id)
                  INNER JOIN product USING(product_id)
                  WHERE user_id='$user_id' AND status='shipped'";
$res_shipped = select($shipped_query);

// Function to display tracker
function displayTracker($status) {
    echo '<div class="track">';
    echo '<div class="step active"><span class="icon"> <i class="fa fa-check"></i> </span><span class="text">Order confirmed</span></div>';
    if ($status == 'shipped') {
        echo '<div class="step active"><span class="icon"> <i class="fa fa-user"></i> </span><span class="text"> Shipped</span></div>';
    } else {
        echo '<div class="step"><span class="icon"> <i class="fa fa-user"></i> </span><span class="text"> Shipped</span></div>';
    }
    echo '<div class="step"><span class="icon"> <i class="fa fa-truck"></i> </span><span class="text"> Out for delivery </span></div>';
    echo '<div class="step"><span class="icon"> <i class="fa fa-box"></i> </span><span class="text">Delivered</span></div>';
    echo '</div>';
}

// Display tracker based on status
if ($res_pending) {
    displayTracker('pending');
}

if ($res_shipped) {
    displayTracker('shipped');
}
?>

          <!-- previous orders -->
          <div class="container mt-5">
            <h4 class="mb-3">Previous orders</h4>

            <?php
            $i = 1;
            foreach ($hh as $row) {
                $oid = $row['order_id'];
                $user = $row['name'];
                $order_date = $row['order_date'];
                $status = $row['cart_status'];
                $product = $row['product_name'];
                $mobile = $row['mobile_number'];
                $total = $row['tot_amount'];
                $order_date = $row['order_date'];
                $adress= $row['address'];
                ?>
            <article class="card my-3">
              <header class="card-header">Delivered on: <?php echo $estimated_delivery_date; ?></header>
              <div class="card-body">
                <h6>Order ID: <?php echo $oid; ?></h6>
                <article class="card mt-3">
                  <div class="card-body row align-items-center">
                    <div class="col">
                      <img src="images/s5.jpg" alt="" width="100">
                    </div>
                    <div class="col">
                      <strong>Shipping BY:</strong> <br />
                      EyeGuard| <i class="fa fa-phone"></i> +91 92837 46349
                    </div>
                    <div class="col">
                      <strong>Product:</strong> <br />
                      <?php echo $product; ?>
                    </div>
                    
                  </div>
                </article>
              </div>
            </article>
<?php } ?>
            


          </div>

          
        </div>
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
              <p>
                Curabitur non nulla sit amet nislinit tempus convallis quis ac
                lectus. lac inia eget consectetur sed, convallis at tellus.
                Nulla porttitor accumsana tincidunt.
              </p>
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
                <p>
                  Email :
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
                <a href="index.html">Home</a>
              </li>
              <li>
                <a href="about.html">About</a>
              </li>
              <li>
                <a href="404.html">Error</a>
              </li>
              <li>
                <a href="shop.html">Shop</a>
              </li>
              <li>
                <a href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 footer-grid-w3ls">
            <div class="footer-title">
              <h3>Sign up for your offers</h3>
            </div>
            <div class="footer-text">
              <p>
                By subscribing to our mailing list you will always get latest
                news and updates from us.
              </p>
              <form action="#" method="post">
                <input
                  class="form-control"
                  type="email"
                  name="Email"
                  placeholder="Enter your email..."
                  required=""
                />
                <button class="btn1">
                  <i class="far fa-envelope" aria-hidden="true"></i>
                </button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="copyright-w3layouts mt-4">
          <p class="copy-right text-center">
            &copy; 2018 Goggles. All Rights Reserved | Design by
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

      googles.cart.on("googles_checkout", function (evt) {
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
          $(this).toggleClass("btn-open").toggleClass("btn-close");
        });
      });
      $(".overlay-close1").on("click", function () {
        $(".overlay-login").fadeToggle(200);
        $(".button-log a").toggleClass("btn-open").toggleClass("btn-close");
        open = false;
      });
    </script>
    <!-- carousel -->
    <!-- dropdown nav -->
    <script>
      $(document).ready(function () {
        $(".dropdown").hover(
          function () {
            $(".dropdown-menu", this).stop(true, true).slideDown("fast");
            $(this).toggleClass("open");
          },
          function () {
            $(".dropdown-menu", this).stop(true, true).slideUp("fast");
            $(this).toggleClass("open");
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
          $("html,body").animate(
            {
              scrollTop: $(this.hash).offset().top,
            },
            900
          );
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
          easingType: "easeOutQuart",
        });
      });
    </script>
    <!--// end-smoth-scrolling -->

    <script src="js/bootstrap.js"></script>
    <!-- js file -->
  </body>
</html>
