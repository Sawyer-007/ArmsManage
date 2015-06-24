<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql="insert into armsinfo values('$_POST[zbid]','$_POST[zbname]','$_POST[zbspec]','$_POST[zbkind]','$_POST[zbunit]')";

$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}

echo "1 record added";
//close conncet
mysqli_close($con);
?>