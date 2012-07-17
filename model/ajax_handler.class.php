<?php 
/*
 * ajax class that handles all requests and re-routes them
 * Requests are defined by GET vars and are delivered by ajax_controller.php
 */
 
class ajax_handler{
		
	//Holds the PDO object
	private $db;
	
	//Carries any Results
	public $result;
	
	
	/*
	 * Constructor function for this class, establishes a DB connection if none exists already.
	 * @var $db
	 * @returns none
	 */
	function __construct($db=null){
		
		if(is_object($db)){
			
			$this->db = $db;
			
		}
		else{
			
			 try {

				 $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
			
			 } 
			 catch(PDOException $e) {
			
			 	echo "<b>Oops...there seems to be a database connection problem:</b><br />" . $e->getMessage();
			 	exit;
			
			 }
			
		}
		
	}
	
	
}

?>