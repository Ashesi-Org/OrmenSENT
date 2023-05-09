<?php
    include("../settings/core.php");
    include("../controllers/product_controller.php");
?>

<DOCTYPE html>
    <head>
        <title>Search</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

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
        <link rel="stylesheet" type="text/css" href="../css/util.css">
	    <link rel="stylesheet" type="text/css" href="../css/man.css">

        <!-- Template Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
            
    </head>

    <body>
   
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
                <div class="col-lg-6 px-5 text-start">
                    <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, Accra, Ghana</small>
                    <small class="ms-4"><i class="fa fa-envelope me-2"></i>ormanent@gmail.com</small>
                </div>
                <div class="col-lg-6 px-5 text-end">
                    <small>Follow us:</small>
                    <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
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
                    </div>

                    <div class="d-none d-lg-flex ms-2">

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
                <h1 class="display-3 mb-3 animated slideInDown">Available Products</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a class="text-body" href="../view/index.php">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-body" href="product.php">All Products</a></li>
                        <li class="breadcrumb-item text-dark active" aria-current="page">Available Products</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Product Start -->
        <div class="bg0 m-t-23 p-b-140">
            <div class="container">
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">

                            <?php
                                $keys = $_GET['search'];
                                // echo "$keys";
                                // fetching all the products.
                                $product_items = search_a_product_ctr($keys);
                                //print_r($product_items);
                                foreach ($product_items as $product_view) {
                                    // print_r($product_view);
                                    $pid = ($product_view['product_id']);
                                    $pcat = ($product_view['product_cat']);
                                    $pauthor = ($product_view['product_author']);
                                    $ptitle = ($product_view['product_title']);
                                    $price = ($product_view['product_price']);
                                    $pdesc = ($product_view['product_desc']);
                                    $pimage = ($product_view['product_image']);

                                    echo"
                                        <div class='col-xl-3 col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'>
                                            <div class='product-item'>

                                                <div class='position-relative bg-light overflow-hidden'>                                                

                                                    <img class='img-fluid w-100' src='../img/$pimage' style='height:250px; width:100px;' alt='Card image cap'>
                                                    <div class='bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3'>New</div>
                                                </div>

                                                <div class='text-center p-4' style='height:150px; width:300px;'>
                                                    <a class='d-block h5 mb-2'>$ptitle</a>
                                                    <span class='text-primary me-1'>GHS $price</span>
                                                    <span class='text-body text-decoration-line-through'>GHS 29.00</span>
                                                </div>

                                                <div class='d-flex border-top'>
                                                    <small class='w-50 text-center border-end py-2'>
                                                        <form action='single_product.php'></form>
                                                            <input type='hidden' value='$pid' name='pid'>
                                                            <!-- <button type='submit' name='p_view' id='open'>  -->
                                                                <a class='text-body' href='single_product.php?pid=$pid'><i class='fa fa-eye text-primary me-2'></i>View detail</a>
                                                            <!-- </button> -->
                                                        </form>
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
        
        <!-- Related Products -->
        <section class="sec-relate-product bg0 p-t-45 p-b-105">
            <div class="container">
                <div class="p-b-45">
                    <h3 class="ltext-106 cl5 txt-center">
                        Related Products
                    </h3>
                </div>

                <!-- Slide2 -->
                <div class="wrap-slick2">
                    <div class="slick2">
                        <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                            <!-- Block2 -->
                            <div class="block2">
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
        </section>


        <!-- Footer Start -->
        <div class="container-fluid bg-dark footer pt-5 wow fadeIn" data-wow-delay="0.1s">
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
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, Accra, Ghana</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+233 20 420 2200</p>
                        <p><i class="fa fa-envelope me-3"></i>ormanent@gmail.com.com</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Quick Links</h4>
                        <a class="btn btn-link" href="about.php">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Our Services</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
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
                            &copy; <a href="#">Orman Bookstore</a>, All Right Reserved.
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


