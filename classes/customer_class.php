<?php
//connect to database class
require("../settings/db_class.php");



class customer_class extends db_connection
{
    
	//--INSERT--//
	// line 12 (right below) is executed in customer_controller.
	public function add_customer_cls($fname, $email, $password, $country, $city, $contact){
		// password encryption line 
		// I can't use the same variable name after encryption 
		$customer_password = md5($password);
 		// password_hash(string $password, string|int|null $algo, array $options = []): string;

		$sql = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `user_role`) VALUES('$fname', '$email', '$customer_password', '$country', '$city', '$contact', '2')";
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_query($sql);
	
	}
	
	//--SELECT--//
	// line 16 is executed in general_controller
	public function select_customer_cls($c_email, $c_password){
		// password encryption line 
		// I can't use the same variable name after encryption 
		$customer_pass = md5($c_password);
		$sql = "SELECT * FROM `customer` WHERE `customer_email`= '$c_email' AND `customer_pass`= '$customer_pass'";
		
		// Because '$this' extends you just call it
		// db_query helps execute the process. So $sql is the content.
		return $this->db_fetch_one($sql);
		
	
	} 
	
}



?>