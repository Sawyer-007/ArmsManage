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

$sql="insert into armsrepair(RepId,Zbid,RepairDate,Unit,Reason,Status,Ryname,PostDate) values(null,'$_POST[zbid]','$_POST[repairdate]','$_POST[unit]','$_POST[reason]','Send','$_POST[ryname]','$logDate')";

$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
else{
	$id=mysqli_insert_id($con);
	$logTitle="repair/send";
	$logTime=date("H:i:s", time());
	$logsql="insert into syslog values(null,'$logDate','$logTime',1,'$logTitle','$id','$_COOKIE[username]')";
	mysqli_query($con,$logsql);
	echo "
    <script>
        alert('成功送修!');
        window.close();
	</script>
	";
}
//close conncet
mysqli_close($con);
?>