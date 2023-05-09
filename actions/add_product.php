<?php
    require("../controllers/product_controller.php");

    $image_dir = "../img/product/";
    $pimage = $image_dir . basename($_FILES["product_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($pimage,PATHINFO_EXTENSION));
    // Check if image file is an actual image or fake image

    //if submit is clicked, post entries
    if (isset($_POST['add'])){

        $pcat = ($_POST['product_cat']);
        $pauthor = ($_POST['product_author']);
        $ptitle = ($_POST['product_title']);
        $price = ($_POST['product_price']);
        $pdesc = ($_POST['product_desc']);
        $pimage = $image_dir . basename($_FILES["product_image"]["name"]);
        //$p_image = ($_FILES['product_image']['name']);
        $pkey = ($_POST['product_keywords']);

        $pp_image = getimagesize($_FILES["product_image"]["tmp_name"]);
        if($pp_image !== false) {
            echo "File is an image - " . $pp_image["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $pimage)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["product_image"]["name"])). " has been uploaded.";
            //   echo "<img src='.$image_file.'/>";
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }
        // //controller method
        $check = add_new_product_ctr($pcat, $pauthor, $ptitle, $price, $pdesc, $pimage, $pkey);

        if($check == true){
            header("location:../admin/view_products.php");
            //echo "<img src=".$image_file." height=100 width=100 />";
            // echo $check;
        } else{
            echo "insert failed";
        }
        //  print_r($_FILES["product_image"]);
        // print_r($image_file);
    }
?>