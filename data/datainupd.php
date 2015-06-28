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
$qsql="select * from datain where id = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
  $row = mysqli_fetch_row($qresult);
  $indate = $row[1];
  $datano = $row[2];
  $incount = $row[3];
  $usersname = $row[4];
  $ryname = $row[5];
  $detail = $row[6];
  $flag = $row[7];
	echo "<!DOCTYPE html>
<html>
<head lang='en'>
<meta charset='UTF-8'>
<title>修改归档信息</title>
<link rel='stylesheet' href='../css/bootstrap.min.css'>
<link rel='stylesheet' href='../css/update.css'>
</head>
<body>
  <div class='container-fluid'>
    <form class='form-update well' method='post' action='../data/datainupda.php'>
      <p class='head'>归档号:&nbsp;&nbsp;<input type='text' name = 'id' value = '$id' readonly ></p>
      <label>归档日期</label>
      <input type='text' id='inputindate' name='indate' class='form-control' value = '$indate' required autofocus >
      <label>资料编号</label>
      <input type='text' id='inputdatano' name='datano' class='form-control' value = '$datano' required >
      <label>归档数量</label>
      <input type='text' id='inputincount' name='incount' class='form-control' value = '$incount' required >
      <label>经办人</label>
      <input type='text' id='inputusersname' name='usersname' class='form-control' value = '$usersname' required >
      <label>审批人</label>
      <input type='text' id='inputryname' name='ryname' class='form-control' value = '$ryname' required >
      <label>说明</label>
      <input type='text' id='inputdetail' name='detail' class='form-control' value = '$detail' required >
      <label>审核标记</label>
      <input type='text' id='inputflag' name='flag' class='form-control' value = '$flag' required >

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