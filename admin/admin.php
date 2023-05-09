<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Admin: Orman's Bookstore</title>
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
        <div style="color: floralwhite;" class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
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
                <a href="index.html" class="navbar-author ms-4 ms-lg-0">
                    <h1 class="fw-bold text-primary m-0">O<span class="text-secondary">rm</span>an</h1>
                </a>
                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-4 p-lg-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>

                        <a href="view_authors.php" class="nav-item nav-link">authors</a>

                        <a href="view_categories.php" class="nav-item nav-link">Categories</a>

                        <a href="view_products.php" class="nav-item nav-link">All Products</a>
                        
                        <a href="../view/contact1.php" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <div class="d-none d-lg-flex ms-2">
                        <!-- Search -->
                        <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                            <small class="fa fa-search text-body"></small>
                        </a>
                        <!-- Login/logout -->
                        <a class="btn-sm-square bg-white rounded-circle ms-3" href="../login/logout.php">
                            <small class="fa fa-user text-body"></small>
                        </a>
                        <!-- Cart -->
                        <a class="btn-sm-square bg-white rounded-circle ms-3" href="../view/cart.php">
                            <small class="fa fa-shopping-bag text-body"></small>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Top Body/ Carousel -->
        <!-- <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s"> -->
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="../img/IW/3.jpg" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div>
                                        <h1 style="text-align: center;" class="display-2 mb-5 animated slideInDown">“A reader lives a thousand lives before he dies . . . The man who never reads lives only one.”</h1>
                                        <h5 style="text-align: right; color: #041e42;">| George R.R. Martin </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

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
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, Accra, Ghana</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+233 20 420 2200</p>
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