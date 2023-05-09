<?php
    include("../settings/core.php");
    include("../controllers/product_controller.php");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Orman's Enterprise</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="../img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

        <!-- Template Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/main.css">


        <!-- EVERYTHING BELOW IS FOR THE AESTHETICS OF THE PRODUCT PART -->
        <!-- ###################################################################### -->
        <!-- ####################################################################### -->
        <!-- ############################################################################# -->

        <link rel="stylesheet" type="text/css" href="../css/util.css">
	    <link rel="stylesheet" type="text/css" href="../css/man.css">

        <!-- PRODDUCT AND EXTRA -->
        <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="../fonts/linearicons-v1.0.0/icon-font.min.css">


       <!-- Does not affect filter -->
        <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="../vendor/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="../vendor/MagnificPopup/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/perfect-scrollbar.css">
          
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
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
                <a href="../view/index.php" class="navbar-author ms-4 ms-lg-0">
                    <h1 class="fw-bold text-primary m-0">O<span class="text-secondary">rm</span>an</h1>
                </a>
                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-4 p-lg-0">
                        <a href="../view/index.php" class="nav-item nav-link">Home</a>
                        <a href="../view/about.php" class="nav-item nav-link">About Us</a>
                        <a href="../view/product.php" class="nav-item nav-link active">Products</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="" class="dropdown-item">Blog Grid</a>
                                <a href="" class="dropdown-item">Our Features</a>
                                <a href="../view/testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="../view/404.php" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="../view/contact.php" class="nav-item nav-link">Contact Us</a>
                    </div>

                    <div class="d-none d-lg-flex ms-2">
           
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
                <h1 class="display-3 mb-3 animated slideInDown">Available Novels</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a class="text-body" href="../view/index.php">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-body" href="../view/product.php">Products</a></li>
                        <li class="breadcrumb-item text-dark active" aria-current="page">Novels</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- PRODUCTS DISPLAY -->
        <div class="bg0 m-t-23 p-b-140">
            <div class="container">   
                
                <div class="flex-w flex-sb-m p-b-52">

                    <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                        <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                        <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Search
                    </div>
                </div>

                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15">
                    <div class="bor8 dis-flex p-l-15">
                        <form action="../view/product_search_results.php" method="get">
                            <button type="submit" name="search_p" class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                                <i class="zmdi zmdi-search"></i>
                            </button>      
                            <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search" placeholder="Search">                          
                        </form>                                                   
                    </div>	
                </div>
               
                <!-- EACH PRODUCT CARD -->
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <?php 
                                // fetching all the products.
                                $product_items = novels_ctr();
                                foreach ($product_items as $product) {
                                    $pid = $product['product_id'];

                                    $pcat = $product['product_cat'];
                                    $pauthor = $product['product_author'];
                                    $ptitle = $product['product_title'];
                                    $price = $product['product_price'];
                                    $pdesc = $product['product_desc'];
                                    $pimage = $product['product_image'];
                                    $pkey = $product['product_keywords'];

                                    echo"
                                        <div class='col-xl-3 col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>
                                            <div class='product-item'>

                                                <div class='position-relative bg-light overflow-hidden'>
                                                    <img class='img-fluid w-100' src='../img/$pimage' style='height:250px; width:100px;' alt='Card image cap'>
                                                </div>

                                                <div class='text-center p-4' style='height:150px; width:300px;'>
                                                    <a class='d-block h5 mb-2'>$ptitle</a>
                                                    <br>
                                                    <span class='text-primary me-1'>GHS $price</span>
                                                    <span class='text-body text-decoration-line-through'>GHS 29.00</span>
                                                </div>

                                                <div class='d-flex border-top'>
                                                    <small class='w-50 text-center border-end py-2'>
                                                        <input type='hidden' value='$pid' name='pid'>
                                                        <a class='text-body' href='../view/single_product.php?pid=$pid'><i class='fa fa-eye text-primary me-2'></i>View detail</a>
                                                    </small>
                                                    <small class='w-50 text-center py-2'>
                                                        <a class='text-body' href='../actions/add_to_cart.php?pid=$pid'><i class='fa fa-shopping-bag text-primary me-2'></i>Add to cart</a>
                                                    </small>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    ";
                                }
                            ?>                           
                        </div>
                    </div>
                </div>
                 
            </div>     
        </div>             
        <!-- Product End -->

        <!-- Start related-product Area -->
        <section class="related-product-area section_gap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h1>Deals of the Week</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="img/r1.jpg" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">Black lace Heels</a>
                                        <div class="price">
                                            <h6>$189.00</h6>
                                            <h6 class="l-through">$210.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="img/r2.jpg" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">Black lace Heels</a>
                                        <div class="price">
                                            <h6>$189.00</h6>
                                            <h6 class="l-through">$210.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="img/r3.jpg" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">Black lace Heels</a>
                                        <div class="price">
                                            <h6>$189.00</h6>
                                            <h6 class="l-through">$210.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="img/r5.jpg" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">Black lace Heels</a>
                                        <div class="price">
                                            <h6>$189.00</h6>
                                            <h6 class="l-through">$210.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="img/r6.jpg" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">Black lace Heels</a>
                                        <div class="price">
                                            <h6>$189.00</h6>
                                            <h6 class="l-through">$210.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="img/r7.jpg" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">Black lace Heels</a>
                                        <div class="price">
                                            <h6>$189.00</h6>
                                            <h6 class="l-through">$210.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="img/r9.jpg" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">Black lace Heels</a>
                                        <div class="price">
                                            <h6>$189.00</h6>
                                            <h6 class="l-through">$210.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="img/r10.jpg" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">Black lace Heels</a>
                                        <div class="price">
                                            <h6>$189.00</h6>
                                            <h6 class="l-through">$210.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="img/r11.jpg" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">Black lace Heels</a>
                                        <div class="price">
                                            <h6>$189.00</h6>
                                            <h6 class="l-through">$210.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ctg-right">
                            <a href="">
                                <img class="img-fluid d-block mx-auto" src="../img/c5.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End related-product Area -->

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
                            &copy; <a href="../view/index.php">Orman Bookstore</a>, All Right Reserved.
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


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../lib/wow/wow.min.js"></script>
        <script src="../lib/easing/easing.min.js"></script>
        <script src="../lib/waypoints/waypoints.min.js"></script>
        <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="../js/main.js"></script>


       
    </body>
</html>