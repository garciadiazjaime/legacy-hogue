<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  DataBase {

	private static $query;
	private static $host='localhost';
	private static $user='root';
	private static $pssw='';
	private static $bd='hogue';
	
/*	private static $host='mysql2.myregisteredsite.com';
	private static $user='118969_portal';
	private static $pssw='!!@@portal@@!!';
	private static $bd='118969_portal';
*/
	private static $connection;

	static function connect() {
		self::$connection = mysqli_connect(self::$host, self::$user, self::$pssw, self::$bd) 
			or die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	}
	
	static function set_query($query){
		self::$query = $query;
	}
	
	static function get_query(){
		return self::$query;
	}

	static function get_data() {
		if(!self::$connection)
			self::connect();
		$result = self::execute_query();
		$row = mysqli_fetch_row($result);		
		return $row[0];
	}
	
	static function get_row() {
		if(!self::$connection)
			self::connect();
		$result = self::execute_query();
		$row = mysqli_fetch_row($result);		
		return $row;
	}
//no mysqli - no tested
	static function get_fetch_array() {
		if(!self::$connection) 
			self::connect();
		$result = self::execute_query();
		$i=0;
		$data = array();				
		while($row = mysqli_fetch_array($result)){
			for($j=0 ; $j<sizeof($row)/2 ; $j++){
				$keys = array_keys($row);							
				$pos = 1+(2*$j);
				$data[$i][$keys[$pos]]=$row[$keys[$pos]];
			}				
			$i++;
		}						
		return $data;
	}

	static function execute_query() {
		$result = mysqli_query(self::$connection, self::$query) or die('Cant execute query, Error # (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		return $result;
	}


	static function desconnect() {
		mysqli_close(self::$connection) or die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	}

}
?>
