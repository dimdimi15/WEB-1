<?php
include 'con.php';
$query = "SELECT * FROM names_catalog";
$statement = $database_connection->prepare($query);
$statement ->execute();

$data = array();
while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
    $data[] = $row;
}

echo json_encode($data);

?>
