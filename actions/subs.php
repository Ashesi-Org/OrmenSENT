<?php
    include('../controllers/product_controller.php');

    if(isset($_POST['sub_process']))
    {
        $email = $_POST['email'];

        // $token = bin2hex(random_bytes(50));        
        
        // $date = new DateTime(null, new DateTimezone('GMT+1'));

        // Set the timezone
        $timezone = new DateTimeZone('GMT+1');
        $date = new DateTime(null, $timezone);

        $created = $date -> format('Y-m-d H:i:s');

        $check = add_sub_ctr($email,$created);

        // // method check
        // set session, redirect to home page, 
        if($check)
        {
            print_r($check);
            // set session, redirect to index page
            session_start();
            $_SESSION['cid'] = $check['customer_id'];
            $_SESSION['role'] = $check['user_role'];

            if($_SESSION['role']==1){
                echo "Record inserted!";
                header('location:../admin/subscribers.php'); 
            }
            else
            {
                //redirect to index page
            header('location:../view/index.php');
            }    
        }else
        {
            echo "Failed!";
        } 
    }

?>