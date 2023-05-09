<?php
    // include("../settings/core.php");
    include("../controllers/cart_controller.php");

    session_start();
    

    $pid = $_GET['pid']; 
    $ip_address = $_SERVER["REMOTE_ADDR"];
    $cid = $_SESSION['cid'];   

    // echo "$cid";

    // call function to check if the user has added an item to the cart.
    $dup_check = dup_cart_ctr($pid, $cid);
     
    // check if there is no input else add to cart.
    if(count($dup_check) == 0)
    {
        $check_cart = add_to_cart_ctr($pid, $ip_address, $cid);
        print_r($check_cart);
        
        if($check_cart)
        {
            header('location:../view/cart.php');
        }
        else
        {
            echo "Failed insertion!";
        }
    }
    else
    {
        $update_check = update_cart_qty_ctr($pid, $cid);
        if($update_check)
        {
            // if update was succesfull, redirect to cart page.
            header('location:../view/cart.php');
        }
        else
        {
            echo "Failed Update!";
        }
    }

?>





