<?php
class user {
	static function getUser ($UserID=null) {  
		$insta_source = file_get_contents('https://i.instagram.com/api/v1/users/'.$UserID.'/info/');
  		 
  		$insta_array = json_decode($insta_source, TRUE);
  		return $insta_array;
	}

	static function login () {
		$db = new DataBase(); 
 
		$sql  = "SELECT email FROM users WHERE email=?s AND password=?s"; 

		return $db->getOne($sql, $_POST['email'], $_POST['pwd']); 
	}

	static function signup () { 
		
		$db = new DataBase(); 

		$sql  = "INSERT INTO users SET email=?s, password=?s"; 

		$db->query($sql, $_POST['email'], $_POST['pwd']); 
	}

}

?>