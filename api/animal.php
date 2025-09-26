<?php
/*
Example connection to mysql to pull back a few records (table and records for example are below)
CREATE TABLE example_table(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    animal VARCHAR(100),
    color_hex CHAR(7),
    legs INT
) COMMENT '';

INSERT INTO example_table (animal, color_hex, legs) VALUES ('cat','white',4);
INSERT INTO example_table (animal, color_hex, legs) VALUES ('giraffe','orange',4);
INSERT INTO example_table (animal, color_hex, legs) VALUES ('spider','black',8);
*/

$inputAnimal=$_GET['animal'];

header('Content-Type: application/json');

$servername = "db";
$username = "dev";
$password = "devpass";
$dbname = "devdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT id, animal, color_hex as color, legs FROM example_table WHERE animal = ?"); 
$stmt->bind_param('s', $inputAnimal);
$stmt->execute();
$result = $stmt->get_result();


$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}



echo json_encode($data);

$stmt->close();
$conn->close();
?>