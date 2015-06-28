<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id=$_POST['delid'];
mysqli_select_db($con, "armsdata");

$qsql="select * from armsallo where id = '$id'";
$dsql="delete from armsallo where id = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
	mysqli_query($con,$dsql);
	echo "
	<script>
        alert('成功删除调拨单号为:$_POST[delid]的调拨记录');
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