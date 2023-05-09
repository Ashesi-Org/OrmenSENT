<?php
    include("../controllers/product_controller.php");

    //check if user data exists.
    if(isset($_POST['add']))
    {
        //grab form data
        // capture form data
        $bname = $_POST['author_name'];
        
        // // call controller
        // this should be update
        $check = add_new_author_ctr($bname);

        // // method check
        // set session, redirect to home page, 
        if($check)
        {
            echo "Record inserted!";
            header('location:../admin/view_authors.php'); 
        }
        else
        {
            echo "Insertion failed!";
        }
    }    
?>







