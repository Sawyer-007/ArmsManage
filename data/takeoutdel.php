<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id=$_POST['deltoid'];
mysqli_select_db($con, "armsdata");

$qsql="select * from takeout where toid = '$id'";
$dsql="delete from takeout where toid = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
	mysqli_query($con,$dsql);
	echo "
	<script>
        alert('成功删除出库编号为:$_POST[deltoid]的出库信息');
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