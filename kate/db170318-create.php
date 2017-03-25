<?php

if (isset($_GET['submit'])){
    $cname=$_GET['name'];
    $csex=$_GET['sex'];
    $cbirthday=$_GET['birthday'];
    $cemail=$_GET['email'];
    $cphone=$_GET['phone'];
    $caddr=$_GET['addr'];
    
    $sql="insert into students0311 (cName,cSex,cBirthday,cEmail,cPhone,cAddr) VALUES(";
    $sql.="'".$name."',";
    $sql.="'".$sex."',";
    $sql.="'".$birthday."',";
    $sql.="'".$mail."',";
    $sql.="'".tel."',";
    $sql.="'".$addr."')";

    include ('dbConnect.php');
    
    if (mysqli_query($conn, $sql)) {
        echo "新增成功";
    } else {
        echo "新增錯誤: " . $sql . "<br>" . mysqli_error($conn);
    }
}
include('bs170318-part1.php');
?>

<h3>新增資料</h3>
<form class="form-inline">
    <div class="form-group">
        <label>姓名：</label>
        <input type="text" class="form-control" name="name"><br>
        <label>性別：</label>
        <input type="text" class="form-control" name="sex"><br>
        <label>生日：</label>
        <input type="text" class="form-control" name="birthday"><br>
        <label>郵件：</label>
        <input type="text" class="form-control" name="email"><br>
        <label>電話：</label>
        <input type="text" class="form-control" name="phone"><br>
        <label>地址：</label>
        <input type="text" class="form-control" name="addr"><br>
    </div>
<div class="form-inline">
    <input type="submit" class="btn btn-info" name="submit">
    <input type="reset" class="btn btn-default">
</div>
</form>

<?php
    include('bs170318-part2.php');
?>
