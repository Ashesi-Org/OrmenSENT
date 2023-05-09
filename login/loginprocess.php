<?php

// connect to controller
// line 5 - awareness
require("../controllers/customer_controller.php");


//check if user has logged in.
if(isset($_POST['login']))
{
    //user logs in.
    //grab form data
    // capture form data
    $c_email = $_POST['customer_email'];
    $c_password = $_POST['customer_pass'];
    

    // call controller
    $check = select_customer_ctr($c_email, $c_password);
    
    // echo "$check";
    // print_r($check);

    // method check
    if($check)
    {
        print_r($check);
        // set session, redirect to index page
        session_start();
        $_SESSION['cid'] = $check['customer_id'];
        $_SESSION['role'] = $check['user_role'];

        if($_SESSION['role']==1){
          header('location:../admin/dashboard.php');
        }
        else
        {
            //redirect to index page
        header('location:../view/index.php');
        }

        // make changes to index page; login to logout. after session has been done
        
    }
    else
    {
        echo "Failed login!";
    } 
}    
?>

