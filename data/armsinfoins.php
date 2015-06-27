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
$id = $_POST['zbid'];
$sql="insert into armsinfo values('$id','$_POST[zbname]','$_POST[zbspec]','$_POST[zbkind]','$_POST[zbunit]')";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
else{
	$logTitle="armsinfo";
	$logDate=date("Y-m-d", time());
	$logTime=date("H:i:s", time());
	$logsql="insert into syslog values(null,'$logDate','$logTime',1,'$logTitle','$id','$_COOKIE[username]')";
	mysqli_query($con,$logsql);
	echo "
		<script>
				alert('添加成功!');
				window.close();
	</script>
	";
}
//close conncet
mysqli_close($con);
?>