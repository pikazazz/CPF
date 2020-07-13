<?php 

$url = "http://localhost:5000/product";
$json = file_get_contents($url);
$json_data = json_decode($json, true);

?>