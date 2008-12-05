
<?php

	/**
	 * 
	 * @version db.php: v.1
	 * @package Herut CMS
	 * 
	 * @author Navid
	 * @todo finish lots
	 * 
	 * 
	 */
	
class HerData {
	
	//Allocate the information
	var $HOST = DB_HOST;
	var $USER = DB_USER;
	var $PASS = DB_PASS;
	var $DB = DB_DB;
	
	//Internal stuff
	var $Database;
	var $Query;
	var $Rows;
	
	
	/**
	 * @Desc Make the database connection
	 *
	 */
	function __construct() {
	
		$Database = @mysql_connect($HOST,$USER,$PASS) or die("Error connecting to the database<br />: ".mysql_error());
		
		if (!$this->Database) {
			die("Couldn't connect to the server");
		}
		//now select the database
		if (!mysql_select_db($DB, $this->Database)) {
			die("Can't connect to the database");
		}
		
		
	}
	
	
	//Clean the input
	protected function Check($value) {
		if (get_magic_quotes_gpc()) {
			$value = stripslashes($value);
		}
		
		return mysql_real_escape_string($value);
		
	}
	
	/**
	 * @Desc Runs a MySQL query
	 *
	 * @param (String)
	 * @return Query results
	 */
	
	function query($query) {
		//Clear the string from an unsually characters
		$query = $this->Check($query);
		
		//Run the query
		$this->Query = mysql_query($query, $this->Database);
		
		if (!$this->Query) {
			die("Error sending query");
		}
		$this->Rows = mysql_affected_rows();
		
		return $this->Query;
	}
}