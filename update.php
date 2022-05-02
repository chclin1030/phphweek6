<?php

require("DBconnect.php");
$uNo = $_GET["uNo"];

$SQL = "SELECT * FROM user WHERE uNo = '$uNo'";
if($result = mysqli_query($link,$SQL)){
    while( $row = mysqli_fetch_assoc($result)){
        $uName = $row["uName"];
        $uPwd = $row["uPwd"];
        $uRole = $row["uRole"];
    }
}

?>

<h2>使用者更新</h2>
    <form action="updateconfirm.php" method="post">
        <p>User Number： <?php echo $uNo;?></p>
        <input type="hidden" name = "uNo" value='<?php echo $uNo;?>'>
        <p>帳號： <input type="text" name="uaccount" placeholder="帳號" value='<?php echo $uName;?>'></p>
        <p>密碼： <input type="text" name="upasswd" placeholder="密碼" value='<?php echo $uPwd;?>'></p> 

        <?php
        if($uRole == 'user'){
            echo "<p>角色： <input type='radio' name='uRole' value='admin'>admin<input type='radio' name='uRole' value='user' checked>user</p>";
        }else{
            echo "<p>角色： <input type='radio' name='uRole' value='admin' checked>admin<input type='radio' name='uRole' value='user'>user</p>";
        }
        
        ?>

        <br><button input type="submit">修改</button>
    </form>

