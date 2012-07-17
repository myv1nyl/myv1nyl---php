<?php 

/*
 * ini.php configures overexposed
 * Call BD connection and handles auto loading of classes
 * 
 */

 //Set Error levels
 ini_set('display_errors', 1);
 error_reporting(E_ALL); 

 // Define Database details
 define('DB_HOST' , 'localhost');
 define('DB_USER' , 'root');
 define('DB_PASS' , 'root');
 define('DB_NAME' , 'fmo');
 

//Create PDO object to handle db connections
 try {

	 $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);

 } catch(PDOException $e) {

 	echo "<b>Oops...there seems to be a database connection problem:</b><br />" . $e->getMessage();
 	exit;

 }

//set up auto load function
// :TODO: Comment case sensitivity
 function __autoLoad($class){
 	
	$file = SITE_PATH . "model/" . $class .".class.php";
	if(file_exists($file)){
		
		include($file);
		
	}
	else{
		
		echo "<b>404</b>";
		
	}
	
 }
 
?>