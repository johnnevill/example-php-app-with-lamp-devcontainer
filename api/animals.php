<?php
/*
Example connection to mysql to pull back a single record. Data for database:
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

$sql = "SELECT id, animal, color_hex as color, legs FROM example_table"; 
$result = $conn->query($sql);

$records = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $records[] = $row;
    }
}


echo json_encode($records);

$conn->close();
?>