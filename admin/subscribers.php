<?php 
    include("../controllers/product_controller.php");

?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Subscribers </title>

        <!-- Favicon -->
        <link href="../img/favicon.ico" rel="icon">
        
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/dash.css">

        <!-- CSS STYLING FOR TABLE DISPLAY AND EDITS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />   
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
                    <form action="" method="get" class="d-flex">
                        <input type="text" class="form-control me-1" type="search" placeholder="Search by email..." aria-label="Search" name="search">
                        <button class="btn btn-outline-primary btn-sm" type="submit" name="search_p" id="searchh">Search</button>
                    </form>                    
                </div>   

            </header>
            <!-- End Header -->

            <?php
                include("../Inc/top.php");
            ?>

            <!-- MAIN -->
            <div class="main-container"> 
                <div class="container mt-4">
                    <div class="row">               
                        <div class="col-md-12">

                            <div class="col-sm-2"></div>
                            <div class="form-container">
                                <h1 style="text-align: center;">Subscribers</h1>
                                <hr>
                            </div>

                            <div class="card-body">           
                                <!-- <table class="table table-responsive"> -->
                                <table class="table table-hover table-fixed">
                                    <thead>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Date Created</th>
                                        <th>Action</th>
                                    </thead>
                                    
                                    <?php
                                        // fetching all the subscribers.
                                        $subscribers = select_all_sub_ctr();
                                        foreach ($subscribers as $subs) {
                                    ?>
                                        <tr>
                                            <td a><?php echo $subs['id']?></td>
                                            <td a><?php echo $subs['email']?></td>
                                            <td a><?php echo $subs['created']?></td>
                                            <td a><?php echo "<a href='subs-mail.php'><span class='material-icons-outlined'>email</a>"?></td> 
                                        </tr>
                                    <?php 
                                        }
                                    ?>
                                </table>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- <a href="#" class="btn btn-block btn-primary" >Send to all</a> -->
                    </div>       
                </div>
                <div class="col-sm-2"></div>          
            </div>
        </div>
    </body>
</html>