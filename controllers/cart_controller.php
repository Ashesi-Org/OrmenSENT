<?php
//connect to the user account class
// the line below shows awareness
include("../classes/cart_class.php");

//sanitize data
// function cleanText($data) 
// {

  // trim removes white spaces when user enter's text in fields.
//   $data = trim($data);
//   $data = stripslashes($data);
  //$data = htmlspecialchars($data);
//   return $data;
// }

// **********************************************************************************************************
// **********************************************************************************************************

//--CART MANAGEMENT-----------------------------------------------
//--ADD TO CART--//
function add_to_cart_ctr($pid, $ip_address, $cid)
{
    // create an instance.
    $add = new cart_class();
    
    return $add->add_to_cart_cls($pid, $ip_address, $cid);
}

// SELECT ALL FROM CART
function select_all_cart_ctr($cid)
{
    // create an instance.
    $sel_cart = new cart_class();

    return $sel_cart-> select_all_cart_cls($cid);
}

// FUNCTION THAT CHECKS IF ITEMS ARE ALREADY IN THE CART.
function dup_cart_ctr($pid, $cid)
{
    // create an instance.
    $dup = new cart_class();

    return $dup->dup_cart_cls($pid, $cid);
}

// UPDATE CART
function update_cart_qty_ctr($pid, $cid)
{
    // create an instance.
    $upd_cart = new cart_class();

    return $upd_cart -> update_cart_qty_cls($pid, $cid);
}



// COUNT ALL
function count_cart_ctr($cid)
{
    // create an instance.
    $cnt = new cart_class();

    return $cnt->count_cart_cls($cid);
};

// COUNT ONE
function count_one_cart_ctr($cid)
{
    // create an instance.
    $cnt = new cart_class();

    return $cnt->count_one_cart_cls($cid);
};

// SELECT QTY
function select_qty_ctr($a, $b)
{
    $qty = new cart_class();
    return $qty->select_qty_cls($a, $b);
}


// DELETE FROM CART
function delete_from_cart_ctr($cust_id, $cid)
{
    // create an instance.
    $del = new cart_class();

    return $del->delete_from_cart_cls($cust_id, $cid);
};


// UPDATE CART DELETE QTY
function update_cart_qty_del_ctr($cust_id, $cid)
{
    // create an instance.
    $del = new cart_class();

    return $del->update_cart_qty_del_cls($cust_id, $cid);
};

// UPDATE QTY TO INCREASE/DECREASE.
function update_qty_ctr($p_id, $cid, $qty)
{
    $dot = new cart_class();

    return $dot->update_qty_cls($p_id, $cid, $qty);
}

//--INSERT PAYMENT--//
function insert_payment_ctr($amount, $cid, $id_o, $date_o)
{
  $add = new cart_class();

  return $add->insert_payment_cls($amount, $cid, $id_o, $date_o);
}

// TOTAL PRICE
function total_price_cart_ctr($cid)
{
    $add = new cart_class();

    return $add->total_price_cart_cls($cid);
}

// INSERT ORDER
function insert_orders_ctr($cid, $invoice, $date)
{
    $add =  new cart_class();

    return $add -> insert_orders_cls($cid, $invoice, $date);
}

// ORDER ID
function order_id_ctr()
{
    $toget = new cart_class();

    return $toget-> order_id_cls();
}

// ORDER DATE
function order_date_ctr()
{
    $toget = new cart_class();

    return $toget-> order_date_cls();
}

// CART DETAILS
function cart_details_ctr($cid)
{
    $toget = new cart_class();

    return $toget->cart_details_cls($cid);
}

// INSERT ORDER DETAILS
function insert_order_details_ctr($id_o, $p_id, $qty)
{
    $toget = new cart_class();

    return $toget->insert_order_details_cls($id_o, $p_id, $qty);
}

// DELETE FROM CART
function delete_cart_ctr($cid)
{
    $del = new cart_class();

    return $del-> delete_cart_cls($cid);
}

