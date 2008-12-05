<?php

//For now I guess we'll leave this here, but we'll put it in a framework once we have a base system done
if (!file_exists("configuration.php") || is_dir("install/")) {
	if (file_exists("install/install.php")) {
	        header("Location: install.php");
	        die();
	} else {
		die("Couldn't find Configuration file nor the installation file");
	}
}
?>
