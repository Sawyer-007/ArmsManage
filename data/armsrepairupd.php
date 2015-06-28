<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['uprepid'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");
$qsql="select * from armsrepair where repid = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
	$row = mysqli_fetch_row($qresult);
	$zbid = $row[1];
	$repairdate = $row[2];
  $unit = $row[3];
  $reason = $row[4];
  $status = $row[5];
  $cost = $row[6];
  $result = $row[7];
  $ryname = $row[8];
  $ryname1 = $row[9];
  $postdate = $row[10];
  if($status == 'Send')
  {
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
        <form class='form-update well form-horizontal' method='post' action='../data/armsrepairupda.php'>
          <div class='form-group'>
            <label for='inputrebid' class='col-sm-4 control-label'>维修编号</label>
            <div class='col-sm-8'>
              <input type='text' id='inputrebid' name='repid' class='form-control' value = '$id' readonly >
            </div>
          </div>
          <div class='form-group'>
              <label for='inputzbid' class='col-sm-4 control-label'>装备编号</label>
              <div class='col-sm-8'>
                  <input type='text' id='inputzbid' name='zbid' class='form-control' value = '$zbid' required autofocus >
              </div>
          </div>
          <div class='form-group'>
              <label for='inputrepairdate' class='col-sm-4 control-label'>维修日期</label>
              <div class='col-sm-8'>
                  <input type='text' id='inputrepairdate' name='repairdate' class='form-control' value = '$repairdate' required >
              </div>
          </div>
          <div class='form-group'>
              <label for='inputunit' class='col-sm-4 control-label'>维修单位</label>
              <div class='col-sm-8'>
                  <input type='text' id='inputunit' name='unit' class='form-control' value = '$unit' required >
               </div>
          </div>
          <div class='form-group'>
              <label for='inputreason' class='col-sm-4 control-label'>故障原因</label>
              <div class='col-sm-8'>
                  <input type='text' id='inputreason' name='reason' class='form-control' value = '$reason' required >
              </div>
          </div>
          <div class='form-group'>
              <label for='inputryname' class='col-sm-4 control-label'>负责人</label>
              <div class='col-sm-8'>
                  <input type='text' id='inputryname' name='ryname' class='form-control' value = '$ryname' required >
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
          alert('无法修改完成维修的记录!');
          window.close();
    </script>
    ";
  }
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