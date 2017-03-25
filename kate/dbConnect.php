<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db170311";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("連線失敗: " . mysqli_connect_error());
}

mysql_query("SET NAMES utf8");

?>