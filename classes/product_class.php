<?php
//connect to database class
require("../settings/db_class.php");



class product_class extends db_connection
{
    //--authors-----------------------------------------------
	//--INSERT INTO AUTHORS TABLE--//
	// line 12 (right below) is executed in customer_controller.
	public function add_author_cls($bname){

		$sql = "INSERT INTO `authors`(`author_name`) VALUES ('$bname')";
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_query($sql);
	
	}

	//--SELECT ALL AUTHORS--//
	// line 16 is executed in general_controller
	public function select_all_author_cls(){
        $sql = "SELECT * FROM `authors`";
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_fetch_all($sql);
		
	
	} 

    //--SELECT ONE AUTHORS--//
    public function select_a_author_cls($bid){
		$sql= "SELECT `author_name` ,`author_id` FROM `authors` WHERE `author_id`='$bid'";

		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_fetch_one($sql);	
	} 

	//--UPDATE AUTHORS--//
	public function update_author_cls($bid, $bname){
        $sql = "UPDATE `authors` SET `author_name`='$bname' WHERE `author_id`= $bid";
		
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_query($sql);	
	} 

	// --DELETE AUTHORS--//
	public function delete_author_cls($bid){
        $sql= "DELETE FROM `authors` WHERE `author_id` = '$bid'";

		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_query($sql);
	
	} 

	// TOTAL NO. OF AUTHORS AVAILABLE
	public function count_authors_cls(){
		$sql= "	SELECT COUNT(*) FROM `authors`";	
		return $this->db_fetch_one($sql);	
	}


	// **********************************************************************************************************
	// **********************************************************************************************************

	//--CATEGORIES-----------------------------------------------

	//--INSERT INTO CATEGORY TABLE--//
	public function add_category_cls($cname){

		$sql = "INSERT INTO `categories`(`cat_name`) VALUES ('$cname')";
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_query($sql);
	
	}

	//--SELECT ALL CATEGORIES--//
	public function select_all_category_cls(){
        $sql = "SELECT * FROM `categories`";
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_fetch_all($sql);	
	} 

    //--SELECT ONE CATEGORY--//
    public function select_one_category_cls($cat_id){
		$sql= "SELECT `cat_id` ,`cat_name` FROM `categories` WHERE `cat_id`='$cat_id'";

		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_fetch_one($sql);
		
	
	} 

	//--UPDATE CATEGORIES--//
	public function update_category_cls($cat_id, $cname){
        $sql = "UPDATE `categories` SET `cat_name`='$cname' WHERE `cat_id`= $cat_id";
		
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_query($sql);

	} 

	//--DELETE CATEGORIES--//
	public function delete_category_cls($cat_id){
        $sql= "DELETE FROM `categories` WHERE `cat_id` = '$cat_id'";

		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_query($sql);
	} 

	// TOTAL NO. OF CATEGORIES AVAILABLE
	public function count_category_cls(){
		$sql= "	SELECT COUNT(*) FROM `categories`";	
		return $this->db_fetch_one($sql);	
	}


	// **********************************************************************************************************
	// **********************************************************************************************************

	//--PRODUCTS-----------------------------------------------

	//--INSERT INTO PRODUCTS TABLE--//
	// line 12 (right below) is executed in customer_controller.
	public function add_new_product_cls($pcat, $pauthor, $ptitle, $price, $pdesc, $pimage, $pkey)
	{

		$sql = "INSERT INTO `products`(`product_cat`, `product_author`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES ('$pcat', '$pauthor', '$ptitle', '$price', '$pdesc', '$pimage', '$pkey')";
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_query($sql);
	
	}

	//--SELECT ALL PRODUCTS--//
	public function select_all_product_cls(){
        $sql = "SELECT * FROM `products`";

		// $sql = "SELECT * FROM `products` where product_cat=2;";
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_fetch_all($sql);	
	} 

