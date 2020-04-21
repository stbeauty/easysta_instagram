<?php 
class Errors { 

	public static function setError ($newError=null) {
		if (is_null($newError)) return null;

		if (!isset(static::$Errors)) static::$Errors = array();

		static::$Errors[] = $newError;

		return true;
	} 	

	public static function GetErrors () {
		if (is_empty(static::$Errors)) return '{"Mess" : "", "Code" : "0"}';
		return static::$Errors;
	}

} 

?>