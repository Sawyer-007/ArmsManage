<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");
date_default_timezone_set("Asia/Chongqing");
$logDate=date("Y-m-d", time());
$id=$_POST['repid'];
$sql="update armsrepair set status = 'Finish' , cost = '$_POST[cost]', result = '$_POST[result]', Rynamel = '$_POST[ryname1]', PostDate = $logDate where repid = '$id'";

$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
else{
	$logTitle="repair/finish";
	$logTime=date("H:i:s", time());
	$logsql="insert into syslog values(null,'$logDate','$logTime',1,'$logTitle','$id','$_COOKIE[username]')";
	mysqli_query($con,$logsql);
	echo "
    <script>
        alert('完成修理!');
        window.close();
	</script>
	";
}
//close conncet
mysqli_close($con);
?>