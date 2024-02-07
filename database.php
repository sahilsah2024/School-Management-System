<?php
define('DB_SERVER',  "localhost"); 
define('DB_USERNAME', "root"); 
define('DB_PASSWORD', ""); 
define('DB_DATABASE', "schoolnew");

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if(!$conn){
    echo "Database is not Connected";
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>