<?php

$error_msg = "";
//判断用户是否已经设置cookie，如果未设置$_COOKIE['user_id']时，执行以下代码
if(!isset($_COOKIE['username'])){
    if(isset($_POST['submit'])){//判断用户是否提交登录表单，如果是则执行如下代码
        $con = mysqli_connect("localhost","root","letmein");
        if (!$con)
        {
          die('Could not connect: ' . mysql_error());
        }
        //do something
        $user=$_POST["user"];
        $psd=$_POST["psd"];

        mysqli_select_db($con, "armsdata");

        $sql = "select * from armsusers where usersname = '$user' and userspwd = '$psd'";
        $result = mysqli_query($con,$sql);

        if (!$result) {
         printf("Error: %s\n", mysqli_error($con));
         exit();
        }

        $num = mysqli_num_rows($result);
        if($num){
            $row = mysqli_fetch_row($result);
            //echo $row[0].$row[2];
            setcookie('username',$row[0], time()+3600*9, '/');
            setcookie('usertype',$row[2], time()+3600*9, '/');
            header("location: ../manage.php");
        }
        else{//若查到的记录不对，则设置错误信息
                echo 'Sorry, you must enter a valid username and password to log in.';
        }
    }
    else{
            $error_msg = 'Sorry, you must enter a valid username and password to log in.';
    }
}
else{//如果用户已经登录，则直接跳转到已经登录页面
    echo $_COOKIE["username"];
}
?>
