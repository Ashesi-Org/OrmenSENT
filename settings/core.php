<?php
//start session
session_start(); 

//for header redirection
ob_start();

//function to check for login
function check_login(){
    // check if session for user_id has been set.
    // This is only possible if user login is succesful
    // (!isset($_SESSION['cid'])) --> (!) means that if the session is not set redierct user to logout page. 
    if(!isset($_SESSION['cid'])){
        header('location:../login/logout.php');
    }
}

// check login index
function check_login_index(){
    if(!isset($_SESSION['cid'])){
        header('location:login/logout.php');
    }
}
function logged(){
    if(isset($_SESSION['cid'])){
        return true;
    }else {
        return false;
    }
}

//function to get user ID


// run check-in before role
//function to check for role (admin, customer, etc)
function check_admin(){
    if ($_SESSION['role'] == 1){
        return $_SESSION['role'];
        header('location:../Admin/author.php');
    }
}

// //function to check for role (admin, customer, etc)
// function user_check(){
//     $_SESSION['user_role'] = $check_login['user_role'];
//     $_SESSION['customer_id'] = $check_login['customer_id'];

//     if($_SESSION['user_role'] = 1)
//         {
//             header("location:../Admin/admin_page.php");

//         }
//         elseif ($_SESSION['user_role'] = 2) {
//             // code...
          
//             header("location:../index.php");
//         }
// }

?>