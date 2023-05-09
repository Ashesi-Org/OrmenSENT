<?php
    include("../controllers/product_controller.php");

    //check if user data exists.
    if(isset($_POST['delete_category']))
    {
        //grab form data
        // capture form data
        $cat_id = $_POST['cat_id'];
      
        
        // // call controller
        // this should be update
        $check = delete_category_ctr($cat_id);
        

        // // method check
        // set session, redirect to home page, 
        if($check)
        {
            header('location:../admin/view_categories.php'); 
        }
        else
        {
                echo "Failed!";
            
        }
    }    
?>