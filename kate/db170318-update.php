<?php

include('dbConnect.php');

if (isset($_GET['update'])){
    $cid=$_GET["id"];
    $cname=$_GET["name"];
    $csex=$_GET["sex"];
    $cbirthday=$_GET["birthday"];
    $cemail=$_GET["email"];
    $cphone=$_GET["phone"];
    $caddr=$_GET["addr"];
    
    $sql = "update students0311 set cname='$cname', csex='$csex', cbirthday='$cbirthday', cemail='$cemail', cphone='$cphone', caddr='$caddr' where cid='$cid'";
    
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

<h3>修改資料</h3>
<form class="form-inline">
    <div class="form-group">
        <label>座號：<?php echo $row["cID"]; ?></label><br>
        <input type="hidden" name="id" value="<?php echo $row["cName"]; ?>">
        <label>姓名：</label>
        <input type="text" class="form-control" name="name" value="<?php echo $row["cName"]; ?>"><br>
        <label>性別：</label>
        <input type="text" class="form-control" name="sex" value="<?php echo $row["cSex"]; ?>"><br>
        <label>生日：</label>
        <input type="text" class="form-control" name="birthday" value="<?php echo $row["cBirthday"]; ?>"><br>
        <label>郵件：</label>
        <input type="text" class="form-control" name="email" value="<?php echo $row["cEmail"]; ?>"><br>
        <label>電話：</label>
        <input type="text" class="form-control" name="phone" value="<?php echo $row["cPhone"]; ?>"><br>
        <label>地址：</label>
        <input type="text" class="form-control" name="addr" value="<?php echo $row["cAddr"]; ?>"><br>
    </div>
<div class="form-inline">
    <input type="submit" class="btn btn-info" name="update" value="更新">
    <input type="reset" class="btn btn-default">
</div>
</form>

<?php
    include('bs170318-part2.php');
}
?>