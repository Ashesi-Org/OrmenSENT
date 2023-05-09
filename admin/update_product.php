<?php
    include('../controllers/product_controller.php');
?>

<DOCTYPE html>

    <head>
        <title>Product Update</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link rel="stylesheet" href="../css/log.css">
        <link rel="stylesheet" href="../css/select.css">


        <!-- JS Validation -->

    </head>

    <body>
        <?php    
            $image_dir = "../img/Product/";

            // ["name"] - name of file that was uploaded
            // $image_file - specifies the path of the file to be uploaded
            // $image_file = $image_dir . basename($_FILES["product_image"]["name"]);
            $upload_image = 1;

            $get_id = $_GET['product_id'];

            // get to the controller
            $one_product = select_a_product_ctr($get_id);
            
            // if (isset($_POST['update'])){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $product_cat = $_POST['product_cat'];
                $product_author = $_POST['product_author'];
                $product_title = $_POST['product_title'];
                $product_price = $_POST['product_price'];
                $product_desc = $_POST['product_desc'];
                $product_image =$image_dir . basename($_FILES["product_image"]["name"]);     
                $product_key = $_POST['product_keywords'];  

                
                // Check if image file is an actual image or fake image.
                $img = getimagesize($_FILES["product_image"]["tmp_name"]);
                if($img !== false) {
                echo "File is an image - " . $img["mime"] . ".";
                $upload_image= 1;
                } else {
                echo "File is not an image.";
                $upload_image = 0;
                }

                // Check if file already exists
                if (file_exists($image_file)) {
                    echo "Sorry, file already exists.";
                    $upload_image = 0;
                }

                // Check file size
                if ($_FILES["product_image"]["size"] > 50000000000000000) {
                    echo "Sorry, your file is too large.";
                    $upload_image = 0;
                }

                // Check if $upload_image is set to 0 by an error
                if ($upload_image == 0){
                    echo "No image uploaded!";
                // if everything is ok, try to upload file   
                }
                else {
                    if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $image_dir . basename($_FILES["product_image"]["name"]))){
                        echo "The file". htmlspecialchars( basename($_FILES["product_image"]["name"])). "has been uploaded.";
                        
                    } 
                    else{
                        echo "Sorry, there was an error uloading your file!";
                    }

                }


                $product_edit = select_all_product_ctr();
                foreach ($product_edit as $edit_p){
                    echo "<img src='{$edit_p['product_image']}'>";

                }
        
                // controller method
                $check = update_product_ctr($get_id, $product_cat, $product_author, $product_title, $product_price, $product_desc, $product_image, $product_key);
        
                if ($check){
                    // echo "$check";
                    header("location:../admin/view_products.php");
            
                } 
                else {
                    echo "Update failed!";
                }

            }

        ?>

        <form method="post" enctype="multipart/form-data">
            <div class="wrapper" style="height: 850px;">
                <div class="header-text">Update Product Here</div>

                <p>Fill this to update a product</p>
                <hr>

                <div class="select">
                    <!-- <label for="product_author"><b>Product's author</b></label> -->
                    <select name="product_author" id="product_author" value="<?php echo $one_product['product_author']; ?>">
                        <?php
                        $author_items = select_all_author_ctr();
                        foreach ($author_items as $author) {
                            $author['author_id'];
                            $author['author_name'];
                        ?>
                            <option value="<?php echo $author['author_id'] ?>"> <?php echo $author['author_name'] ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                    <span class="focus"></span>
                </div><br>

                <div class="select">
                    <!-- <label for="product_cat"><b>Product's Category</b></label> -->
                    <select name="product_cat" id="product_cat" value="<?php echo $one_product['product_cat']; ?>">
                        <?php
                        $cat_items = select_all_category_ctr();
                        foreach ($cat_items as $cat) {
                            $cat['cat_id'];
                            $cat['cat_name'];

                        ?>
                            <option value="<?php echo $cat['cat_id'] ?>"><?php echo $cat['cat_name'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <span class="focus"></span>
                </div><br>

                <?php 
                    $one_product = select_a_product_ctr($get_id);
                ?>
                <!-- <label for="product_title"><b>Product title</b></label> -->
                <input type="text" value="<?php echo $one_product['product_title']; ?>" placeholder="Update product title..." name="product_title" required>

                <!-- <label for="product_price"><b>Product price</b></label> -->
                <input type="text" value="<?php echo $one_product['product_price']; ?>" placeholder="Update product price..." name="product_price" required>

                <!-- <label for="product_desc"><b>Product description</b></label> -->
                <input type="text" value="<?php echo $one_product['product_desc']; ?>" placeholder="Update product description..." name="product_desc" required>

                <!-- <label class="formFileLg" for="product_image"><b>Product image</b></label> -->
                <input type="file" class="form-control form-control-lgl" value="<?php echo $one_product['product_image'];?>" placeholder="Update product image" name="product_image"/>

                <!-- <label for="product_keywords"><b>Product keywords</b></label> -->
                <input type="text" value="<?php echo $one_product['product_keywords']; ?>" placeholder="Update product keywords..." name="product_keywords" required>

                <input type="hidden" value="<?php echo $one_product['product_id']; ?>" name="product_id" required>
                <hr>

                <button type="submit" value="update" name="update">Update Product</button>
                <br>
                <a href="view_products.php">Cancel</a>

                <!-- </div> -->

            </div>
        </form>

        <?php
            // } 
        ?>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.imn.js"></script>
    </body>

</html>

    