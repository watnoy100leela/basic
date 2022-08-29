<?php
$servername = "localhost";//hosting/127.0.0.1
$user = "root"; //userdatabass
$password = ""; //user password
$dbname = "db_basic_php"; // database name

//create connection
$conn = new mysqli($servername,$user,$password,$dbname);

// Check character set to utf8
$conn -> set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    
  die("Connection failed: " . $conn->connect_error);
  
}else{
  echo "Connnect Successfully!";
}
?>