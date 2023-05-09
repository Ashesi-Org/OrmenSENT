<?php
//connect to database class
require("../settings/db_class.php");



class cart_class extends db_connection
{
    // **********************************************************************************************************
    // **********************************************************************************************************

    //--CART MANAGEMENT-----------------------------------------------
    //--ADD TO CART--//
	public function add_to_cart_cls($pid, $ip_address, $cid){

		$sql = "INSERT INTO `cart` (`p_id`, `ip_add`, `c_id`,`qty`) VALUES ('$pid', '$ip_address', '$cid', '1' )";
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_query($sql);
	
	}

    // SELECT ALL FROM CART
    public function select_all_cart_cls($cid)
    {
        $sql = "SELECT products.product_id,products.product_price*cart.qty, products.product_title, products.product_image, products.product_price, cart.qty FROM `cart` INNER JOIN `products` ON cart.p_id = products.product_id WHERE cart.c_id = '$cid'";

        return $this-> db_fetch_all($sql);
    }

    // FUNCTION THAT CHECKS IF ITEMS ARE ALREADY IN THE CART.
    public function dup_cart_cls($pid, $cid)
    {
        $sql = "SELECT `p_id`, `c_id` FROM `cart` WHERE `p_id` = '$pid' AND `c_id` = '$cid'";

        return $this-> db_fetch_all($sql);
    }

    // UPDATE CART
    public function update_cart_qty_cls($pid, $cid)
    {
        $sql = "UPDATE `cart` SET `qty` = qty + 1 WHERE `p_id` = '$pid' AND `c_id` = '$cid'";

        return $this-> db_query($sql);

    }

    // COUNT ALL  CARD ITEMS
    public function count_cart_cls($cid)
    {

        $sql = "SELECT SUM(`qty`) FROM `cart` WHERE `c_id` = $cid ";

        return $this-> db_fetch_all($sql);
    }

    // COUNT ONE CARD ITEM
    public function count_one_cart_cls($cid){

        $sql = "SELECT `qty` FROM `cart` WHERE `c_id` = $cid ";

        return $this-> db_fetch_one($sql);
    }

    // SELECT QTY
    function select_qty_cls($a, $b)
    {
        $sql = "SELECT `qty` FROM `cart` WHERE `c_id` = $b AND `p_id` = $a";

        return $this-> db_fetch_one($sql);
    }

    // DELETE FROM CART
    public function delete_from_cart_cls($cust_id, $cid){

        $sql = "DELETE FROM `cart` WHERE `p_id` = $cust_id AND `c_id` = $cid";

        return $this-> db_query($sql);
    }

    // UPDATE CART DELETE QTY
    public function update_cart_qty_del_cls($cust_id, $cid){

        $sql = "UPDATE `cart` SET `qty` = `qty`-1 WHERE `p_id` = $cust_id AND `c_id` = $cid";

        return $this-> db_query($sql);
    }

    // UPDATE QTY TO INCREASE/DECREASE.
    public function update_qty_cls($p_id, $cid, $qty){
        
        $sql = "UPDATE `cart` SET `qty` = '$qty' WHERE `p_id` = $p_id AND `c_id` = $cid";
        
        return $this-> db_query($sql);
    }

    //--INSERT PAYMENT--//
	// line 16 is executed in general_controller
	public function insert_payment_cls($amount, $cid, $id_o, $date_o)
	{		
		$sql = "INSERT INTO `payment`(`amt`, `customer_id`, `order_id`,`currency`, `payment_date`) VALUES ('$amount', '$cid', '$id_o', 'GHS', '$date_o')";
		
		return $this->db_query($sql);
		
	}

    // TOTAL PRICE CART
    public function total_price_cart_cls($cid)
    {
        $sql = "SELECT SUM(cart.qty*products.product_price) FROM `cart` INNER JOIN `products` ON cart.p_id = products.product_id WHERE cart.c_id = '$cid'";

        return $this-> db_fetch_one($sql);
    }

    // INSERT ORDER
    public function insert_orders_cls($cid, $invoice, $date)
    {
        $sql = "INSERT INTO `orders` (`customer_id`, `invoice_no`, `order_date`) VALUES ('$cid', '$invoice', '$date')";

        return $this->db_query($sql);
    }

    // ORDER ID
    public function order_id_cls()
    {
        $sql = "SELECT `order_id` FROM `orders` ORDER BY `order_id` DESC LIMIT 1";

        return $this->db_fetch_one($sql);

    }

    // ORDER DATE
    public function order_date_cls()
    {
        $sql = "SELECT `order_date` FROM `orders` ORDER BY `order_id` DESC LIMIT 1";

        return $this->db_fetch_one($sql);

    }

    // CART DETAILS
    public function cart_details_cls($cid)
    {
        $sql = "SELECT `p_id`, `qty` FROM `cart` WHERE `c_id` = '$cid'";

        return $this-> db_fetch_one($sql);
    }

    // INSERT ORDER DETAILS
    public function insert_order_details_cls($id_o, $p_id, $qty)
    {
        $sql = "INSERT INTO `orderdetails` (`order_id`, `product_id`, `qty`) VALUES ('$id_o', '$p_id', '$qty')";

        return $this-> db_query($sql);
    }

    // DELETE FROM CART
    public function delete_cart_cls($cid)
    {
        $sql = "DELETE FROM `cart` WHERE `c_id` = '$cid'";

        return $this-> db_query($sql);
    }


}
