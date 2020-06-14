<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = 'myDB1';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

// // Create database
// $sql = "CREATE DATABASE myDB1";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// sql to create table
// $sql = "CREATE TABLE user_info (
//   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   username VARCHAR(30) NOT NULL,
//   email VARCHAR(50),
//   password VARCHAR(30) NOT NULL,
  
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";
  
//   if ($conn->query($sql) === TRUE) {
//     echo "Table user_info created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }


?>