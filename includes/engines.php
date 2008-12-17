<?php 

	/**
	 * 
	 * @version: engines.php: v.1
	 * @package Herut CMS
	 * 
	 * @author Navid Adab & Michael Tanner
	 * 
	 * @desc All the core engines for the CMS reside here. Please modify with care. 
	 * 
	 * @todo 
	 * 		- Template Engine
	 * 		- Error handling Engine
	 * 		- Lanaguage system engine
	 *  	- Modules creating/manipulating engine
	 * 		- Components placement engine
	 * 		note*: Except for the template engine, the rest are portions of the code from other files.
	 */
	

class Template {

	var $skin = DEF_TEM;
	
	
	function __construct() {
		
		/* First we check if the system is installed
		   The following test is to check wether the system is already installed. 
		   IMPORTANT: remember to delete the install/ directory after installing your Herut.
		*/
		if (!file_exists("configuration.php") && is_dir("install/")) {
			if (file_exists("install/index.php")) {
				header("Location: install/index.php");
				die();
			} else {
				die("Couldn't find Configuration file nor the installation file");
			}
		}
	
	//More code coming here
	}
	
	function Display() {
		

		//Start session handler
		//Placed here because we want to have a flexible header formation.
		session_start();
		
		
		$templatedir = './templates/'.$this->skin.'/index.php';
		
		if (!file_exists($templatedir)) off('Error Loading Template');
		
		//get the template file.
		require($templatedir);
	}
}
?>
