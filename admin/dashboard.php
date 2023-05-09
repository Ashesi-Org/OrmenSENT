<?php
    include("../settings/core.php");
    include("../controllers/product_controller.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Admin Dashboard</title>
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="../img/favicon.ico" rel="icon">

        <!-- Montserrat Font -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> -->

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/dash.css">

        <!-- CSS STYLING FOR TABLE DISPLAY AND EDITS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="grid-container">
        
            <!-- Header -->
            <header class="header">
                <div class="menu-icon" onclick="openSidebar()">
                    <span class="material-icons-outlined">menu</span>
                </div>

                <div class="header-left">
                    <span class="material-icons-outlined">search</span>
                </div>

                <div class="header-right">
                    <span class="material-icons-outlined">notifications</span>
                    <a href="subs-mail.php"><span class="material-icons-outlined">email</span></a>
                    
                </div>
            </header>
            <!-- End Header -->


            <?php
                include("../Inc/top.php");
            ?>

            <!-- Main -->
            <main class="main-container">
                <div class="main-title">
                <p class="font-weight-bold">DASHBOARD</p>
                </div>

                <div class="main-cards">

                    <div class="card">
                        <div class="card-inner">
                        <p class="text-primary">PRODUCTS</p>
                        <span class="material-icons-outlined text-blue">inventory_2</span>
                        </div>
                        <span class="text-primary font-weight-bold">
                            <?php
                                $count = count_product_ctr();

                                $count = intval(array_values($count)[0]);
                                
                                echo $count;                                                        
                            ?>
                        </span>
                    </div>

                    <div class="card">
                        <div class="card-inner">
                        <p class="text-primary">CATEGORIES</p>
                        <span class="material-icons-outlined text-orange">category</span>
                        </div>
                        <span class="text-primary font-weight-bold">
                            <?php
                                $result = count_category_ctr();

                                $result = intval(array_values($result)[0]);
                                
                                echo $result;                                                        
                            ?>
                        </span>
                        <!-- <span class="text-primary font-weight-bold"><?php //echo"count_product_ctr()"?></span> -->
                    </div>

                    <div class="card">
                        <div class="card-inner">
                        <p class="text-primary">AUTHORS</p>
                        <span class="material-icons-outlined text-green">signature</span>
                        </div>
                        <span class="text-primary font-weight-bold">
                            <?php
                                $row = count_authors_ctr();

                                $row = intval(array_values($row)[0]);
                                
                                echo $row;                                                        
                            ?>
                        </span>
                        <!-- <span class="text-primary font-weight-bold"><?php //echo"count_product_ctr()"?></span> -->
                    </div>

                    <div class="card">
                        <div class="card-inner">
                        <p class="text-primary">PURCHASE ORDERS</p>
                        <span class="material-icons-outlined text-red">add_shopping_cart</span>
                        </div>
                        <span class="text-primary font-weight-bold">
                            <?php
                                $new = count_orders_ctr();

                                $new = intval(array_values($new)[0]);
                                
                                echo $new;                                                        
                            ?>
                        </span>
                    </div>

                </div>

                <!-- CHART TAKEOUT -->
                <!-- <div class="charts">

                    <div class="charts-card">
                        <p class="chart-title">Top 5 Products</p>
                        <div id="bar-chart"></div>
                    </div>

                    <div class="charts-card">
                        <p class="chart-title">Purchase and Sales Orders</p>
                        <div id="area-chart"></div>
                </div>

                </div> -->
            </main>
            <!-- End Main -->

        </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="../js/scripts.js"></script>
  </body>
</html>