<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['upid'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");
$qsql="select * from outlayin where id = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
  $row = mysqli_fetch_row($qresult);
  $source = $row[1];
  $itemid = $row[2];
  $insum = $row[3];
  $ryname = $row[4];
  $indate = $row[5];
  $memo = $row[6];
	echo "<!DOCTYPE html>
<html>
<head lang='en'>
<meta charset='UTF-8'>
<title>修改入帐信息</title>
<link rel='stylesheet' href='../css/bootstrap.min.css'>
<link rel='stylesheet' href='../css/update.css'>
</head>
<body>
  <div class='container-fluid'>
    <form class='form-update well' method='post' action='../data/outlayinupda.php'>
      <p class='head'>入帐编号:&nbsp;&nbsp;<input type='text' name = 'id' value = '$id' readonly ></p>
      <label>经费来源</label>
      <input type='text' id='inputsource' name='source' class='form-control' value = '$source' required autofocus >
      <label>经费项目编号</label>
      <input type='text' id='inputitemid' name='itemid' class='form-control' value = '$itemid' required >
      <label>金额</label>
      <input type='text' id='inputinsum' name='insum' class='form-control' value = '$insum' required >
      <label>经办人</label>
      <input type='text' id='inputryname' name='ryname' class='form-control' value = '$ryname' required >
      <label>入账日期</label>
      <input type='text' id='inputindate' name='indate' class='form-control' value = '$indate' required >
      <label>备注</label>
      <input type='text' id='inputmemo' name='memo' class='form-control' value = '$memo' required >

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