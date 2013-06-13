<?php
class Conn{

	var $conn;
	var $dbhost = ""; //Database Host
	var $dbuser = ""; //Database Username
	var $dbpass = ""; //Database Password
	var $dbname = ""; //Database Name
	
	function connect()
	{
		$this->conn = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass);
		mysql_select_db($this->dbname) or die(mysql_error());	
	}
	
	function close()
	{
		mysql_close($this->conn);
	}

}
?>