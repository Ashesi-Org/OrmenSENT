<?php
    include("../controllers/product_controller.php");

    //check if user data exists.
    if(isset($_POST['add']))
    {
        //grab form data
        // capture form data
        $cname = $_POST['cat_name'];
      
        // // call controller
        $check = add_category_ctr($cname);
        
        // // method check
        // set session, redirect to home page, 
        if($check)
        {
            echo "Record inserted!";
            header('location:../admin/view_categories.php'); 
        }
        else
        {
                echo "Insertion failed!";
            
        }

    }    
?>





