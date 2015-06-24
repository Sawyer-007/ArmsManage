<?php
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
	header("location: ../manage.php");
}
else
{
	echo "fail";
}
//close conncet
mysqli_close($con);
?>