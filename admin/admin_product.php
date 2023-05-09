<?php
include("../settings/core.php");
include("../controllers/product_controller.php");

check_login();
$admin = check_admin();

if($admin == 1){
    // code..
}
else{
    echo"Access blocked";
}
echo"This is a product page";
?>



<DOCTYPE html>
    <head>
        <title>Products</title>
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
        <form action="../actions/add_product.php" method="POST" enctype="multipart/form-data">
            <div class="wrapper" style = "height: 700px;">

                <div class="header-text">Add Product Here</div> 

                <!-- <h1>Please fill this form to add a new product.</h1> -->
        
                <div class="select">
                    <!-- <label for="product_author"><b>Product's author</b></label> -->
                    <select name="product_author" id="product_author">
                        <?php
                           $author_items = select_all_author_ctr();
                           foreach ($author_items as $author) {
                            $author['author_id'];
                            $author['author_name']; 
                        ?>
                        <option value="<?php echo $author['author_id'] ?>"> <?php echo $author['author_name']?> </option>        
                        <?php
                           }
                        ?>                        
                    </select>
                    <span class="focus"></span>
                </div><br>

                <div class="select">
                    <!-- <label for="product_cat"><b>Product's Category</b></label> -->
                    <select name="product_cat" id="product_cat">
                        <?php
                           $cat_items = select_all_category_ctr();
                           foreach ($cat_items as $cat) {
                            $cat['cat_id'];
                            $cat['cat_name'];

                        ?>
                        <option value="<?php echo $cat['cat_id']?>"> <?php echo $cat['cat_name']?></option>
                        <?php 
                            } 
                        ?>
                    </select>
                    <span class="focus"></span>
                </div>
                <br>                
                

                <!-- <label for="product_title"><b>Product title</b></label> -->
                <input type="text" placeholder="Insert product title..." name="product_title" required>

                <!-- <label for="product_price"><b>Price of Product</b></label> -->
                <input type="text" placeholder="Insert product price..." name="product_price" required>

                <!-- <label for="product_desc"><b>Product description</b></label> -->
                <input type="text" placeholder="Insert product description..." name="product_desc" required>

                <!-- <div id="display_image" class="File"> -->
                    <!-- <label class="formFileLg" for="product_image" ><b>Product image</b></label> -->

                    <input type="file" class="form-control form-control-lg" id="product_image" accept="image/png, image/jpg, image/jpeg, image/gif" placeholder="Insert product image" name="product_image" >
                <!-- </div> -->

                <!-- <div class="mb-3"> -->
                    <!-- <label for="product_keywords"><b>Product keywords</b></label> -->
                    <input type="text" placeholder="Insert product keywords..." name="product_keywords" required>
                <!-- </div> -->

                <button type="submit" value="add" name="add">Add product</button>

                <br><br>
                <span>Go back to <a href="dashboard.php">dashboard</a></span>

                <span> || View <a href="view_products.php">all products</a></span>            

            </div>
        </form>
   </body>
</html>


