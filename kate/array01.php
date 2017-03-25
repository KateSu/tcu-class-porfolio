<?php 


    if (isset($_COOKIE['arr'])){
        for ($i = 0; $i < count($_COOKIE['arr']); $i++){
            $arr[$i] = $_COOKIE['arr'][$i];            
        }
    }else {
        $var0 = rand(0,10);
        $var1 = rand(0,10);
        $var2 = rand(0,10);
        $var3 = rand(0,10);
        $var4 = rand(0,10);
    
        setcookie('arr[0]', $var0);
        setcookie('arr[1]', $var1);
        setcookie('arr[2]', $var2);
        setcookie('arr[3]', $var3);
        setcookie('arr[4]', $var4);
        
        for ($i = 0; $i < count($_COOKIE['arr']); $i++){
            $arr[$i] = $_COOKIE['arr'][$i];            
        }
    }

    echo 'number in order:';
    for ($i = 0; $i < count($arr); $i++){
        sort($arr);
        if ($i < count($arr)-1){
            echo $arr[$i].'、';
        } else {
            echo $arr[$i];            
        }
    }

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        enter a number: <input type="text" name="g">
        <input type="submit">
    </form>
    <?php
        if (isset($_GET['g'])){
            $g = $_GET['g'];
            
            if (in_array($g,$arr)){
                echo '<br>bingo!!';
                echo '<a href='.$_SERVER['PHP_SELF'].'>play another game</a>';
                setcookie('arr[0]', time() - 3600);
                setcookie('arr[1]', time() - 3600);
                setcookie('arr[2]', time() - 3600);
                setcookie('arr[3]', time() - 3600);
                setcookie('arr[4]', time() - 3600);
            } else {
                echo '<br>try again';
            }
        }
    ?>
</body>
</html>