<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['updatano'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");
$qsql="select * from armsdata where datano = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
  $row = mysqli_fetch_row($qresult);
  $dataname = $row[1];
  $typeid = $row[2];
  $icount = $row[3];
  $iprice = $row[4];
  $memo = $row[5];
  $greatedate = $row[6];
  echo "<!DOCTYPE html>
<html>
<head lang='en'>
<meta charset='UTF-8'>
<title>修改装备资料信息</title>
<link rel='stylesheet' href='../css/bootstrap.min.css'>
<link rel='stylesheet' href='../css/update.css'>
</head>
<body>
  <div class='container-fluid'>
    <form class='form-update well' method='post' action='../data/armsdataupda.php'>
      <p class='head'>资料编号:&nbsp;&nbsp;<input type='text' name = 'datano' value = '$id' readonly ></p>
      <label>资料名称</label>
      <input type='text' id='inputdataname' name='dataname' class='form-control' value = '$dataname' required autofocus >
      <label>资料分类编号</label>
      <input type='text' id='inputtypeid' name='typeid' class='form-control' value = '$typeid' required >
      <label>数量</label>
      <input type='text' id='inputicount' name='icount' class='form-control' value = '$icount' required >
      <label>价格</label>
      <input type='text' id='inputiprice' name='iprice' class='form-control' value = '$iprice' required >
      <label>备注</label>
      <input type='text' id='inputmemo' name='memo' class='form-control' value = '$memo' required >
      <label>创建日期</label>
      <input type='text' id='inputgreatedate' name='greatedate' class='form-control' value = '$greatedate' required >

      

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