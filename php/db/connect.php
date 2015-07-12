<?php
 
	require_once ('../../vendor/joshcam/mysqli-database-class/MysqliDb.php');
	
	class Connection{
		protected $db;
		public function __construct(){
			$this->db = new MysqliDb ('localhost', 'root', '', 'errorHandler');
		}
	}

?>