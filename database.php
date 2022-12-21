<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);




$host = "localhost";
$dbname = "login_forco8";
$username = "root";
$password = "";



//Create connection

$mysqli = new mysqli($host, $username, $password, $dbname);


// Check connection 

if($mysqli-> connect_errno){
    die("Connection error: ". $mysqli ->connect_error);
}

return $mysqli;

?>