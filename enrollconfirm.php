<?php

    require("DBconnect.php"); 
    $uName = $_POST["uaccount"];
    $uPwd = $_POST["upasswd"];
    $uRole = $_POST["role"];

    //回家寫判斷是否帳號存在
    $name = "SELECT uName FROM user";
    
    if($result = mysqli_query($link,$name)){
        $rowcount  = mysqli_num_rows($result);
        if($rowcount >= 1){
            echo "帳號已存在!";
        }
    }

    $SQL = "INSERT INTO user (uName,uPwd,uRole) VALUES ('$uName','$uPwd','$uRole')";
    
    if(mysqli_query($link,$SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('註冊成功');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url = list.php'>";
        //header('Location: list.php');
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('註冊失敗');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url = enroll.php'>";
    }
    //header('Location: list.php');
?>