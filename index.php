<?php
<<<<<<< HEAD:index.php

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


=======
if (file_exists("install.php")) {
        header("Location: install.php");
}
>>>>>>> 345422d698332f53ffe3415cabb16270955b195a:index.php
?>
