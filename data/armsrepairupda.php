<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['repid'];
$zbid = $_POST['zbid'];
$repairdate = $_POST['repairdate'];
$unit = $_POST['unit'];
$reason = $_POST['reason'];
$ryname = $_POST['ryname'];

mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

$sql = "update armsrepair set zbid = '$zbid', repairdate = '$repairdate' , reason = '$reason', unit = '$unit' ,ryname = '$ryname' where repid = '$id'";

$result = mysqli_query($con,$sql);
if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
else
{
	date_default_timezone_set("Asia/Chongqing");
	$logTitle="armsrepair";
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