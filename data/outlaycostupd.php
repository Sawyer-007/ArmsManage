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
$qsql="select * from outlaycost where id = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
  $row = mysqli_fetch_row($qresult);
  $cdate = $row[1];
  $itemid = $row[2];
  $csum = $row[3];
  $ryname = $row[4];
  $ryname1 = $row[5];
  $cdescribe = $row[6];
  $memo = $row[7];
	echo "<!DOCTYPE html>
<html>
<head lang='en'>
<meta charset='UTF-8'>
<title>修改经费使用信息</title>
<link rel='stylesheet' href='../css/bootstrap.min.css'>
<link rel='stylesheet' href='../css/update.css'>
</head>
<body>
  <div class='container-fluid'>
    <form class='form-update well' method='post' action='../data/outlaycostupda.php'>
      <p class='head'>编号:&nbsp;&nbsp;<input type='text' name = 'id' value = '$id' readonly ></p>
      <label>使用日期</label>
      <input type='text' id='inputcdate' name='cdate' class='form-control' value = '$cdate' required autofocus >
      <label>经费明细编号</label>
      <input type='text' id='inputitemid' name='itemid' class='form-control' value = '$itemid' required >
      <label>金额</label>
      <input type='text' id='inputcsum' name='csum' class='form-control' value = '$csum' required >
      <label>经办人</label>
      <input type='text' id='inputryname' name='ryname' class='form-control' value = '$ryname' required >
      <label>批准人</label>
      <input type='text' id='inputryname1' name='ryname1' class='form-control' value = '$ryname1' required >
      <label>费用摘要</label>
      <input type='text' id='inputcdescribe' name='cdescribe' class='form-control' value = '$cdescribe' required >
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