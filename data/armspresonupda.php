<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['ryid'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

if($_POST['sex'] == 'male')
{
  $gender='男';
}
else
{
  $gender='女';
}

$sql = "update armsperson set ryname='$_POST[ryname]', sex='$gender', Nationality='$_POST[nationaloty]', Birth='$_POST[bitrh]',Title='$_POST[title]',Rank='$_POST[rank]',Political_Party='$_POST[political]',Culture_Level='$_POST[culture]',Marital_Condition='$_POST[marital]',Family_Place='$_POST[family]', Id_Card='$_POST[idcard]',Dep_Id='$_POST[depid]',Position='$_POST[position]',UpperId='$_POST[upperid]' where ryid = '$id'";
$result = mysqli_query($con,$sql);

date_default_timezone_set("Asia/Chongqing");

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
else
{
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