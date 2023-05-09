<?php
    include("../settings/core.php");
    include("../controllers/product_controller.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Authors list</title>
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="../img/favicon.ico" rel="icon">  

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/dash.css">

        <!-- CSS STYLING FOR TABLE DISPLAY AND EDITS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />  -->
    
    </head>

    <body>
        <div class="grid-container">

            <!-- Header -->
            <header class="header">
                <div class="menu-icon" onclick="openSidebar()">
                    <span class="material-icons-outlined">menu</span>
                </div>

                <!-- SEARCH CATEGORIES -->
                <div class="container my-5">                  
                    <form action="../view/product_search_results.php" method="get" class="d-flex">
                        <input type="text" class="form-control me-1" type="search" placeholder="Search by author/title/category..." aria-label="Search" name="search">
                        <button class="btn btn-outline-primary btn-sm" type="submit" name="search_p" id="searchh">Search</button>
                    </form>                    
                </div> 

                <!-- ADD PRODUCTS -->            
                <div class="header-right">
                    <a href="author.php">
                    <span class="material-icons-outlined">add_circle</span></a>
                </div>
            </header>
            <!-- End Header -->

            <?php
                include("../Inc/top.php");
            ?>

            <!-- MAIN -->
            <main class="main-container">
                <div class="container mt-4">
                    <div class="row">
                        <!-- <div class="col-md-12"> -->
                            <div class="card">
                                <div class="card-header">
                                    <h4>Author Details</h4>
                                </div>

                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Author ID</th>
                                                <th>Author Name</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php
                                                // fetching all the authors.
                                                $author_items = select_all_author_ctr();
                                                foreach ($author_items as $author) {
                                            ?>
                                                <tr>
                                                    <td a><?php echo $author['author_id']?></td>
                                                    <td a><?php echo $author['author_name']?></td>
                                                    <td>
                                                        <form action="../actions/update_author.php" method="GET">
                                                            <input type="hidden" name="author_id" value='<?php echo $author['author_id']?>'>
                                                            <input type="hidden" name="author_name" value='<?php echo $author['author_name']?>'>
                                                            <button class= "btn btn-success btn-sm" type="submit" name="update_author">Update</button>
                                                        </form>
                                                    </td>
                                                    <td>                                               
                                                        <form action="../actions/delete_author.php" method="POST">
                                                            <input type="hidden" name="author_id" value='<?php echo $author['author_id']?>'>
                                                            <input type="hidden" name="author_name" value='<?php echo $author['author_name']?>'>
                                                            <button class= 'btn btn-danger btn-sm' type="submit" name="delete_author">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>

                                            <?php 
                                                }
                                            ?>
                                        </tbody> 
                                    </table>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                </div> 
            </main>
        </div> 
        <!-- js -->
        <script src="../js/scripts.js"></script>  
    </body>
</html>