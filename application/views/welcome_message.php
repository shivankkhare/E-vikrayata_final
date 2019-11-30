

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>E-Vikrayta</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="<?php echo base_url(); ?>/assets/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">E-Vikrayata</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <!--<li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="explore.html">Explore</a>
                                        <a class="dropdown-item" href="listing.html">Listing</a>
                                        <a class="dropdown-item" href="single-listing.html">Single Listing</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="explore.html">Explore</a>
                                        <a class="dropdown-item" href="listing.html">Listing</a>
                                        <a class="dropdown-item" href="single-listing.html">Single Listing</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                    </div>
                                </li>-->
                                <li class="nav-item">
                                    <a class="nav-link" href="">Contact Us</a>
                                </li>
                            </ul>
                            <!-- Search btn -->
                            <!--<div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
                            </div>-->
                            <!-- Signin btn -->
                            <div class="dorne-signin-btn">
                                <a href="login/hello">register</a>
                            </div>
                            <div class="dorne-signin-btn">
                                <a href="log/hello">login</a>
                            </div>
                            <!-- Add listings btn -->
                            <!--<div class="dorne-add-listings-btn">
                                <a href="#" class="btn dorne-btn">+ Add Listings</a>
                            </div>-->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(<?php echo base_url(); ?>/assets/img/i4.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2>Cultivating Ideas for Growth</h2>
                        <h4>heart of Perfect Farming</h4>
                    </div>
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-farmers-tab" data-toggle="tab" href="#nav-farmers" role="tab" aria-controls="nav-farmers" aria-selected="true">Farmers</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Traders</a>
                            <a class="nav-item nav-link" id="nav-ware-houses-tab" data-toggle="tab" href="#nav-ware-houses" role="tab" aria-controls="nav-ware-houses" aria-selected="false">Ware-houses</a>
                            <a class="nav-item nav-link" id="nav-transports-tab" data-toggle="tab" href="#nav-transports" role="tab" aria-controls="nav-transports" aria-selected="false">Transports</a>
                            <a class="nav-item nav-link" id="nav-labours-tab" data-toggle="tab" href="#nav-labours" role="tab" aria-controls="nav-labours" aria-selected="false">Transports</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-farmers" role="tabpanel" aria-labelledby="nav-farmers-tab">
                                <h6>What are you looking for?</h6>
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Select Locations</option>
                                        <option value="1">Bhopal</option>
                                        <option value="2">indore</option>
                                        
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Items</option>
                                        <option value="1">Wheat</option>
                                        <option value="2">Rice</option>
                                        
                                    </select>
                                    
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-traders" role="tabpanel" aria-labelledby="nav-traders-tab">
                                <h6>What are you looking for?</h6>
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Item</option>
                                        option value="1">Wheat</option>
                                        <option value="2">Rice</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Quantity</option>
                            
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Price Range</option>
                                        <option value="1">$100 - $499</option>
                                        <option value="2">$500 - $999</option>
                                        <option value="3">$1000 - $4999</option>
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-ware-houses" role="tabpanel" aria-labelledby="nav-ware-houses-tab">
                                <h6>What are you looking for?</h6>
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Ware-houses</option>
                                        
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Location</option>
                                        <option value="1">Catagories 1</option>
                                        
                                        <option value="3">Catagories 3</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>storage capacity</option>
                                        <option value="1">$100 - $499</option>
                                        
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-transports" role="tabpanel" aria-labelledby="nav-transports-tab">
                                <h6>What are you looking for?</h6>
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Transport</option>
                                        
                                    </select>
                                    <select class="custom-select">
                                        <option selected>All Catagories</option>
                                        
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Price Range</option>
                                        <option value="1">$100 - $499</option>
                                        <option value="2">$500 - $999</option>
                                        <option value="3">$1000 - $4999</option>
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-labours" role="tabpanel" aria-labelledby="nav-labour-tab">
                                <h6>What are you looking for?</h6>
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Labours</option>
                                        
                                    </select>
                                    <select class="custom-select">
                                        <option selected>No of days</option>
                                        <option value="1">Catagories 1</option>
                                        <option value="2">Catagories 2</option>
                                        <option value="3">Catagories 3</option>
                                    </select>
                                    
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Social Btn -->
        <div class="hero-social-btn">
            <div class="social-title d-flex align-items-center">
                <h6>Follow us on Social Media</h6>
                <span></span>
            </div>
            <div class="social-btns">
                <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->
    <section class="dorne-catagory-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-1.png" alt="">
                                        <a href="#">
                                            <h6 style="font-size: 25px; text-align: center;"><b>Farmers</b></h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-2.png" alt="">
                                        <a href="#">
                                            <h6>Traders</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-3.png" alt="">
                                        <a href="#">
                                            <h6>Ware-Houses</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-4.png" alt="">
                                        <a href="#">
                                            <h6>Transports</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-5.png" alt="">
                                        <a href="#">
                                            <h6>Labours</h6>
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
    <!-- ***** Catagory Area End ***** -->

    <!-- ***** About Area Start ***** -->
    <section class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-content text-center">
                        <h2>bringing Growth in Agriculture</h2>
                        <p>Farmers are the founders of humans civilization’ and where there is civilization or development there is technology. We have come with the thought of connecting the roots of agriculture with technicalities and bring before you our idea in form of web application named <b>“e-vikrayta”</b>. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area End ***** -->

    <!-- ***** Editor Pick Area Start ***** -->
    
    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                           >


                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url(); ?>/assets/js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="<?php echo base_url(); ?>/assets/js/active.js"></script>
</body>

</html>