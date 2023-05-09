<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Single Product View</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex,follow">
     

        <!-- Favicon -->
        <link href="../img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <!-- Social media icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/util.css">
	    <link rel="stylesheet" type="text/css" href="../css/man.css">

        <!-- PRODDUCT AND EXTRA -->
        <!-- Below line is for the social media icons and the icons for single product view -->
        <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">

        <!-- Below line is for the review section, star rating and icons -->
        <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">

        <!-- Allows sqitching btn description, additional info and review sections -->
        <link rel="stylesheet" type="text/css" href="../fonts/linearicons-v1.0.0/icon-font.min.css">


        <!-- For the books format section -->
        <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">


       <!-- Does not affect filter -->
        <!-- <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="../vendor/slick/slick.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="../vendor/MagnificPopup/magnific-popup.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css"> -->

    </head>
    
    <body>
        <header>
            <!-- Navbar Start -->
            <div class="container-fluid fixed-top px-0 wow fadeIn show bg-white position-fixed text-primary" data-wow-delay="0.1s">
                <div style="color:aliceblue;" class="top-bar row gx-0 align-items-center d-none d-lg-flex">
                    <div class="col-lg-6 px-5 text-start">
                        <small><i class="fa fa-map-marker" aria-hidden="true"></i> 123 Street, Accra, Ghana</small>
                        <small class="ms-4"><i class="fa fa-envelope me-2"></i>ormanent@gmail.com</small>
                    </div>
                    <div class="col-lg-6 px-5 text-end" >
                        <small>Follow us:</small>
                        <a class="text-body ms-3" href=""><i class="fab fa-facebook-f" style="color:aliceblue;"></i></a>
                        <a class="text-body ms-3" href=""><i class="fab fa-twitter" style="color:aliceblue;"></i></a>
                        <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in" style="color:aliceblue;"></i></a>
                        <a class="text-body ms-3" href=""><i class="fab fa-instagram" style="color:aliceblue;"></i></a>
                    </div>
                </div>

                <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.php" class="navbar-author ms-4 ms-lg-0">
                        <h1 class="fw-bold text-primary m-0">O<span class="text-secondary">rm</span>an</h1>
                    </a>
                    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto p-4 p-lg-0">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="about.php" class="nav-item nav-link">About Us</a>
                            <a href="product.php" class="nav-item nav-link active">Products</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0">
                                    <a href="" class="dropdown-item">Blog Grid</a>
                                    <a href="" class="dropdown-item">Our Features</a>
                                    <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                    <a href="404.php" class="dropdown-item">404 Page</a>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                        </div>

                        <div class="d-none d-lg-flex ms-2">
                            <!-- <form action="product_search_results.php" method="GET">
                                <div class="search-box">
                                    <i class="material-icons"></i>
                                    <input type="text" class="form-control" name="search" placeholder="Search by keyword(s)..">
                                    <button type="submit" class="fa fa-search text-body">Search</button>
                                </div> -->
                            </form>

                            <!-- Search -->
                            <a class="btn-sm-square bg-white rounded-circle ms-3" href="product_search_results.php">
                                <small class="fa fa-search text-body"></small>
                            </a>
                            <!-- Login/logout -->
                            <a class="btn-sm-square bg-white rounded-circle ms-3" href="../login/logout.php">
                                <small class="fa fa-user text-body"></small>
                            </a>
                            <!-- Cart -->
                            <a class="btn-sm-square bg-white rounded-circle ms-3" href="cart.php">
                                <small class="fa fa-shopping-bag text-body"></small>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Navbar End -->

            <!-- Page Header Start -->
            <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <!-- <h1 class="display-3 mb-3 animated slideInDown">Our Products</h1> -->
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a class="text-body" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-dark active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header End -->
        </header>

        <!-- breadcrumb -->
        <div class="container">
            <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
                <a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
                    Home
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>

                <a href="product.php" class="stext-109 cl8 hov-cl1 trans-04">
                    Products
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>

                <span class="stext-109 cl4">
                    Single View
                </span>
            </div>
        </div>


        <!-- Product Detail -->
        <section class="sec-product-detail bg0 p-t-65 p-b-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7 p-b-30">
                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                            <div class="wrap-slick3 flex-sb flex-w">
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                                <?php
                                    include("../controllers/product_controller.php");
                                    // fetching all the products.
                                    $pid = $_GET['pid'];
                                    $product = select_a_product_ctr($pid);

                                    // print_r($product);
                                ?>

                                <!-- IMAGE -->
                                <div class="slick3 gallery-lb">
                                    <div class="item-slick3" data-thumb="<?php echo $product['product_image'];?>">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="<?php echo $product['product_image'];?>" alt="IMG-PRODUCT">

                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php echo $product['product_image'];?>">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                      
                    <!-- TITLE -->
                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            <?php echo $product['product_title']?>
                            </h4>

                            <!-- PRICE -->
                            <span class="mtext-106 cl2"> 
                            GHS <?php echo $product['product_price']?>
                            </span>

                            <!-- CATEGORY-->
                            <p class="stext-102 cl3 p-t-23"><b>Category name: </b>
                            <?php echo $product['cat_name']?>
                            </p>

                             <!-- Author -->
                             <p class="stext-102 cl3 p-t-23">Author: 
                             <?php echo $product['author_name']?>
                            </p>

                             <!-- DESCRIPTION -->
                             <p class="stext-102 cl3 p-t-23"><b>Book Description: </b> 
                            <br>
                            <?php echo $product['product_desc']?>
                            </p>
                            
                            <!--  -->
                            <div class="p-t-33">
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        Format
                                    </div>

                                    <div class="size-204 respon6-next">
                                        <div class="rs1-select2 bor8 bg0">
                                            <select class="js-select2" name="time">
                                                <option>Choose an option</option>
                                                <option>Paperback</option>
                                                <option>Hard Cover</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-204 flex-w flex-m respon6-next">
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>

                                            <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>
                                        
                                        <a href='../actions/add_to_cart.php?pid=<?php echo $pid; ?>'>
                                        <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                            Add to cart
                                        </button></a>
                                    </div>
                                </div>	
                            </div>

                            <!--SOCIAL MEDIA  -->
                            <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                                <div class="flex-m bor9 p-r-10 m-r-11">
                                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                </div>

                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>

                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>

                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bor10 m-t-50 p-t-43 p-b-40">
                    <!-- Tab01 -->
                    <div class="tab01">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item p-b-10">
                                <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
                            </li>

                            <li class="nav-item p-b-10">
                                <a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
                            </li>

                            <!-- REVIEW COUNT TO BE DONE -->
                            <li class="nav-item p-b-10">
                                <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-t-43">
                            <!-- Description -->
                            <div class="tab-pane fade show active" id="description" role="tabpanel">
                                <div class="how-pos2 p-lr-15-md">
                                    <p class="stext-102 cl6">
                                        Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
                                    </p>
                                </div>
                            </div>

                            <!-- Additional Information -->
                            <div class="tab-pane fade" id="information" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                        <ul class="p-lr-28 p-lr-15-sm">
                                            <li class="flex-w flex-t p-b-7">
                                                <span class="stext-102 cl3 size-205">
                                                    Weight
                                                </span>

                                                <span class="stext-102 cl6 size-206">
                                                    0.79 kg
                                                </span>
                                            </li>

                                            <li class="flex-w flex-t p-b-7">
                                                <span class="stext-102 cl3 size-205">
                                                    Dimensions
                                                </span>

                                                <span class="stext-102 cl6 size-206">
                                                    110 x 33 x 100 cm
                                                </span>
                                            </li>

                                            <li class="flex-w flex-t p-b-7">
                                                <span class="stext-102 cl3 size-205">
                                                    Materials
                                                </span>

                                                <span class="stext-102 cl6 size-206">
                                                    Paper
                                                </span>
                                            </li>
                                        
                                            <li class="flex-w flex-t p-b-7">
                                                <span class="stext-102 cl3 size-205">
                                                    Format
                                                </span>

                                                <span class="stext-102 cl6 size-206">
                                                    Paperback, Hardcover
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Review section -->
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                        <div class="p-b-30 m-lr-15-sm">
                                            <!-- Review -->
                                            <div class="flex-w flex-t p-b-68">
                                                <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                                    <img src="images/avatar-01.jpg" alt="AVATAR">
                                                </div>

                                                <div class="size-207">
                                                    <div class="flex-w flex-sb-m p-b-17">
                                                        <span class="mtext-107 cl2 p-r-20">
                                                            Bruce Lee
                                                        </span>

                                                        <span class="fs-18 cl11">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </span>
                                                    </div>

                                                    <p class="stext-102 cl6">
                                                        Quod autem in homine praestantissimum atque optimum est, id deseruit. Apud ceteros autem philosophos
                                                    </p>
                                                </div>
                                            </div>
                                            
                                            <!-- ADD REVIEW -->
                                            <form class="w-full">
                                                <h5 class="mtext-108 cl2 p-b-7">
                                                    Add a review
                                                </h5>

                                                <p class="stext-102 cl6">
                                                    Your email address will not be published. Required fields are marked *
                                                </p>

                                                <!-- Rating -->
                                                <div class="flex-w flex-m p-t-50 p-b-23">
                                                    <span class="stext-102 cl3 m-r-16">
                                                        Your Rating
                                                    </span>

                                                    <span class="wrap-rating fs-18 cl11 pointer">
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <i class="item-rating pointer zmdi zmdi-star-outline"></i>
                                                        <input class="dis-none" type="number" name="rating">
                                                    </span>
                                                </div>

                                                <div class="row p-b-25">
                                                    <div class="col-12 p-b-5">
                                                        <label class="stext-102 cl3" for="review">Your review</label>
                                                        <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
                                                    </div>

                                                    <div class="col-sm-6 p-b-5">
                                                        <label class="stext-102 cl3" for="name">Name</label>
                                                        <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
                                                    </div>

                                                    <div class="col-sm-6 p-b-5">
                                                        <label class="stext-102 cl3" for="email">Email</label>
                                                        <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email">
                                                    </div>
                                                </div>

                                                <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                                                    Submit
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

            <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
                <span class="stext-107 cl6 p-lr-25">
                    <?php echo $product['product_title']?>
                </span>

                <span class="stext-107 cl6 p-lr-25">
                    <?php echo $product['cat_name']?>
                </span>
            </div>
        </section>

        

        <!-- Related Products -->
        <!-- <section class="sec-relate-product bg0 p-t-45 p-b-105">
            <div class="container">
                <div class="p-b-45">
                    <h3 class="ltext-106 cl5 txt-center">
                        Related Products
                    </h3>
                </div> -->

                <!-- Slide2 -->
                <!-- <div class="wrap-slick2">
                    <div class="slick2">
                        <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15"> -->
                            <!-- Block2 -->
                            <!-- <div class="block2">
                                <div class="block2-pic hov-img0">
                                    <img src="images/product-01.jpg" alt="IMG-PRODUCT">
                                </div>

                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            Esprit Ruffle Shirt
                                        </a>

                                        <span class="stext-105 cl3">
                                            $16.64
                                        </span>
                                    </div>

                                    <div class="block2-txt-child2 flex-r p-t-3">
                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                            <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>                                       
                
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h1 class="fw-bold text-primary mb-4">O<span class="text-secondary">rm</span>an</h1>
                        <p>The best place to find vintage books and enhance your knowledge.</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Address</h4>
                        <p><i class="fa fa-map-marker"></i> 123 Street, Accra, Ghana</p>
                        <p><i class="fa fa-phone"></i> +233 20 420 2200</p>
                        <p><i class="fa fa-envelope me-3"></i>ormanent@gmail.com</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Quick Links</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Our Services</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Newsletter</h4>
                        <p>Enter your email to recieve updates from us.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a href="index.php">Orman Bookstore</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!--===============================================================================================-->	
        <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="../vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="../vendor/bootstrap/js/popper.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="../vendor/select2/select2.min.js"></script>

        <!-- For the book format options -->
        <script>
            $(".js-select2").each(function(){
                $(this).select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: $(this).next('.dropDownSelect2')
                });
            })
        </script>
        <!--===============================================================================================-->
        <script src="../vendor/daterangepicker/moment.min.js"></script>
        <script src="../vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="../vendor/slick/slick.min.js"></script>
        <!-- <script src="../js/slick-custom.js"></script> -->
        <!--===============================================================================================-->
        <script src="../vendor/parallax100/parallax100.js"></script>
        <script>
            $('.parallax100').parallax100();
        </script>
        <!--===============================================================================================-->
        <script src="../vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>

        <!-- Image view -->
        <script>
            $('.gallery-lb').each(function() { // the containers for all your galleries
                $(this).magnificPopup({
                    delegate: 'a', // the selector for gallery item
                    type: 'image',
                    gallery: {
                        enabled:true
                    },
                    mainClass: 'mfp-fade'
                });
            });
        </script>
        <!--===============================================================================================-->
        <script src="../vendor/isotope/isotope.pkgd.min.js"></script>
        <!--===============================================================================================-->
        <script src="../vendor/sweetalert/sweetalert.min.js"></script>

        <!-- Wishlist icon things -->
        <script>
            $('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
                e.preventDefault();
            });

            $('.js-addwish-b2').each(function(){
                var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to wishlist !", "success");

                    $(this).addClass('js-addedwish-b2');
                    $(this).off('click');
                });
            });

            $('.js-addwish-detail').each(function(){
                var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

                $(this).on('click', function(){
                    swal(nameProduct, "is added to wishlist !", "success");

                    $(this).addClass('js-addedwish-detail');
                    $(this).off('click');
                });
            });

            /*---------------------------------------------*/

            $('.js-addcart-detail').each(function(){
                var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to cart !", "success");
                });
            });
        
        </script>
        <!--===============================================================================================-->
        <script src="../vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script>
            $('.js-pscroll').each(function(){
                $(this).css('position','relative');
                $(this).css('overflow','hidden');
                var ps = new PerfectScrollbar(this, {
                    wheelSpeed: 1,
                    scrollingThreshold: 1000,
                    wheelPropagation: false,
                });

                $(window).on('resize', function(){
                    ps.update();
                })
            });
        </script>
        <!--===============================================================================================-->
        <!-- <script src="../js/main.js"></script> -->

    </body>
</html>
