<?php
 
 //Checks to see if an ajax call has been made. If so, Loads the required class and finds the appropriate function
  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
  	
	//instantiate new Object
	$ajax = new ajax_handler($db);
	
	//Load required function
	$ajax->$_GET['action']($_POST);
	
	//Call completed exit script
	exit;
  }
  
?>