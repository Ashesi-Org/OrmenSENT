<?php 
    include("../controllers/cart_controller.php");

    session_start();

    $cid = $_SESSION['cid'];
    $cust_id = $_GET['id'];
    //print_r($cid);

    $qty = select_qty_ctr($cust_id, $cid);

    if($qty['qty']== 1)
    {
        $check_delete = delete_from_cart_ctr($cust_id, $cid);
        if($check_delete){
            header('location:../view/cart.php');
        }
        else{
            echo "Failed to Delete!";
        }
    }
    else{
        $check_update = update_cart_qty_del_ctr($cust_id, $cid);
        if($check_update){
            header("location: ../view/cart.php");
        }
        else{
            echo "Failed to update!";
        }
    }




?>