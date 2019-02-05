<?php
class db_connect{
	public static $count;
	private $localhost;
	private $username;
	private $pass;
	private $db_name;
	private $dbh;
	private $dbname;
	private $qry;
	
	public function __construct($localhost, $username, $pass, $db_name){
		$this->localhost = $localhost;
		$this->username = $username;
		$this->pass = $pass;
		$this->db_name = $db_name;
	}
	
	function connect(){
		$this->dbh = mysqli_pconnect($this->localhost, $this->username, $this->pass);
		$this->dbname = mysqli_select_db($this->dbh, $this->db_name);
		if(!is_resource($this->dbh)){
			throw new Exception;
		}
		if(!$this->dbname){
			throw new Exception;
		}
	}
	function execute($qry){
		$row = mysqli_query($qry);
		if(!$row){
			throw new Exception("Error Processing Query, Please solve the problme manually with the help of respective professionals", 1);
		}
		else{
			return $row;
		}
	}
	
	function fetch($qry){
		$row = mysqli_fetch_array($qry);
		if(!$row){
			throw new Exception("Error Fetching array", 1);
			
		}
		else{
			return $row;
		}
	}
}




?>