<?php
//connect to the user account class
// the line below shows awareness
include("../classes/customer_class.php");

//sanitize data
function cleanText($data) 
{

  // trim removes white spaces when user enter's text in fields.
  $data = trim($data);
  $data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}

//--INSERT--//
// insert new customer
// controller function (function expects/return something back [acts as a printer]) 
function insert_new_customer_ctr($fname, $email, $password, $country, $city, $contact)
{
  // create an instance of the class
  // generel class from the php file 
  $add = new customer_class();

  // return the method in the general_class 
  //(-> means this) : no space btn this and next word
  return $add->add_customer_cls($fname, $email, $password, $country, $city, $contact);
}

//--SELECT--//
// select login details from database if it exists.
function select_customer_ctr($c_email, $c_password)
{
  // create an instance of the class
  // customer class from the php file 
  $log = new customer_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $log->select_customer_cls($c_email, $c_password);
}



//--SELECT--//


//--UPDATE--//

//--DELETE--//

?>


