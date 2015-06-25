<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['depid'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");
$qsql="select * from departments where depid = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
	$row = mysqli_fetch_row($qresult);
	$name = $row[1];
	$desc = $row[2];
	$upperid = $row[3];
	echo "<!DOCTYPE html>
<html>
<head lang='en'>
<meta charset='UTF-8'>
<title>修改部门信息</title>
<link rel='stylesheet' href='../css/bootstrap.min.css'>
<link rel='stylesheet' href='../css/update.css'>
</head>
<body>
  <div class='container-fluid'>
    <form class='form-update well' method='post' action='../data/departmentsupda.php'>
      <p class='head'>部门编号:&nbsp;&nbsp;<input type='text' name = 'depid' value = '$id' readonly ></p>
      <label>部门名称</label>
      <input type='text' id='inputDepname' name='depname' class='form-control' value = '$name' required autofocus >
      <label>部门说明</label>
      <input type='text' id='inputZbspec' name='desc' class='form-control' value = '$desc' required >
      <label>上级部门</label>
      <input type='text' id='inputZbkind' name='upperid' class='form-control' value = '$upperid' required >
      <input class='btn btn-lg btn-block btn-primary sub' type='submit' value='Submit !'>
    </form>
  </div>
  <script src='js/jquery.js' type='text/javascript'></script>
  <script src='js/bootstrap.min.js' type='text/javascript'></script>
</body>
</html>";
}
else
{
	echo "
	<script>
  		alert('修改失败，请确认数据的正确性！');
  		window.close();
	</script>
	";
}
//close conncet
mysqli_close($con);
?>