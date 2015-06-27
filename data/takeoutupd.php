<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['uptid'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");
$qsql="select * from takeout where toid = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
	$row = mysqli_fetch_row($qresult);
	$ttype = $row[1];
	$zbid = $row[2];
  $zbprice = $row[3];
  $zbnum = $row[4];
  $sid = $row[5];
  $ryname1 = $row[6];
  $ryname = $row[7];
  $optdate = $row[8];
  $memo = $row[9];
	echo "<!DOCTYPE html>
<html>
<head lang='en'>
<meta charset='UTF-8'>
<title>修改出库信息</title>
<link rel='stylesheet' href='../css/bootstrap.min.css'>
<link rel='stylesheet' href='../css/update.css'>
</head>
<body>
  <div class='container-fluid'>
    <form class='form-update well' method='post' action='../data/takeoutupda.php'>
      <p class='head'>出库编号:&nbsp;&nbsp;<input type='text' name = 'toid' value = '$id' readonly ></p>
      <label>出库装备编号</label>
      <input type='text' id='inputzbid' name='zbid' class='form-control' value = '$zbid' required >
      <label>出库装备单价</label>
      <input type='text' id='inputzbprice' name='zbprice' class='form-control' value = '$zbprice' required >
      <label>出库装备数量</label>
      <input type='text' id='inputzbnum' name='zbnum' class='form-control' value = '$zbnum' required >
      <label>仓库编号</label>
      <input type='text' id='inputsid' name='sid' class='form-control' value = '$sid' required >
      <label>批准人</label>
      <input type='text' id='inputryname1' name='ryname1' class='form-control' value = '$ryname1' required >
      <label>经办人</label>
      <input type='text' id='inputryname' name='ryname' class='form-control' value = '$ryname' required >
      <label>出库时间</label>
      <input type='text' id='inputoptdate' name='optdate' class='form-control' value = '$optdate' required >    
      <label>备注</label>
      <input type='text' id='inputmemo' name='memo' class='form-control' value = '$memo' >

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