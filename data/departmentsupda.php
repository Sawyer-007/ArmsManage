<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['depid'];
$name = $_POST['depname'];
$desc = $_POST['desc'];
$upperid = $_POST['upperid'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

$sql = "update departments set depname = '$name', describes = '$desc', upperid = '$upperid' where depid = '$id'";
$result = mysqli_query($con,$sql);
if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
else
{
	date_default_timezone_set("Asia/Chongqing");
	$logTitle="departments";
	$logDate=date("Y-m-d", time());
	$logTime=date("H:i:s", time());
	$logsql="insert into syslog values(null,'$logDate','$logTime',3,'$logTitle','$id','$_COOKIE[username]')";
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