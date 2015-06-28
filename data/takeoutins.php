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

$qsql="select * from armssurplus where zbid='$_POST[zbid]' and sid='$_POST[sid]'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
	$row = mysqli_fetch_row($qresult);
    if($_POST['zbnum']>$row[3])
    {
    	echo "
    	<script>
        	alert('库存不足,请修改出库数量');
        	window.close();
		</script>
	";
    }
    else
    {
    	$logDate=date("Y-m-d", time());
		$sql="insert into takeout values(null,null,'$_POST[zbid]','$_POST[zbprice]','$_POST[zbnum]','$_POST[sid]','$_POST[ryname1]','$_COOKIE[username]','$logDate','$_POST[memo]')";
		$result = mysqli_query($con,$sql);

		if (!$result) {
		 printf("Error: %s\n", mysqli_error($con));
		 exit();
		}
		else
		{
			$id=mysqli_insert_id($con);
			$logTitle="takeout";
			$logTime=date("H:i:s", time());
			$logsql="insert into syslog values(null,'$logDate','$logTime',1,'$logTitle','$id','$_COOKIE[username]')";
			mysqli_query($con,$logsql);
			$usql="update armssurplus set zbnum=zbnum-'$_POST[zbnum]' where spid = '$row[0]'";
			$r=mysqli_query($con,$usql);
			if (!$r) {
				printf("Error: %s\n", mysqli_error($con));
			 	exit();
			}
			$logTitle="armssurplus";
			$logTime=date("H:i:s", time());
			$logsql="insert into syslog values(null,'$logDate','$logTime',3,'$logTitle','$row[0]','$_COOKIE[username]')";
			echo "
		    <script>
		        alert('出库完成!');
		        window.close();
			</script>
			";
		}
    }
}
else
{
	echo "
    <script>
        alert('装备编号/仓库编号输入有误!');
        window.close();
	</script>
	";
}
//close conncet
mysqli_close($con);
?>