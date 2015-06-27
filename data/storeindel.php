<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id=$_POST['delsiid'];
mysqli_select_db($con, "armsdata");

$qsql="select * from storein where siid = '$id'";
$dsql="delete from storein where siid = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);

date_default_timezone_set("Asia/Chongqing");
$logTitle="storein";
$logDate=date("Y-m-d", time());
$logTime=date("H:i:s", time());
$logsql="insert into syslog values(null,'$logDate','$logTime',2,'$logTitle','$id','$_COOKIE[username]')";
if($num)
{
	mysqli_query($con,$dsql);
	mysqli_query($con,$logsql);
	echo "
	<script>
        alert('成功删除入库编号为:$_POST[delsiid]的入库信息');
        window.close();
	</script>
	";
}
else
{
	echo "
	<script>
  		alert('删除失败，请确认数据的正确性！');
  		window.close();
	</script>
	";
}

//close conncet
mysqli_close($con);
?>