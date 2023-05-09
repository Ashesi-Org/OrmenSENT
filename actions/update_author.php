<?php
include('../controllers/product_controller.php');
?>

<DOCTYPE html>
    <head>
        <title>author Update</title>
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
            $get_id = $_GET['author_id'];

            // get to the controller
            $one_author = select_a_author_ctr($get_id);
            // print_r($one_author);
            // create var that will be equal to update ctr
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $bname = $_POST['author_name'];
                $update_author = update_author_ctr($get_id, $bname);

                if($update_author){
                    header("location:../admin/view_authors.php");
                }
                else{
                    echo "Something went wrong.";
                }
            }
        ?>
        
        <form method="post">            
            <div class="wrapper" style = "height: 400px;">
                <div class="header-text">Update author Here</div>   
                    <p>Fill this to update a author</p>
                    <hr>

                    <!-- <label for="author_name"><b>Name of author</b></label> -->
                    <input type="text" value="<?php echo $one_author['author_name'] ?>" placeholder="Update author name..." name="author_name" required>

                    <input type="hidden" value="<?php echo $one_author['author_id'] ?>" placeholder="Update author name" name="author_id" required>
                    <hr>

                    <button type="submit" value="updated" name="updated">Update author</button>
                </div>
            </div>
        </form>
   </body>
</html>



