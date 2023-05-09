<?php
    include("../settings/core.php");
    include("../controllers/product_controller.php");
?>

<DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Product list</title>
        <meta content="" name="keywords">
        <meta content="" name="description">

        
        <!-- Favicon -->
        <link href="../img/favicon.ico" rel="icon">         

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/dash.css">

        <!-- For button styling -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            img{
                width:150px;
                height: 150px;
            }
        </style>
    </head>

    <body>
        <div class="grid-container">

            <!-- Header -->
            <header class="header">
                <div class="menu-icon" onclick="openSidebar()">
                    <span class="material-icons-outlined">menu</span>
                </div>
                
                <!-- SEARCH CATEGORIES -->
                <div class="container my-5">                  
                    <form action="../view/product_search_results.php" method="get" class="d-flex">
                        <input type="text" class="form-control me-1" type="search" placeholder="Search by author/title/category..." aria-label="Search" name="search">
                        <button class="btn btn-outline-primary btn-sm" type="submit" name="search_p" id="searchh">Search</button>
                    </form>                    
                </div>

                <!-- ADD PRODUCT -->            
                <div class="header-right">
                    <a href="admin_product.php">
                    <span class="material-icons-outlined">add_circle</span></a>
                </div>
            </header>
            <!-- End Header -->

            <?php
                include("../Inc/top.php");
            ?>          

            <!-- MAIN -->
            <main class="main-container">  
                <div class="container mt-4">
                    <div class="row">
                        <!-- <div class="col-md-12"> -->
                            <div class="card">
                                <div class="card-header">
                                    <h4>All Product Details</h4>
                                </div>           

                                <div class="card-body">
                                    <!-- ************************************************************** -->
                                    <!-- (enctype="multipart/form-data") - It specifies which content-type to use when submitting the form -->

                                    <form method="post" onsubmit="return validate()" enctype="multipart/form-data">      
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Product category</th>
                                                    <th>Product author</th>
                                                    <th>Product title</th>
                                                    <th>Product price</th>
                                                    <th>Product description</th>
                                                    <th>Product image</th>
                                                    <th>Product keywords</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                    // fetching all the products.
                                                    $product_items = select_all_product_ctr();
                                                    foreach ($product_items as $product) {
                                                ?>
                                                <tr>
                                                    <td a><?php echo $product['product_id']?></td>
                                                    <td a><?php echo $product['product_cat']?></td>
                                                    <td a><?php echo $product['product_author']?></td>
                                                    <td a><?php echo $product['product_title']?></td>
                                                    <td a><?php echo $product['product_price']?></td>
                                                    <td a><?php echo $product['product_desc']?></td>
                                                    <!-- IMAGE -->
                                                    <td a><?php echo "<img src='{$product['product_image']}'>"?></td>

                                                    <td a><?php echo $product['product_keywords']?></td>
                                                    
                                                    <td>
                                    </form>                  
                                                            
                                                        <form action="update_product.php" method="GET">
                                                            <input type="hidden" name="product_id" value='<?php echo $product['product_id']?>'>
                                                            <input type="hidden" name="product_cat" value='<?php echo $product['product_cat']?>'>
                                                            <input type="hidden" name="product_author" value='<?php echo $product['product_author']?>'>
                                                            <input type="hidden" name="product_title" value='<?php echo $product['product_title']?>'>
                                                            <input type="hidden" name="product_price" value='<?php echo $product['product_price']?>'>
                                                            <input type="hidden" name="product_desc" value='<?php echo $product['product_desc']?>'>
                                                            <input type="hidden" id="product_image" name="product_image" value='<?php echo $product['product_image']?>'>
                                                            <input type="hidden" name="product_keywords" value='<?php echo $product['product_keywords']?>'>

                                                            <button class= "btn btn-success btn-sm" type="submit" name="update_product">Update</button>
                                                        </form>
                                                
                                                        <form action="../actions/delete_product.php" method="POST">
                                                            <input type="hidden" name="product_id" value='<?php echo $product['product_id']?>'>
                                                            <input type="hidden" name="product_cat" value='<?php echo $product['product_cat']?>'>
                                                            <input type="hidden" name="product_author" value='<?php echo $product['product_author']?>'>
                                                            <input type="hidden" name="product_title" value='<?php echo $product['product_title']?>'>
                                                            <input type="hidden" name="product_price" value='<?php echo $product['product_price']?>'>
                                                            <input type="hidden" name="product_desc" value='<?php echo $product['product_desc']?>'>
                                                            <input type="hidden" id="product_image" name="product_image" value='<?php echo $product['product_image']?>'>
                                                            <input type="hidden" name="product_keywords" value='<?php echo $product['product_keywords']?>'>
                                                            <button class= 'btn btn-danger btn-sm' type="submit" name="delete_product">Delete</button>
                                                        </form>                           

                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
                                            </tbody> 
                                        </table> 
                                </div>  
                            </div>  
                        <!-- </div> -->
                    </div>
                </div> 
            </div>    
        </div> 
        <!-- js -->
        <script src="../js/scripts.js"></script> 
   </body>
</html>


