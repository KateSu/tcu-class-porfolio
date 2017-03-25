
<?php
include("bootstrap01.php");
header("Content-Type:text/html; charset=utf-8");

include("conndb.php");

if (isset($_GET['sl']))
    $sl=$_GET['sl'];
else
    $sl=0; //目前頁次

$pn=3; //每頁出現筆數

$sql = "SELECT count(*) as c FROM students0311";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$tl=floor($row["c"]/$pn);   //$tl總頁數
if ($row["c"]%$pn!=0) $tl=$tl+1;

$sr=$sl*$pn; //開始筆數
    
$sql = "SELECT * FROM students0311 limit $sr, $pn";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<h1 class='text-center'>學生資料<a class='btn btn-primary btn-sm' href='insert.php'>新增</a></h1>";
    echo "<table class='table table-bordered'>";
    echo "<tr>";
    echo "<td>座號</td><td>姓名</td><td>性別</td><td>電話</td>";
    echo "</tr>";
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='success'>";
        echo "<td><a href='update.php?id=" . $row["cID"]. "'>".$row["cID"]."</a> <a href='delete.php?cid=".$row["cID"]."' class='btn btn-danger btn-sm'>刪除</a></td><td>" . $row["cName"]. "</td><td>".$row["cSex"]."</td><td>".$row["cPhone"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    if ($sl!=0)
      echo "<a href='dbtestb.php?sl=0' class='btn btn-primary'>第一頁</a>";
    if ($sl>0)
      echo "<a href='dbtestb.php?sl=".($sl-1)."' class='btn btn-primary'>前一頁</a>";
    if ($sl<$tl-1)  
      echo "<a href='dbtestb.php?sl=".($sl+1)."' class='btn btn-primary'>後一頁</a>";
    if ($sl!=$tl-1)
      echo "<a href='dbtestb.php?sl=".($tl-1)."' class='btn btn-primary'>最後頁</a>";
        
} else {
    echo "0 results";
}

mysqli_close($conn);
include("bootstrap02.php");
?>
 