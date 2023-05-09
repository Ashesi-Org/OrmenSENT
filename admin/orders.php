<?php
    include("../settings/core.php");
    include("../controllers/product_controller.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Orders</title>
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
                    <span class="material-icons-outlined">email</span>
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
                        <p class="">PRODUCTS</p>
                        <span class="material-icons-outlined text-blue">inventory_2</span>
                        </div>
                        <span class="font-weight-bold">56</span>
                        <!-- <span class="text-primary font-weight-bold"><?php //echo"count_product_ctr()"?></span> -->
                    </div>

                    <div class="card">
                        <div class="card-inner">
                        <p class="y">CATEGORIES</p>
                        <span class="material-icons-outlined text-orange">category</span>
                        </div>
                        <span class="font-weight-bold">56</span>
                        <!-- <span class="text-primary font-weight-bold"><?php //echo"count_product_ctr()"?></span> -->
                    </div>

                    <div class="card">
                        <div class="card-inner">
                        <p class="">AUTHORS</p>
                        <span class="material-icons-outlined text-green">signature</span>
                        </div>
                        <span class="font-weight-bold">56</span>
                        <!-- <span class="text-primary font-weight-bold"><?php //echo"count_product_ctr()"?></span> -->
                    </div>

                    <div class="card">
                        <div class="card-inner">
                        <p class="">PURCHASE ORDERS</p>
                        <span class="material-icons-outlined text-red">add_shopping_cart</span>
                        </div>
                        <span class="font-weight-bold">83</span>
                    </div>

                </div>

                <!-- ORDERS -->
                <div class="row">
                    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Latest transactions</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Customer ID</th>
                                            <th scope="col">Invoice_no</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col"></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                                // fetching all the authors.
                                                $all_orders = select_all_orders_ctr();
                                                foreach ($all_orders as $order) {
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $order['order_id']?></th>
                                                    <td><?php echo $order['customer_id']?></td>
                                                    <td>j<?php echo $order['invoice_no']?></td>
                                                
                                                    <td><?php echo $order['order_date']?></td>
                                                    <td  style="color: yellow;">pending</td>
                                                    <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                                                </tr>
                                            <?php 
                                                }
                                            ?>
                                        </tbody>

                                    </table>

                                </div>
                                <a href="#" class="btn btn-block btn-light">View all</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <!-- Another widget will go here -->
                    </div>
                </div>
            </main>
            <!-- End Main -->
        </div>

    <!-- Custom JS -->
    <script src="../js/scripts.js"></script>
  </body>
</html>