<?php 
if(isset($_COOKIE['username'])){
    //将各个cookie的到期时间设为过去的某个时间，使它们由系统删除，时间以秒为单位
    setcookie('username',$row[0], time()-3600*25, '/');
    setcookie('usertype',$row[2], time()-3600*25, '/');
}
//location首部使浏览器重定向到另一个页面
echo "
    <script>
    	alert('注销成功!');
    </script>
    ";
header("location: ../index.php");
?>