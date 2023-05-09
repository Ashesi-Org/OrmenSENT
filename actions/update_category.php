<?php
include('../controllers/product_controller.php');
?>

<DOCTYPE html>
    <head>
        <title>Category Update</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       
  
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="../css/log.css">

        <!-- JS Validation -->
            
    </head>
    <body>
        <?php
            $get_id = $_GET['cat_id'];

            // get to the controller
            $one_category = select_one_category_ctr($get_id);
            // print_r($one_category);
            
            // create var that will be equal to update ctr
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
                $cname = $_POST['cat_name'];
                $update_category = update_category_ctr($get_id, $cname);

                if($update_category)
                {
                    header("location:../admin/view_categories.php");
                }
                else
                {
                    echo "Something went wrong.";
                }

            }
        ?>
        
        <form method="post">            
            <div class="wrapper" style = "height: 400px;">
                <div class="header-text">Update Category Here</div>   
                <p>Fill this to update a category</p>
                <hr>

                <!-- <label for="cat_name"><b>Name of category</b></label> -->
                <input type="text" value="<?php echo $one_category['cat_name'] ?>" placeholder="Update category name..." name="cat_name" required>

                <input type="hidden" value="<?php echo $one_category['cat_id'] ?>" placeholder="Update category name" name="cat_id" required>
                <hr>

                <button type="submit" value="updated" name="updated">Update Category</button>

            </div>
        </form>
   </body>
</html>


