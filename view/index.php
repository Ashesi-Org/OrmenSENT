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

        <!-- JS SUBSCRIPTION -->
        <script src="../js/subscription.js"></script>

        <!-- Product Search and Filter -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script> -->
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
                    <small><i class="fa fa-map-marker" aria-hidden="true"></i> 123 Street, Accra, Ghana</small>
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
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About Us</a>
                        <a href="product.php" class="nav-item nav-link">Products</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="blog.php" class="dropdown-item">Blog Grid</a>
                                <a href="feature.php" class="dropdown-item">Our Features</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="404.php" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="../view/contact.php" class="nav-item nav-link">Contact Us</a>
                    </div>

                    <div class="d-none d-lg-flex ms-2">


                        <!-- Search -->
                        <!-- <a class="btn-sm-square bg-white rounded-circle ms-3" href="product_search_results.php?search=$keys">
                            <small class="fa fa-search text-body"></small>
                        </a> -->


                        <!-- Login/logout -->
                        <?php 
                             if ( logged()==true) {
                                echo "
                                <a class='btn-sm-square bg-white rounded-circle ms-3' href='../login/logout.php'>
                                <i class='fa fa-sign-out'></i>
                                 </a>
                                ";
                             }else {
                                echo "
                                <a class='btn-sm-square bg-white rounded-circle ms-3' href='../login/login.php'>
                                    <small class='fa fa-user text-body'></small>
                                </a>
                                ";
                             }
                        ?>
                        
                        <!-- Cart -->
                        <a class="btn-sm-square bg-white rounded-circle ms-3" href="cart.php">
                            <small class="fa fa-shopping-bag text-body"></small>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="../img/index-2.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div>
                                        <!-- <h4 style="text-align: right; color:bisque;" class="display-2 mb-5 animated slideInDown">“Books are a uniquely portable magic.”</h4>
                                        <h5 style="text-align: right;">| Stephen King</h5> -->

                                        <!-- Products -->
                                        <a href="product.php" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Products</a>
                                        <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Services</a>

                                        <!-- <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Services</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="../img/products-bg-3.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div>
                                        <h4 style="text-align: left;" class="display-2 mb-5 animated slideInDown">“Classic, a book which people praise and do not read.”</h4>
                                        <h5 style="text-align: left;">| Mark Twain</h5>

                                        <!-- Products -->
                                        <a href="product.php" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Products</a>
                                        <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Services</a>

                                        <!-- <a href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Services</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- About Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="../img/about1.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="display-5 mb-4">Note from one of our authors</h1>
                        <p class="mb-4">With the modern barrage of media and instant technological information, our attention spans are getting shorter and shorter. Reading a book, unlike skimming a web page, forces you to focus. To get the most out of a story, you must fixate on the plot and complete the book. In doing this, your brain forms deep connections and practices concentration.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Reading is good for your brain</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Reading makes you a better writer</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Reading improves your conversational skills</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- About End -->

        <!-- Product Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                            <h1 class="display-5 mb-3">Our Products</h1>
                            <p>Products displayed are sold as seen. Exchange allowed on condition.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Novels</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Science</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-3">History</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-4">Comedy</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <?php 
                                // fetching all the products.
                                $product_items = select_all_product_ctr();
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
                                                    <div class='bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3'>New</div>
                                                </div>

                                                <div class='text-center p-4' style='height:150px; width:300px;'>
                                                    <a class='d-block h5 mb-2'>$ptitle</a>
                                                    <span class='text-primary me-1'>GHS $price</span>
                                                    <span class='text-body text-decoration-line-through'>GHS 29.00</span>
                                                </div>

                                                <div class='d-flex border-top'>
                                                    <small class='w-50 text-center border-end py-2'>
                                                        <input type='hidden' value='$pid' name='pid'>
                                                        <a class='text-body' href='single_product.php?pid=$pid'><i class='fa fa-eye text-primary me-2'></i>View detail</a>
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
                                    <a href="#"><img src="" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">The BriefCase</a>
                                        <div class="price">
                                            <h6>GHS 10.00</h6>
                                            <h6 class="l-through">GHS 5.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">The BriefCase</a>
                                        <div class="price">
                                            <h6>GHS 10.00</h6>
                                            <h6 class="l-through">GHS 5.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">The BriefCase</a>
                                        <div class="price">
                                            <h6>GHS 10.00</h6>
                                            <h6 class="l-through">GHS 5.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">The BriefCase</a>
                                        <div class="price">
                                            <h6>GHS 10.00</h6>
                                            <h6 class="l-through">GHS 5.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">The BriefCase</a>
                                        <div class="price">
                                            <h6>GHS 10.00</h6>
                                            <h6 class="l-through">GHS 5.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">The BriefCase</a>
                                        <div class="price">
                                            <h6>GHS 10.00</h6>
                                            <h6 class="l-through">GHS 5.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">The BriefCase</a>
                                        <div class="price">
                                            <h6>GHS 10.00</h6>
                                            <h6 class="l-through">GHS 5.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">The BriefCase</a>
                                        <div class="price">
                                            <h6>GHS 10.00</h6>
                                            <h6 class="l-through">GHS 5.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-related-product d-flex">
                                    <a href="#"><img src="" alt=""></a>
                                    <div class="desc">
                                        <a href="#" class="title">The BriefCase</a>
                                        <div class="price">
                                            <h6>GHS 10.00</h6>
                                            <h6 class="l-through">GHS 5.00</h6>
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


        <!-- Firm Visit Start -->
        <div class="container-fluid bg-primary bg-icon mt-5 py-6">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                        <h1 class="display-5 text-white mb-3">Visit Our Shop</h1>
                        <p class="text-white mb-0">We are located in Okaishie, the Central District of Accra. Do pass by when you can, we would love to see you soon.</p>
                    </div>
                    <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                        <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="">Visit Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Firm Visit End -->


        <!-- Testimonial Start -->
        <div class="container-fluid bg-light bg-icon py-6 mb-5">
            <div class="container">
                <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Customer Review</h1>
                    <p>A few notes from our local clients.</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item position-relative bg-white p-5 mt-4">
                        <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                        <p class="mb-4">They have tones of variety to choose. Sometimes I don't even know where to start from.</p>
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 rounded-circle" src="../img/testimonial-1.jpg" alt="">
                            <div class="ms-3">
                                <h5 class="mb-1">Laura</h5>
                                <span>Journalist</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item position-relative bg-white p-5 mt-4">
                        <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                        <p class="mb-4">They have tones of variety to choose. Sometimes I don't even know where to start from.</p>
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 rounded-circle" src="../img/testimonial-2.jpg" alt="">
                            <div class="ms-3">
                                <h5 class="mb-1">John</h5>
                                <span>Graphic Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item position-relative bg-white p-5 mt-4">
                        <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                        <p class="mb-4">They have tones of variety to choose. Sometimes I don't even know where to start from.</p>
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 rounded-circle" src="../img/testimonial-3.jpg" alt="">
                            <div class="ms-3">
                                <h5 class="mb-1">Kevin</h5>
                                <span>Writer</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item position-relative bg-white p-5 mt-4">
                        <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                        <p class="mb-4">They have tones of variety to choose. Sometimes I don't even know where to start from.</p>
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 rounded-circle" src="../img/testimonial-4.jpg" alt="">
                            <div class="ms-3">
                                <h5 class="mb-1">Amy</h5>
                                <span>English Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Blog Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Latest Blog</h1>
                    <p>Must read pieces from our experienced writers.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid" src="../img/IW/article3.jpg" alt="">
                        <div class="bg-light p-4">
                            <a class="d-block h5 lh-base mb-4" href="">Why you should encourage your children to read more.</a>
                            <div class="text-muted border-top pt-4" style="height: 70px; width:380px;">
                                <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                                <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2021</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <img class="img-fluid" src="../img/IW/article2.jpg" alt="Article Image">
                        <div class="bg-light p-4">
                            <a class="d-block h5 lh-base mb-4" href="">How to write a formal letter. A detailed guide.</a>
                            <div class="text-muted border-top pt-4" style="height: 70px; width:380px;">
                                <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                                <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Feb, 2022</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <img style="height: 230px; width: 420px;" class="img-fluid" src="../img/IW/article1.jpg" alt="Article Image">
                        <div class="bg-light p-4">
                            <a class="d-block h5 lh-base mb-4" href="">How to write an article to be published online.</a>
                            <div class="text-muted border-top pt-4" style="height: 70px; width:380px;">
                                <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                                <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2022</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->      

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

                    <!-- Newsletter Subscription -->
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-light mb-4">Newsletter</h4>
                        <p id="msgsub">Enter your email to recieve updates from us.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;" id="form_area">
                        
                            <!-- FORM -->
                            <form id="userForm" method="POST" action="../actions/subs.php">
                                <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" name="email" id="email" placeholder="Your email">
                                <span class="text-danger hidden" id="emailError"></span>

                                <button type="submit" value="sub_process" name="sub_process" id="subscribeButton" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                            </form>
                            
                        </div>
                    </div>
                    <!-- End Newsletter Subscription -->

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
        <script src="../js/subscription.js"></script>
    </body>

</html>