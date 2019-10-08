<?php
	/**
	 * 
	 */
	class Database
	{
		private $con;
		
		public function connect(){
			include_once("constants.php");
			$this->con = new Mysqli(HOST, USER, PASS, DB);
			if ($this->con) {
				// echo "Connected";
				return $this->con;
			}
			return "Database Connection Fail";

		}
	}
	// $db = new Database();
	// $db->connect();
?>