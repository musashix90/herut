<?php

//For now I guess we'll leave this here, but we'll put it in a framework once we have a base system done

//The following test is to check wether the system is already installed. Will be improved in the near future.
if (!file_exists("configuration.php") && is_dir("install/")) {
	if (file_exists("install/index.php")) {
	        header("Location: install/index.php");
	        die();
	} else {
		die("Couldn't find Configuration file nor the installation file");
	}
}


//Start session handler
//Placed here because we want to have a flexible header formation.
session_start();


//This should be on top everything...but needs fixing
include("includes/core.php");


?>
