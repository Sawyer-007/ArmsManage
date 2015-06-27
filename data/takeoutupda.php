<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['toid'];
$zbid = $_POST['zbid'];
$zbprice = $_POST['zbprice'];
$zbnum = $_POST['zbnum'];
$sid = $_POST['sid'];
$ryname1 = $_POST['ryname1'];
$ryname = $_POST['ryname'];
$optdate = $_POST['optdate'];
$memo = $_POST['memo'];

mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");
date_default_timezone_set("Asia/Chongqing");

$sql = "update takeout set zbid = '$zbid' ,  zbprice = '$zbprice' , zbnum = '$zbnum' , sid = '$sid' , rynamel = '$ryname1' , ryname = '$ryname' , optdate = '$optdate' , memo = '$memo' where toid = '$id'";

$result = mysqli_query($con,$sql);
if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
else
{
  $logTitle="takeout";
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