<?php
    include("../controllers/cart_controller.php");

    session_start();

    $cid = $_SESSION['cid'];
    $p_id = $_GET['id'];
    $qty = $_GET['upqty'];

    $check = update_qty_ctr($p_id, $cid, $qty);
    
    if($check){
        // echo "Cart item quantity updated";
        header("location:../view/cart.php");
    }
    else{
        echo "Failed!";
    }
    

   



?>