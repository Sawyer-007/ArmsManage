<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id=$_POST['resuser'];
mysqli_select_db($con, "armsdata");

$qsql="select * from armsusers where usersname = '$id'";
$dsql="update armsusers set userspwd='$id' where usersname = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
	mysqli_query($con,$dsql);
	echo "
	<script>
        alert('已为$_POST[resuser]用户重置密码');
        window.close();
	</script>
	";
}
else
{
	echo "
	<script>
  		alert('重置失败，请确认数据的正确性！');
  		window.close();
	</script>
	";
}

//close conncet
mysqli_close($con);

?>