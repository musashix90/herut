<?php


//First we get our base information we need
require("./default.configuration.php");


//include our engines
require("engines.php");

//Capture errors and warnings
error_reporting(E_ALL);

//Database 
require("db.php");


//Include our everyday use functions
include("functions.php");


?>