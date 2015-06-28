<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['spid'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");
$qsql="select * from armssurplus where spid = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
	$row = mysqli_fetch_row($qresult);
	echo "<!DOCTYPE html>
<html>
<head lang='en'>
<meta charset='UTF-8'>
<title>修改库存信息</title>
<link rel='stylesheet' href='../css/bootstrap.min.css'>
<link rel='stylesheet' href='../css/update.css'>
</head>
<body>
  <div class='container-fluid'>
    <form class='form-update well form-horizontal' method='post' action='../data/armssurplusupda.php'>
      <div class='form-group'>
        <label for='inputSpid' class='col-sm-4 control-label'>库存编号</label>
        <div class='col-sm-8'>
          <input type='text' id='inputSpid' name='spid' class='form-control' value='$row[0]' readonly >
        </div>
      </div>
      <div class='form-group'>
          <label for='inputZbid' class='col-sm-4 control-label'>装备编号</label>
          <div class='col-sm-8'>
              <input type='text' id='inputZbid' name='zbid' class='form-control' value='$row[1]' disabled >
          </div>
      </div>
      <div class='form-group'>
          <label for='inputPrice' class='col-sm-4 control-label'>装备单价</label>
          <div class='col-sm-8'>
              <input type='text' id='inputPrice' name='price' class='form-control' value='$row[2]' required >
          </div>
      </div>
      <div class='form-group'>
          <label for='inputNum' class='col-sm-4 control-label'>装备数量</label>
          <div class='col-sm-8'>
              <input type='text' id='inputNum' name='num' class='form-control' value='$row[3]' required >
           </div>
      </div>
      <div class='form-group'>
          <label for='inputMakedate' class='col-sm-4 control-label'>生产日期</label>
          <div class='col-sm-8'>
              <input type='text' id='inputMakedate' name='makedate' class='form-control' value='$row[4]' required >
          </div>
      </div>
      <div class='form-group'>
          <label for='inputSid' class='col-sm-4 control-label'>仓库编号</label>
          <div class='col-sm-8'>
              <input type='text' id='inputSid' name='sid' class='form-control' value='$row[5]' disabled >
          </div>
      </div>
      <div class='form-group'>
          <label for='inputMemo' class='col-sm-4 control-label'>备注</label>
          <div class='col-sm-8'>
              <input type='text' id='inputMemo' name='memo' class='form-control' value='$row[6]' required >
          </div>
      </div>   
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