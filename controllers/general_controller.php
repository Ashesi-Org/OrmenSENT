<?php
  //connect to the user account class
  // the line below shows awareness
  include("../classes/general_class.php");

  //sanitize data
  // function cleanText($data) 
  {

    // trim removes white spaces when user enter's text in fields.
    // $data = trim($data);
    // $data = stripslashes($data);
    //$data = htmlspecialchars($data);
    // return $data;
  }

  //--INSERT--//
  // insert new customer
  // controller function (function expects/return something back [acts as a printer]) 
  // function insert_new_customer_ctr($fname, $email, $password, $country, $city, $contact, $user_role)
  // {
  //   // create an instance of the class
  //   // generel class from the php file 
  //   $add = new general_class();

  //   // return the method in the general_class 
  //   //(-> means this) : no space btn this and next word
  //   // return $add->add_customer_cls($fname, $email, $password, $country, $city, $contact, $user_role);
  // }

  //--SELECT--//
  function sub_ctr()
  {
    // create an instance of the class
    // generel class from the php file 
    $subs = new general_class();

    // return the method in the class 
    //(-> means this) 
    return $subs->sub_cls();
  }

  //--INSERT--//
  function add_sub_ctr($email, $token, $created)
  {
    // create an instance of the class
    // generel class from the php file 
    $subs = new general_class();

    // return the method in the class 
    //(-> means this) 
    return $subs->add_sub_cls($email, $token, $created);
  }

?>


