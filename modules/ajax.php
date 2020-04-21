<?php
 //output_buffering
include '../inc.php';
class ajax {
	static function getTemplait () { 
		if (!isset($_POST["DATA"]) || isset($_POST["DATA"]) && isset($_POST["DATA"]["CallBack"]) && $_POST["DATA"]["CallBack"] != "getTemplait") {
			return null;
		} 
		 
		$Node = new nodes();
		$Node->setData($_POST["DATA"]); 
		if ($_POST["Loop"]) { 
			
			for ($i=0; $i < 8; $i++) {  
				$Node->setNode($_POST["DATA"]["Data"][$i]["node"]);
				$OneNode = get_object_vars($Node); 
				require "../parts/" . $_POST["DATA"]["Info"]["TemplaitName"];
			} 	
		} else { 
			$OneNode = $Node->setNode($_POST["DATA"]["Data"][0]["node"]);
			$OneNode = get_object_vars($Node); 
			require "../parts/" . $_POST["DATA"]["Info"]["TemplaitName"];
		}
	}

	static function login () { 
		if (isset($_POST["callback"]) && $_POST["callback"] == "signin") {
			
			if (user::login()){ 
				$_SESSION["UserLigin"] = true;  
				header("Location: http://easysta.com");
				die();
			} else {

				$_SESSION["UserLigin"] = 0;  
				header("Location: http://easysta.com?error=1");
				die();
			}
			
		}
	}

	static function signup () {
		if (isset($_POST["callback"]) && $_POST["callback"] == "signup") {
			user::signup();
			$_SESSION["UserLigin"] = true;  
			header("Location: http://easysta.com");
			die();
		} 
	}	
	
	static function logout () {
		if (isset($_GET['logout']) && $_GET['logout'] == 1){
			$_SESSION["UserLigin"] = false;

			header("Location: http://easysta.com");
			die();
		}
	}

	static function search () {
		if (isset($_POST["callback"]) && $_POST["callback"] == "search") {

		}
	}
}

ajax::getTemplait();
ajax::login(); 
ajax::signup();
ajax::logout(); 
ajax::search(); 


/*$Node = new nodes();
$Node->getList("love");
var_dump(get_object_vars($Node));*/
?>