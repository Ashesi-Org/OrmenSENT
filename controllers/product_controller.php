<?php
//connect to the user account class
// the line below shows awareness
include("../classes/product_class.php");

//sanitize data
function cleanText($data) 
{

  // trim removes white spaces when user enter's text in fields.
  $data = trim($data);
  $data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}

//--authors-----------------------------------------------
//--ADD author--//
function add_new_author_ctr($bname)
{
  $add = new product_class();

  return $add->add_author_cls($bname);
}

//--SELECT ALL author--//
// select author details from database if it exists.
function select_all_author_ctr()
{
  // create an instance of the class
  // author class from the php file 
  $author_all = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $author_all->select_all_author_cls();
}

//--SELECT ONE author--//
function select_a_author_ctr($bid)
{
  // create an instance of the class
  // author class from the php file 
  $one_author = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $one_author->select_a_author_cls($bid);
}

//--UPDATE author--//
function update_author_ctr($bid, $bname)
{
  // create an instance of the class
  // product class from the php file 
  $upd = new product_class();

  // return the method in the product_class 
  //(-> means this) : no space btn this and next word
  return $upd->update_author_cls($bid, $bname);
}

//--DELETE author--//
function delete_author_ctr($bid)
{
  // create an instance of the class
  // product class from the php file 
  $del = new product_class();

  // return the method in the product_class 
  //(-> means this) : no space btn this and next word
  return $del->delete_author_cls($bid);
}

// // TOTAL NO. OF CATEGORIES AVAILABLE
function count_authors_ctr()
{
  // create an instance of the class
  // author class from the php file 
  $one_category = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $one_category->count_authors_cls();
}

//--FILTER CATEGORY--//
function get_authors_ctr()
{
  // create an instance of the class
  // product class from the php file 
  $getaut = new product_class();

  // return the method in the product_class 
  //(-> means this) : no space btn this and next word
  return $getaut->get_authors_cls();
}

// **********************************************************************************************************
// **********************************************************************************************************

//--CATEGORIES-----------------------------------------------

//--ADD CATEGORY--//
function add_category_ctr($cname)
{
  $category = new product_class();

  return $category->add_category_cls($cname);
}

//--SELECT ALL CATEGORY--//
function select_all_category_ctr()
{
  // create an instance of the class
  // author class from the php file 
  $category_all = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $category_all->select_all_category_cls();
}

//--SELECT ONE CATEGORY--//
function select_one_category_ctr($cat_id)
{
  // create an instance of the class
  // author class from the php file 
  $one_category = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $one_category->select_one_category_cls($cat_id);
}

//--UPDATE CATEGORY--//
function update_category_ctr($cat_id, $cname)
{
  // create an instance of the class
  // product class from the php file 
  $cat_upd = new product_class();

  // return the method in the product_class 
  // (-> means this) : no space btn this and next word
  return $cat_upd->update_category_cls($cat_id, $cname);
}

//--DELETE CATEGORY--//
function delete_category_ctr($cat_id)
{
  // create an instance of the class
  // product class from the php file 
  $del = new product_class();

  // return the method in the product_class 
  //(-> means this) : no space btn this and next word
  return $del->delete_category_cls($cat_id);
}

// // TOTAL NO. OF CATEGORIES AVAILABLE
function count_category_ctr()
{
  // create an instance of the class
  // author class from the php file 
  $one_category = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $one_category->count_category_cls();
}


// **********************************************************************************************************
// **********************************************************************************************************

//--PRODUCTS-----------------------------------------------

//--ADD PRODUCTS--//
function add_new_product_ctr($pcat, $pauthor, $ptitle, $price, $pdesc, $pimage, $pkey)
{
  $add = new product_class();

  return $add->add_new_product_cls($pcat, $pauthor, $ptitle, $price, $pdesc, $pimage, $pkey);
}

//--SELECT ALL PRODUCTS--//
function select_all_product_ctr()
{
  // create an instance of the class
  // author class from the php file 
  $product_all = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $product_all->select_all_product_cls();
}

//--SELECT ONE PRODUCT--//
function select_a_product_ctr($pid)
{
  // create an instance of the class
  // author class from the php file 
  $one_product = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $one_product->select_a_product_cls($pid);
}

//--UPDATE PRODUCT--//
function update_product_ctr($pid, $product_cat, $product_author, $product_title, $product_price, $product_desc, $product_image, $product_key){
  // create an instance of the class
  // product class from the php file 
  $upd = new product_class();

  // return the method in the product_class 
  //(-> means this) : no space btn this and next word
  return $upd->update_product_cls($pid, $product_cat, $product_author, $product_title, $product_price, $product_desc, $product_image, $product_key);
}


//--DELETE PRODUCT--//
function delete_product_ctr($pid){
  // create an instance of the class
  // product class from the php file 
  $del = new product_class();

  // return the method in the product_class 
  //(-> means this) : no space btn this and next word
  return $del->delete_product_cls($pid);
}

// VIEW PRODUCT
function view_all_product_ctr()
{
  // create an instance of the class
  // author class from the php file 
  $one_product = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $one_product->view_all_product_cls();
}

function search_a_product_ctr($keys)
{
  // create an instance of the class
  // author class from the php file 
  $one_product = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $one_product->search_a_product_cls($keys);
}

// // TOTAL NO. OF PRODUCTS AVAILABLE
function count_product_ctr()
{
  // create an instance of the class
  // author class from the php file 
  $one_product = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $one_product->count_product_cls();
}




// **********************************************************************************************************
// **********************************************************************************************************

//--FILTERS-----------------------------------------------

//--NOVELS--//
//--SELECT ALL NOVELS--//
function novels_ctr()
{
  // create an instance of the class
  // author class from the php file 
  $novel_all = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $novel_all->novels_cls();
}

//--SELECT ALL SCIENCE BOOKS--//
function science_ctr()
{
  // create an instance of the class
  // author class from the php file 
  $science_all = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $science_all->science_cls();
}

//--SELECT ALL MATH BOOKS--//
function maths_ctr()
{
  // create an instance of the class
  // author class from the php file 
  $math_all = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $math_all->maths_cls();
}

//--SELECT ALL HISTORY BOOKS--//
function history_ctr()
{
  // create an instance of the class
  // author class from the php file 
  $history_all = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $history_all->history_cls();
}



// SUBSCRIPTION
//--SELECT--//
function select_all_sub_ctr()
{
  // create an instance of the class
  // generel class from the php file 
  $subs = new product_class();

  // return the method in the class 
  //(-> means this) 
  return $subs->select_all_sub_cls();
}

//--INSERT--//
function add_sub_ctr($email,$created)
{
  // create an instance of the class
  // generel class from the php file 
  $subs = new product_class();

  // return the method in the class 
  //(-> means this) 
  return $subs -> add_sub_cls($email, $created);
}


// // TOTAL NO. OF ORDERS AVAILABLE
function count_orders_ctr()
{
  // create an instance of the class
  // author class from the php file 
  $one_category = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $one_category->count_orders_cls();
}


// ALL ORDERS
function select_all_orders_ctr()
{
  // create an instance of the class
  // author class from the php file 
  $orders_total = new product_class();

  // return the method in the customer_class 
  //(-> means this) : no space btn this and next word
  return $orders_total->select_all_orders_cls();
}





?>


