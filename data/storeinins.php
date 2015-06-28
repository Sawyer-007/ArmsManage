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
$sql="insert into storein values(null,null,'$_POST[zbid]','$_POST[makedate]','$_POST[zbprice]','$_POST[zbnum]','$_POST[sid]','$_POST[ryname1]','$_COOKIE[username]','$logDate','$_POST[memo]')";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
else
{
	$id=mysqli_insert_id($con);
	$logTitle="storein";
	$logTime=date("H:i:s", time());
	$logsql="insert into syslog values(null,'$logDate','$logTime',1,'$logTitle','$id','$_COOKIE[username]')";
	mysqli_query($con,$logsql);
	//$qsql="select * from armssurplus where zbid='$_POST[zbid]' and makedate='$_POST[makedate]' and sid='$_POST[sid]'";
	$qsql="select * from armssurplus where zbid='$_POST[zbid]' and sid='$_POST[sid]'";
	$qresult = mysqli_query($con,$qsql);
    $num = mysqli_num_rows($qresult);
    if($num)
    {
    	$row = mysqli_fetch_row($qresult);
    	$usql="update armssurplus set zbnum=zbnum+'$_POST[zbnum]',makedate='$_POST[makedate]' where spid = '$row[0]'";   	
    	$r=mysqli_query($con,$usql);
    	if (!$r) {
 			printf("Error: %s\n", mysqli_error($con));
 			exit();
		}
		$logTitle="armssurplus";
		$logsql="insert into syslog values(null,'$logDate','$logTime',3,'$logTitle','$row[0]','$_COOKIE[username]')";
		mysqli_query($con,$logsql);
    }
    else
    {
    	$addsql="insert into armssurplus values(null,'$_POST[zbid]','$_POST[zbprice]','$_POST[zbnum]','$_POST[makedate]','$_POST[sid]','$_POST[memo]')";
    	$r=mysqli_query($con,$addsql);
    	if (!$r) {
 			printf("Error: %s\n", mysqli_error($con));
 			exit();
		}
    	$id=mysqli_insert_id($con);
		$logTitle="armssurplus";
		$logsql="insert into syslog values(null,'$logDate','$logTime',1,'$logTitle','$id','$_COOKIE[username]')";
		mysqli_query($con,$logsql);
    }
    $all = $_POST['zbnum']*$_POST['zbprice'];
	echo "
    <script>
        alert('装备入库成功,入库装备总价:$all');
        window.close();
	</script>
	";
}
//close conncet
mysqli_close($con);
?>