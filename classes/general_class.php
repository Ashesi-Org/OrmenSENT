<?php
	//connect to database class
	require("../settings/db_class.php");

	/**
	*General class to handle all functions 
	*/
	/**
	 *@author David Sampah
	*
	*/

	class general_class extends db_connection
	{
		//--INSERT--//
		// line 16 is executed in general_controller
		public function sub_cls(){
			
			$sql="SELECT * from `subscribers`";
			
			
			// Because '$this' extends you just call it
			// db_query helps execute the process. So $sql is the content.
			return $this->db_fetch_all($sql);
		
		}


		// INSERT
		public function add_sub_cls($email, $token, $created){
			
			$sql="INSERT INTO `subscribers` (`email`, `token`, `created`) VALUES($email,$token,$created)";
			
			// Because '$this' extends you just call it
			// db_query helps execute the process. So $sql is the content.
			return $this->db_query($sql);
		
		}
		
		

		//--SELECT--//

	

		//--UPDATE--//



		//--DELETE--//
		

	}

?>

<!-- class files should just do query and execution -->
<!-- insert, update and delete -->
<!-- processing done by controller -->