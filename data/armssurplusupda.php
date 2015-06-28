<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['spid'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

$sql = "update armssurplus set zbprice='$_POST[price]',zbnum='$_POST[num]',makedate='$_POST[makedate]',memo='$_POST[spid]' where spid = '$id'";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
else
{
  date_default_timezone_set("Asia/Chongqing");
  $logTitle="armssurplus";
  $logDate=date("Y-m-d", time());
  $logTime=date("H:i:s", time());
  $logsql="insert into syslog values(null,'$logDate','$logTime',0,'$logTitle','$id','$_COOKIE[username]')";
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