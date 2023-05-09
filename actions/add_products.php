<?php
    include("../controllers/product_controller.php");
    require("../functions/file_upload.php");

    //check if user data exists.
    if(isset($_POST['add']))
    {
        //grab form data
        // capture form data
        $pcat = $_POST['product_cat'];
        echo "$pcat";
        $pauthor = $_POST['product_author'];
        echo "$pauthor";
        $ptitle = $_POST['product_title'];
        echo "$ptitle";
        $price = $_POST['product_price'];
        echo "$price";
        $pdesc = $_POST['product_desc'];
        echo "$pdesc";
        $pkey = $_POST['product_keywords'];  
        echo "$pkey";

        $image_name = $_FILES["product_image"]["name"];   
        $image_size = $_FILES['product_image']['size']; 
        $image_tmp_name = $_FILES['product_image']['tmp_name']; 


       $pimage=upload("img","product",$image_tmp_name,$image_name);
       echo "$pimage";

        
        // call controller 
        $check = add_new_product_ctr($pcat, $pauthor, $ptitle, $price, $pdesc, $pimage, $pkey);
        // echo "$check";        

        // // method check
        if($check)
        {
            echo "Record inserted!";
            // echo "$check";
            header('location:../admin/view_products.php'); 
        }
        else
        {
            echo "Insertion failed!";
            
        }
    }    
?>





