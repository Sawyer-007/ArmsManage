<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id=$_COOKIE['username'];
mysqli_select_db($con, "armsdata");

$qsql="select * from armsusers where usersname = '$id' and userspwd = '$_POST[oldpwd]'";
$dsql="update armsusers set userspwd='$_POST[newpwd]' where usersname = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
	mysqli_query($con,$dsql);
	echo "
	<script>
        alert('已为用户$_COOKIE[username]重置密码');
        window.close();
	</script>
	";
}
else
{
	echo "
	<script>
  		alert('修改失败,原密码输入错误');
  		window.close();
	</script>
	";
}

//close conncet
mysqli_close($con);

?>