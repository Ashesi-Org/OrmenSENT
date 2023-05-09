<?php
    include("../controllers/product_controller.php");

    //check if user data exists.
    if(isset($_POST['delete_product'])){
        //register user
        //grab form data
        // capture form data
        $pid = $_POST['product_id'];
        // $bid = $_POST['author_id'];
        
        // // call controller
        // this should be update
        $check = delete_product_ctr($pid);
        

        // // method check
        // set session, redirect to home page, 
        if($check){
            header('location:../admin/view_products.php'); 
        }
        else{
                echo "Insertion failed!";
            
        }
    }    
?>