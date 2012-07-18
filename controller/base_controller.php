<?php 

/*
 * base controller
 * loads required controller files
 */
 
//get URI
$uri = $_SERVER['REQUEST_URI'];
 
 //split uri and count
$uri = explode('/' , $uri);
print_r($uri);

if(is_dir(SITE_PATH . "../views/" . $uri[0])){
	
	if(is_file(SITE_PATH . "../views/" . $uri[0] . "/" . $uri[1] . "_view.php")){
		
		include(SITE_PATH . "../views/" . $uri[0] . "/" . $uri[1] . "_view.php");
		
	}else if(is_dir(SITE_PATH . "../views/" . $uri[0])){
		
		include(SITE_PATH . "../views/" . $uri[0] . "/index_view.php");
		
	}
	
}else{
	
	include(SITE_PATH . '../views/index_view.php');

}


?>