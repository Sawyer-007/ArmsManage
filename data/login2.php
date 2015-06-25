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
            setcookie('username',$row[0]);
            setcookie('usertype',$row[2]);
            header("location: ../manage.php");
        }
        else{//若查到的记录不对，则设置错误信息
                $error_msg = 'Sorry, you must enter a valid username and password to log in.';
        }
    }
    else{
            $error_msg = 'Sorry, you must enter a valid username and password to log in.';
    }
}
else{//如果用户已经登录，则直接跳转到已经登录页面
    header("location: ../manage.php");
}
?>
<html>
    <head>
        <title>Mismatch - Log In</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h3>Msimatch - Log In</h3>
        <!--通过$_COOKIE['user_id']进行判断，如果用户未登录，则显示登录表单，让用户输入用户名和密码-->
        <?php
        if(empty($_COOKIE['user_id'])){
            echo '<p class="error">'.$error_msg.'</p>';
        ?>
        <!-- $_SERVER['PHP_SELF']代表用户提交表单时，调用自身php文件 -->
        <form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset  style="width:250px;">
                <legend>Log In</legend>

                <label for="username">Username:</label>
                <!-- 如果用户已输过用户名，则回显用户名 -->
                <input type="text" id="username" name="username"
                value="<?php if(!empty($user_username)) echo $user_username; ?>" />
                <br/>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"/>
            </fieldset>    
            <br/>
            <input type="submit" value="Log In" name="submit"/>
        </form>
        <?php
        }
        ?>
    </body>
</html>