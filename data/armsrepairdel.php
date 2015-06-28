<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id=$_POST['delrepid'];
mysqli_select_db($con, "armsdata");

$qsql="select * from armsrepair where repid = '$id'";
$dsql="delete from armsrepair where repid = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
	$row=mysqli_fetch_row($qresult);
	if($row[5] == 'Send')
	{
		mysqli_query($con,$dsql);
		date_default_timezone_set("Asia/Chongqing");
		$logTitle="armsrepair";
		$logDate=date("Y-m-d", time());
		$logTime=date("H:i:s", time());
		$logsql="insert into syslog values(null,'$logDate','$logTime',2,'$logTitle','$id','$_COOKIE[username]')";
		mysqli_query($con,$logsql);
		echo "
		<script>
	        alert('成功删除维修记录编号为:$_POST[delrepid]的维修记录信息');
	        window.close();
		</script>
		";
	}
	else
	{
		echo "
		<script>
	        alert('无法删除完成维修的记录!');
	        window.close();
		</script>
		";
	}
}
else
{
	echo "
	<script>
  		alert('不存在的维修记录！');
  		window.close();
	</script>
	";
}

//close conncet
mysqli_close($con);
?>