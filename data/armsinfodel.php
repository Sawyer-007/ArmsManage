<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id=$_POST['delzbid'];
mysqli_select_db($con, "armsdata");

$qsql="select * from armsinfo where zbid = '$id'";
$dsql="delete from armsinfo where zbid = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
//log
date_default_timezone_set("Asia/Chongqing");
$logTitle="armsinfo";
$logDate=date("Y-m-d", time());
$logTime=date("H:i:s", time());
$logsql="insert into syslog values(null,'$logDate','$logTime',2,'$logTitle','$id','$_COOKIE[username]')";
if($num)
{
	mysqli_query($con,$dsql);
	mysqli_query($con,$logsql);
	echo "
	<script>
        alert('成功删除装备编号为:$_POST[delzbid]的装备');
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