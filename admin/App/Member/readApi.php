<?php 

$url = "http://localhost:5000/users";
$json = file_get_contents($url);
$Memberdata = json_decode($json, true);

?>