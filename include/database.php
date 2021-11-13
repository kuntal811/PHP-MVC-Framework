<?php

/**
 * Database Class file
 *
 *
 *
 *
 *
 *
 **/

class Database{

	private $conn;

	protected $sql_query;

	protected $lastInsertId;

	public function __construct(){
		$this->db_connect();
	}

	public function db_connect(){
		try{

			 $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_UNAME,DB_PASS);
			 $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch(PDOException $e){
			error_log($e->getMessage, 3, "../error_logs.txt");
			echo "Something went wrong! Please contact administrator.";
		}
	}

	/**
	 * function sql_query
	 *
	 *
	 * @param string $sql
	 * @param array $values
	 * @return string
	 *
	 *
	 */

	public function sql_query($sql,$values){

		$this->sql_query = $sql;
		try{

			$prepared_sql = $this->conn->prepare($sql);
			$prepared_sql->execute((array)$values);
			$this->lastInsertId = $this->conn->lastInsertId();

		}catch(PDOException $e){

			error_log($e->getMessage, 3, "../error_logs.txt");
			echo "Something went wrong! Please contact administrator.";
		}
	}


	public function lastInsertId(){
		return $this->lastInsertId;
	}


};



$db = new Database();

//$db->sql_query( "insert into MyGuests(firstname,lastname,email)values(?,?,?)",['firstname', 'lastname', 'email']);
//echo $db->lastInsertId();
?>