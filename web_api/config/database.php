<?php

//Allow all CRUD operations to the database from a different request with a different host location 
header('Access-Control-Allow-Origin: *');

// used to connect to the database
$host = "localhost";
$db_name = "project01";
$username = "root";
$password = "";

try {
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

// show error
catch(PDOException $exception){
echo "Connection error: " . $exception->getMessage();
}
?>