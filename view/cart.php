<?php
  include("../settings/core.php");
?>
<DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Cart</title>  
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="../img/favicon.ico" rel="icon">

        <!-- Icon Font Stylesheet -->
        <!-- Social media icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
       

        <!-- Customized Bootstrap Stylesheet -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/util.css">
	    <link rel="stylesheet" type="text/css" href="../css/man.css">
              
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <style>
            img{
                width:150px;
                height: 150px;
            }
        </style>
            
    </head>

    <body> 
        <div class="container">
            <!-- breadcrumb -->
            <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
                <a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
                    Home
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>

                <a href="product.php" class="stext-109 cl8 hov-cl1 trans-04">
                    All Products
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>

                <span class="stext-109 cl4">
                    Shopping Cart
                </span>
            </div>
           
            <table class="container mt-5 d-flex justify-content-center">
                <table class="table table-bordered w-30">       
                    <table class="wrap-table-shopping-cart">          
                        <table class="table">
                            <thread>
                                <tr>
                                    <th>Product Image </th>
                                    <th>Product Title</th>                                   
                                    <th>Price</th>
                                    <th>Quantity </th>
                                    <th>Actions</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                                <tbody>
                                    <?php 
                                        include("../controllers/cart_controller.php");

                                        // session_start();
                                        
                                        $cid = $_SESSION['cid'];   

                                        $cart_items = select_all_cart_ctr($cid);
                                         //print_r($cart_items);
                                        foreach($cart_items as $cart){
                                            
                                    ?>
                                        <tr>
                                            
                                            <!-- Image -->
                                            <td><img src="<?php echo $cart['product_image']; ?>"></td>  

                                            <!-- Title -->
                                            <td><?php echo $cart['product_title']; ?></td>

                                            <!-- Price of specified qty -->
                                            <td><?php echo $cart["products.product_price*cart.qty"]; ?></td>

                                            <form action="../actions/manage_quantity_cart.php" method="GET" >

                                            
                                                <input type="hidden" value="<?php echo $cart['product_id']; ?>" name="id"> 

                                                <td>
                                                    <input type="number" style="width:50px" value="<?php echo $cart['qty']; ?>" name="upqty">
                                                <td>
                                                <button type="submit" class="btn btn-success">Update</button></td>
                                            </form>

                                           
                                            
                                            <form action="../actions/remove_from_cart.php" method="GET">
                                                <input type="hidden" value="<?php echo $cart['product_id']; ?>" name="id">
                                                <td><button  class="btn btn-danger">Delete</button></td>
                                            </form>
                                            
                                        </tr>
                                    
                                        <tr>       
                                            <input type="hidden" name="product_title" value="<?php echo $cart[0]['product_title']; ?>">                                               
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                        </table>   
                    </table>
                 </table>
                 <a class="btn btn-primary" style="position: relative" href="summary.php" role="button">Cart Summary</a> 
            </table>
        </div>  

    </body>
</html>


