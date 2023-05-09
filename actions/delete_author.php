<?php
    include("../controllers/product_controller.php");

    //check if user data exists.
    if(isset($_POST['delete_author']))
    {
        //register user
        //grab form data
        // capture form data
        $bid = $_POST['author_id'];
        // $bid = $_POST['author_id'];
        
        // // call controller
        // this should be update
        $check = delete_author_ctr($bid);
        

        // // method check
        // set session, redirect to home page, 
        if($check)
        {
            header('location:../admin/view_authors.php'); 
        }
        else
        {
            echo "Failed!";
        }
    }    
?>