    //--SELECT ONE PRODUCT--//
	public function select_a_product_cls($pid){
		// $sql= "SELECT  `product_id`, `product_cat`, `product_author`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords` FROM `products` WHERE `product_id`='$pid'";

		$sql= "SELECT authors.author_name, categories.cat_name, products.product_id, products.product_price, products.product_image, products.product_title, products.product_desc, products.product_desc,products.product_keywords
		FROM ((`products` 
		INNER JOIN authors ON authors.author_id = products.product_author)
		INNER JOIN categories ON categories.cat_id = products.product_cat) WHERE products.product_id ='$pid'";
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_fetch_one($sql);	
	}

    
	//--UPDATE PRODUCT--//
	public function update_product_cls($pid, $product_cat, $product_author, $product_title, $product_price, $product_desc, $product_image, $product_key){
		$sql = "UPDATE `products` SET `product_cat`='$product_cat',`product_author`='$product_author',`product_title`='$product_title',`product_price`='$product_price',`product_desc`='$product_desc',`product_image`='$product_image',`product_keywords`='$product_key' WHERE `product_id`= $pid";

		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_query($sql);	
	} 

	// --DELETE PRODUCT--//
	public function delete_product_cls($pid){
        $sql= "DELETE FROM `products` WHERE `product_id` = '$pid'";

		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_query($sql);
	}
	
	//--VIEW ALL PRODUCTS--//
	public function view_all_product_cls(){
		$sql = "SELECT * FROM `products`";
	
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_count($sql);	
	} 
	
	// **********************************************************************************************************
	// **********************************************************************************************************

	//-- SEARCH-----------------------------------------------
	// SEARCH BY PRODUCT
	public function search_a_product_cls($keys){
		$sql= "SELECT  * FROM `products` WHERE `product_keywords`LIKE '%$keys%'";

		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_count($sql);	
	}

	// TOTAL NO. OF PRODUCTS AVAILABLE
	public function count_product_cls(){
		$sql= "	SELECT COUNT(*) FROM `products`";

		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		// return $this->db_count($sql);	
		return $this->db_fetch_one($sql);	
	}




	// **********************************************************************************************************
	// **********************************************************************************************************

	//--FILTERS-----------------------------------------------
	//--SELECT ALL NOVELS--//
	public function novels_cls(){
        $sql = "SELECT * FROM `products` WHERE `product_cat` = '2';";
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_fetch_all($sql);	
	} 

	//--SELECT ALL SCIENCE BOOKS--//
	public function science_cls(){
        $sql = "SELECT * FROM `products` WHERE `product_cat` = '5';";
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_fetch_all($sql);	
	} 

	//--SELECT ALL MATH BOOKS--//
	public function maths_cls(){
        $sql = "SELECT * FROM `products` WHERE `product_cat` = '10';";
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_fetch_all($sql);	
	} 

	//--SELECT ALL HISTORY BOOKS--//
	public function history_cls(){
        $sql = "SELECT * FROM `products` WHERE `product_cat` = '9';";
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_fetch_all($sql);	
	} 

	// SUBSCRIPTION
	//--SELECT--//
	// line 16 is executed in general_controller
	public function select_all_sub_cls()
	{
		
		$sql="SELECT * from `subscribers`";
		
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_fetch_all($sql);
	
	}

	// INSERT
	public function add_sub_cls($email, $created){
		
		// $sql="INSERT INTO `subscribers` (`email`, `created`) VALUES('$email', ' $created')";

		$sql = "INSERT INTO `subscribers` (`email`, `created`) VALUES ('$email','$created')";
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_query($sql);
	
	}

	// TOTAL NO. OF ORDERS AVAILABLE
	public function count_orders_cls(){
		$sql= "	SELECT COUNT(*) FROM `orders`";	
		return $this->db_fetch_one($sql);	
	}

	// ALL ORDERS
	public function select_all_orders_cls(){
        $sql = "SELECT * FROM `orders`";
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_fetch_all($sql);
		
	
	} 



	


}

?>


