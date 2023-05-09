<?php
include("../settings/core.php");
include("../controllers/product_controller.php");

check_login();
$admin = check_admin();

if($admin == 1){
    // code..
    // return redirect($admin) -> route('users.admin.index');
}
else{
    echo"Access blocked";
}
echo "This is a category page";
?>



<DOCTYPE html>
    <head>
        <title>Categories</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="../css/log.css">

         <!-- JS Validation -->
            
    </head>
    <body>
        <form action="../actions/add_category.php" method="post" name="form2" onsubmit="required()">            
            <div class="wrapper" style = "height: 400px;">
                <div class="header-text">Add Category Here</div>
                        
                <input type="text" placeholder="Insert category name..." name="cat_name" required>

                <button type="submit" value="add" name="add">Add category</button>

                <hr>
                <span>Go back to <a href="dashboard.php">dashboard</a></span>

                <span> || View <a href="view_categories.php">Categories</a></span>    

            </div>
        </form>
        <script type="text/javascript" src="../js/category.js"></script>
    </body>
</html>


