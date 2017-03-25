<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db170311";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysql_query("SET NAMES utf8");

$sql = "SELECT * FROM students0311 limit 0,5";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "座號: " . $row["cID"]. " - Name: " . $row["cName"]. " 手機:" . $row["cPhone"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>