<?php
// get passed parameter value, in this case, the record ID

$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

//include database connection
include 'config/database.php';

// read current record's data
try {
    // prepare select query
    $query = "SELECT p_id, p_name, p_description, p_price FROM products WHERE p_id = ? LIMIT 0,1";
    $stmt = $con->prepare( $query );
 
    $stmt->bindParam(1, $id);
 
    $stmt->execute();
 
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $json = json_encode($row);
echo $json;
}
 
// show error
catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}
?>