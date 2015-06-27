<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['sid'];
$name = $_POST['sname'];
$memo = $_POST['memo'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

$sql = "update storehouse set sname = '$name', memo = '$memo' where sid = '$id'";
$result = mysqli_query($con,$sql);
if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
else
{
  date_default_timezone_set("Asia/Chongqing");
  $logTitle="armsperson";
  $logDate=date("Y-m-d", time());
  $logTime=date("H:i:s", time());
  $logsql="insert into syslog values(null,'$logDate','$logTime',3,'$logTitle','$id','$_COOKIE[username]')";
	mysqli_query($con,$logsql);
	echo "
    <script>
        alert('修改成功!');
        window.close();
	</script>
	";
}
//close conncet
mysqli_close($con);
 ?>