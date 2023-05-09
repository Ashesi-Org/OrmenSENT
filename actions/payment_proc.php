<?php

  include("../controllers/cart_controller.php");

  session_start();
  
  $email = $_GET['email'];

  $amount = $_GET['amount'];
  // echo $amount;
    
  $url = "https://api.paystack.co/transaction/initialize";

  $fields = [
    'email' => "$email",
    'amount' => $amount
  ];

  $fields_string = http_build_query($fields);
  
  //open connection
  $ch = curl_init();
  
  //set the url, number of POST vars, POST data
  curl_setopt($ch,CURLOPT_URL, $url);
  curl_setopt($ch,CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
    "Cache-Control: no-cache",
  ));
  
  //So that curl_exec returns the contents of the cURL; rather than echoing it
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
  
  //execute post
  $result = curl_exec($ch);
  echo $result;

  $invoice = mt_rand();

  $date = date("Y-m-d");
  
  $cid = $_SESSION['cid'];
  echo "$cid";

  $order = insert_orders_ctr($cid, $invoice, $date);

  if($order)
  {
    echo "Order recorded!";
  }
  else
  {
    echo "Order not recorded!";
  }

  $order_id = order_id_ctr();

  $order_date = order_date_ctr();

  $id_o = $order_id['order_id'];

  $date_o = $order_date['order_date']; 


  $payment = insert_payment_ctr($amount, $cid, $id_o, $date_o);
  // echo "$amount";
  // echo "$cid";
  // echo "$id_o";
  // echo "$date_o";

  if($payment)
  {
    echo "Success!";
  }
  else
  {
    echo "Failed!";
  }

  $cart_details = cart_details_ctr($cid);

  $p_id = $cart_details['p_id'];
  $qty = $cart_details['qty'];


  $order_details = insert_order_details_ctr($id_o, $p_id, $qty);
  if($order_details)
  {
    echo "Order details!";    
  }
  else
  {
    echo "Order details invalid!";
    
  }

  $delete_cart = delete_cart_ctr($cid);

  if($delete_cart)
  {
    echo "Order taken, thank you!";
  }
  else{
    echo "Error: check again!";
  } 

?>
