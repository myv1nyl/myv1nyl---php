<?php

/*
 * FMO - Fleetmaster Online
 * 
 * Online Fleet Management System
 * 
 * @author Dennis Brandt
 * @Developed By StoryBridgeSoftware
 * @copyright FleetMasterOnline
 * @Version 1.0
 * 
 */
 
 //Set PATH constant
 $path = realpath($_SERVER["DOCUMENT_ROOT"]);
 define('SITE_PATH',$path."/projects/myv1nyl/");
 
  //Define Template
 define('TEMPLATE_NAME','main');
 define('TEMPLATE',"tmpl/".TEMPLATE_NAME);

 //include ini.php (sets up vital functionality)
 include(SITE_PATH . "config/ini.php");
 
  //include ajax controller - redirects ajax calls to correct functions
 include(SITE_PATH . "controller/ajax_controller.php");
 
 // Include Header
 include(SITE_PATH . "inc/header.php");
  
 //include base controller
 include(SITE_PATH . "controller/base_controller.php");
  
 // Include Footer
 include(SITE_PATH  . "inc/footer.php");
 
?>