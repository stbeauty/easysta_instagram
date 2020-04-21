<?php

$data = file_get_contents($file_url);
 

$url  = "doun/" . $newfileName;

$handle = fopen($url, 'w'); //implicitly creates file
		
fwrite($handle, $data); 
?>