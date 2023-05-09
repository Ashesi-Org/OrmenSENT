<!-- Header -->
<header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class="material-icons-outlined">search</span>
            </div>


            <!-- SEARCH CATEGORIES -->
            <div class="container my-5">
                <form method="post" action="../actions/search_admin.php">
                    <input typ="text" placeholder="Search by id/name" name="search_cat">
                    <button class="btn btn-primary btn-sm" name="submit">Search</button>
                </form>                
            </div>
            <div class="container my-5">
                <table class="table">
                    <?php
                        if(isset($_POST['submit'])){
                            $search=$_POST['search_cat'];

                            $sql="Select * from `categories` WHERE `cat_id`='$search'";
                            $result = mysqli_query($con,$sql);
                        }
                    
                    ?>
                </table>


            </div>
            
        </header>
        <!-- End Header -->