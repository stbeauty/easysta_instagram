<?php
 

include 'functions/DataBase.php';
const DB_HOST = "localhost";
const DB_USER = "easy";
const DB_PASS = "Vb7UwPZ9-KMH";
const DB_NAME = "easy_easysta";
$db = new DataBase(); 

include 'modules/langs.php'; 
include 'modules/Instagram.php';
include 'functions/errors.php';

include 'functions/cuntryList.php';
include 'modules/node.php'; 
include 'modules/user.php';
langs::startLangSession();
langs::changeLang(); 

 


//var_dump($_SESSION['lang']);
/*
use MetzWeb\Instagram\Instagram;*/
/*
$instagram = new Instagram(array(
	'apiKey'      => '332121400eea4f369616c2733838e979',
	'apiSecret'   => '21630954da0c4ab6ac9302993e66ae67',
	'apiCallback' => 'http://easysta.com'
));
$instagram->getApiKey("5517722981.3321214.58e2b4e659a44d5cb2b3bbfb45d05d87");
$instagram->getOAuthToken($code);
var_dump($instagram->searchTags('love'));
echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";

$code = $_GET['code'];
$data = $instagram->getOAuthToken($code);

echo 'Your username is: ' . $data->user->username;

// set user access token
$instagram->setAccessToken($data);

// get all user likes
$likes = $instagram->getUserLikes();

// take a look at the API response
echo '<pre>';
print_r($likes);
echo '<pre>';*/
?>
