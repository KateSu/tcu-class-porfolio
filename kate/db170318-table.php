<?php

header("Content-Type:text/html; charset=utf-8");

include('dbConnect.php');

include('bs170318-part1.php');

$sl = 0;

$sql = "SELECT * FROM students0311 limit 5";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo '<h2 class="text-center">學生資料<a class="btn btn-primary btn-sm" href="db170318-create.php">新增</a></h2>';
    echo '<table class="table">';
    echo '<tr>';
    echo '<th>座號</th><th>姓名</th><th>性別</th><th>生日</th><th>信箱</th><th>手機</th>';
    echo '</tr>';
        
    while($row = mysqli_fetch_assoc($result)) {
        if ($row["cID"] % 2 === 1){
            echo '<tr class="active">';
        } else {
            echo '<tr>';
        }        
        echo '<td><a href="db170318-update.php?id=' . $row["cID"] . '">' . $row["cID"] .  '</a> <a href="db170325-delete.php" class="btn btn-danger btn-sm">刪除</a></td><td>' . $row["cName"] . '</td><td>' .$row["cSex"] . '</td><td>' . $row["cBirthday"] . '</td><td>' .$row["cEmail"] . '</td><td>' . $row["cPhone"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "0 results";
}

mysqli_close($conn);

include('bs170318-part2.php');

?>




