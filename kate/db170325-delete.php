<?php

include('dbConnect.php');

if (isset($_GET['delete'])){
    $cid=$_GET["id"];
    $cname=$_GET["name"];
    $csex=$_GET["sex"];
    $cbirthday=$_GET["birthday"];
    $cemail=$_GET["email"];
    $cphone=$_GET["phone"];
    $caddr=$_GET["addr"];
    
    $sql = "delete from students0311 where cid='$cid'";
    
    header('Location:170318-table.php');
    
}else {
    
$cid=$_GET['id'];

$sql = "SELECT * FROM students0311 where cid='$cid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
//   output data of each row
   $row = mysqli_fetch_assoc($result);
}
    
include('bs170318-part1.php');
?>

<h3>刪除資料</h3>
<form class="form-inline">
    <div class="form-group">
        <label>座號：<?php echo $row["cID"]; ?></label><br>
        <?php echo $row["cName"]; ?>
        <label>姓名：</label>
        <?php echo $row["cName"]; ?>
        <label>性別：</label>
        <?php echo $row["cSex"]; ?>
        <label>生日：</label>
        <?php echo $row["cBirthday"]; ?>
        <label>郵件：</label>
        <?php echo $row["cEmail"]; ?>
        <label>電話：</label>
        <?php echo $row["cPhone"]; ?>
        <label>地址：</label>
        <?php echo $row["cAddr"]; ?>
    </div>
<div class="form-inline">
    <input type="submit" class="btn btn-danger" name="delete" value="確認刪除">
    <a href="db170318-table.php" class="btn btn-primary">取消</a>
</div>
</form>

<?php
    include('bs170318-part2.php');
}
?>