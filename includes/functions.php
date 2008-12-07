<?php

	/**
	 * @version functions.php: v.1
	 * @package Herut CMS
	 * 
	 * @author Navid Adab & Michael Tanner
	 * @Desc this file contains the functions that are used through out the CMS. Please modify with caution
	 * 
	 * @todo 
	 * 		- off() function as an alias to die();
	 * 		- validation functions
	 */
	
	

	/**
	 * @name off();
	 * @desc Uses die() to kill the site with loggin the error, and displaying the rest of the template
	 * 
	 */
function off($param='') {
	
	
	/* Error logging 
	$elog = new Error;
	if ($elog->Logging) { 
		$elog->AddLog($param);
	}*/
	
	/*call the template instance */
	$template = new Template;
	$template->footer();
	die();
}