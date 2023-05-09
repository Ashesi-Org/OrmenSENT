<?php
// include("../settings/core.php");
include("../controllers/cart_controller.php");

?>

<DOCTYPE html>
    <head>
        <title>Summary</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <!-- Customized Bootstrap Stylesheet -->
        <link rel="stylesheet" type="text/css" href="../css/util.css">
	    <link rel="stylesheet" type="text/css" href="../css/man.css">

         <!-- Icon Font Stylesheet -->
        <!-- Social media icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
       

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

                <a href="cart.php" class="stext-109 cl8 hov-cl1 trans-04">
                    Shopping Cart
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>
                
                <span class="stext-109 cl4">
                    Cart Summary
                </span>
            </div>
            
            <table class="container mt-5 d-flex justify-content-center">
                <table class="table table-bordered w-30">                
                    <table class="table">
                        <thread>
                            <tr>
                                <th>Product Image </th>
                                <th>Product Title</th>
                            
                                <th>Quantity</th>
                                <th> </th>
                                <th>Price</th>
                                
                            </tr>
                        </thead>

                            <tbody>
                                <?php 
                                        session_start();
                                        $cid = $_SESSION['cid']; 
                                        $cart_items = select_all_cart_ctr($cid);

                                    // Function for getting total
                                    $cart_total = total_price_cart_ctr($cid);
                                        
                                    foreach($cart_items as $cart){
                                        
                                ?>
                                    <tr>
                                        
                                        <td><img src="<?php echo $cart['product_image']; ?>"></td>  
                                        <td><?php echo $cart['product_title']; ?></td>

                                        <form action="../actions/manage_quantity_cart.php" method="GET">
                                        <input type="hidden" value="<?php echo $cart['product_id']; ?>" name="id">

                                        <td><input type="text" style="width:50px" value="<?php echo $cart['qty']; ?>" name="upqty"><td>
                                            <!-- <button type="submit" class="btn btn-success">Update</button></td></td></form> -->

                                        <td><?php echo $cart["products.product_price*cart.qty"]; ?></td>
                                        
                                        <form action="../actions/remove_from_cart.php" method="GET">
                                            <input type="hidden" value="<?php echo $cart['product_id']; ?>" name="id">
                                        </form>
                                    </tr>
                                    
                                <?php
                                    }
                                ?>

                            </tbody>    
                    </table>
                </table>
            </table>
                <form action="payment.php">
                    <h3>Total : GHS <span><?php echo $cart_total["SUM(cart.qty*products.product_price)"]?></h3>
                    <button class="btn btn-primary" type="submit">Proceed to Checkout</button><br>
                </form>
        </div>  
    </body>
</html>


