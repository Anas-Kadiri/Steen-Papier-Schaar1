<?php
//try {
//    $db = new PDO("mysql:host=localhost;dbname=steen,papier,schaar",
//    "root", "root");
//} catch (PDOException $e) {
//    die("Error!; " . $e->getMessage());
//}


//$servername = "localhost";
//$username = "root";
//$password = "root";
//
//// Create connection
//$conn = new PDO("mysql:host=localhost;dbname=steen,papier,schaar", $username, $password);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";
//

$username = "root";
$password = "root";
//database connectie
try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=steen,papier,schaar", $username, $password);
} catch (PDOException $error) {
    echo $error->getMessage();
}
