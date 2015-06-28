<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql="insert into datalend values('$_POST[id]','$_POST[datano]','$_POST[lenddate]','$_POST[ryid]','$_POST[lendcount]','$_POST[ryname]','$_POST[flag]')";

$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}

echo "
    <script>
        alert('添加成功!');
        window.close();
	</script>
	";
//close conncet
mysqli_close($con);
?>