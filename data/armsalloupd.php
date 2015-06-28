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
$qsql="select * from armsallo where id = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
	$row = mysqli_fetch_row($qresult);
	$zbid = $row[1];
	$anum = $row[2];
  $zbprice = $row[3];
  $outdep = $row[4];
  $indep = $row[5];
  $atype = $row[6];
  $person = $row[7];
  $usefuldate = $row[8];
  $ryname1 = $row[9];
  $ryname = $row[10];
  $adate = $row[11];
  $memo = $row[12];

	echo "<!DOCTYPE html>
<html>
<head lang='en'>
<meta charset='UTF-8'>
<title>修改调拨信息</title>
<link rel='stylesheet' href='../css/bootstrap.min.css'>
<link rel='stylesheet' href='../css/update.css'>
</head>
<body>
  <div class='container-fluid'>
    <form class='form-update well' method='post' action='../data/armsalloupda.php'>
      <p class='head'>调拨单号:&nbsp;&nbsp;<input type='text' name = 'id' value = '$id' readonly ></p>
      <label>装备编号</label>
      <input type='text' id='inputzbid' name='zbid' class='form-control' value = '$zbid' required autofocus >

      <label>数量</label>
      <input type='text' id='inputanum' name='anum' class='form-control' value = '$anum' required >
      <label>出库装备单价</label>
      <input type='text' id='inputzbprice' name='zbprice' class='form-control' value = '$zbprice' required >
      <label>调出单位</label>
      <input type='text' id='inputoutdep' name='outdep' class='form-control' value = '$outdep' required >
      <label>调入单位</label>
      <input type='text' id='inputindep' name='indep' class='form-control' value = '$indep' required >

      <label>调拨类型</label>
      <input type='text' id='inputatype' name='atype' class='form-control' value = '$atype' required >
      <label>提货人</label>
      <input type='text' id='inputperson' name='person' class='form-control' value = '$person' required >
      <label>有效期</label>
      <input type='text' id='inputusefuldate' name='usefuldate' class='form-control' value = '$usefuldate' required >
      <label>批准人</label>
      <input type='text' id='inputryname1' name='ryname1' class='form-control' value = '$ryname1' required >
      <label>承办人</label>
      <input type='text' id='inputryname' name='ryname' class='form-control' value = '$ryname' required >
      <label>日期</label>
      <input type='text' id='inputadate' name='adate' class='form-control' value = '$adate' required >
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