<?php
// include database connection
include 'config/database.php';

// select all data
  $query = "SELECT p_id, p_name, p_description, p_price FROM products ORDER BY p_id DESC";
$stmt = $con->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
echo $json;
?>