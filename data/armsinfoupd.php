<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['upzbid'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");
$qsql="select * from armsinfo where zbid = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
	$row = mysqli_fetch_row($qresult);
	$name = $row[1];
	$spec = $row[2];
	$kind = $row[3];
	$unit = $row[4];
	echo "<!DOCTYPE html>
<html>
<head lang='en'>
<meta charset='UTF-8'>
<title>修改装备信息</title>
<link rel='stylesheet' href='../css/bootstrap.min.css'>
<link rel='stylesheet' href='../css/update.css'>
</head>
<body>
  <div class='container-fluid'>
    <form class='form-update well' method='post' action='../data/armsinfoupda.php'>
      <p class='head'>装备编号:&nbsp;&nbsp;<input type='text' name = 'zbid' value = '$id' readonly ></p>
      <label>装备名称</label>
      <input type='text' id='inputZbname' name='zbname' class='form-control' value = '$name' required autofocus >
      <label>规格编号</label>
      <input type='text' id='inputZbspec' name='zbspec' class='form-control' value = '$spec' required >
      <label>装备类别</label>
      <input type='text' id='inputZbkind' name='zbkind' class='form-control' value = '$kind' required >
      <label>计量单位</label>
      <input type='text' id='inputZbunit' name='zbunit' class='form-control' value = '$unit' required >
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