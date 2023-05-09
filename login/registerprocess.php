<?php
    include("../controllers/customer_controller.php");

    //check if user data exists.
    if(isset($_POST['register'])){
        //register user
        //grab form data
        // capture form data
        $fname = $_POST['customer_name'];
        $email = $_POST['customer_email'];
        $password = $_POST['customer_pass'];
        $country = $_POST['customer_country'];
        $city = $_POST['customer_city'];
        $contact = $_POST['customer_contact'];
        // has to be hardcoded since its not coming from the form.
        $user_role = 2;

        // // call controller
        $check = insert_new_customer_ctr($fname, $email, $password, $country, $city, $contact, $user_role);

        echo "$check";
        

        // // method check
        // set session, redirect to home page, 
        if($check){
            echo "Record inserted!";
            header('location:login.php');
        }
        else{
                echo "Insertion failed!";
            
        }
    }    
?>








