<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id=$_POST['delzbid'];
mysqli_select_db($con, "armsdata");

$qsql="select * from armsinfo where zbid = '$id'";
$dsql="delete from armsinfo where zbid = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
	mysqli_query($con,$dsql);
	echo "
	<script>
        alert('成功删除装备编号为:$_POST[delzbid]的装备');
        window.history.back(-1);
	</script>
	";
}
else
{
	echo "
	<script>
  		alert('删除失败，请确认数据的正确性！');
  		window.history.back(-1);
	</script>
	";
}

//close conncet
mysqli_close($con);

?>