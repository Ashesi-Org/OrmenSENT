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
    echo"This is a author page";
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <title>authors</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

       <!-- CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="../css/log.css">

         <!-- JS Validation -->
        
    </head>

    <body>
        <!-- Form to add author -->
        <form action="../actions/add_author.php" method="post" name="form1" onsubmit="required()">
            <div class="wrapper" style = "height: 400px;">
                <div class="header-text">Add author Here</div>           
                    
                <input type="text" placeholder="Insert author name..." name="author_name" required>

                <button type="submit" value="add" name="add">Add author</button>
                <hr>

                <span>Go back to <a href="dashboard.php">dashboard</a></span>

                <span> || View <a href="view_authors.php">authors</a></span>    

            </div>
                
        </form>
        <script type="text/javascript" src="../js/author.js"></script>

    </body>

</html>

