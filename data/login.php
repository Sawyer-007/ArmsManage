<?php
date_default_timezone_set('Asia/Chongqing');
if(isset($_POST['submit']))
{
	$con = mysqli_connect("localhost","root","letmein");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	//do something
	$user=$_POST["user"];
	$psd=$_POST["psd"];

	mysqli_select_db($con, "armsdata");

	$sql = "select * from armsusers where usersname = '$user' and userspwd = '$psd'";
	$result = mysqli_query($con,$sql);

	if (!$result) {
	 printf("Error: %s\n", mysqli_error($con));
	 exit();
	}

	$num = mysqli_num_rows($result);

	if($num)
	{
		$row = mysqli_fetch_row($result);
        setcookie('username',$row[0], time()+3600*24, '/');
        setcookie('usertype',$row[2], time()+3600*24, '/');
		header("location: ../manage.php");
	}
	else
	{
		echo "
		<script>
			alert('用户名/密码有误!');
			window.history.back(-1); 
		</script>
		";
		//header("location: ../index.php");
	}
	//close conncet
	mysqli_close($con);
}
else
{
	echo "
		<script>
		alert('请合法登录!');
		window.history.back(-1); 
		</script>
	";
	//header("location: ../index.php");
}
?>