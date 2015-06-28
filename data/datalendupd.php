<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['id'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");
$qsql="select * from datalend where id = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
  $row = mysqli_fetch_row($qresult);
  $datano= $row[1];
  $lenddate = $row[2];
  $ryid = $row[3];
  $lendcount = $row[4];
  $ryname= $row[5];
  $flag = $row[6];
  echo "<!DOCTYPE html>
<html>
<head lang='en'>
<meta charset='UTF-8'>
<title>修改装备资料借阅信息</title>
<link rel='stylesheet' href='../css/bootstrap.min.css'>
<link rel='stylesheet' href='../css/update.css'>
</head>
<body>
  <div class='container-fluid'>
    <form class='form-update well' method='post' action='../data/datalendupda.php'>
      <p class='head'>借阅号:&nbsp;&nbsp;<input type='text' name = 'id ' value = '$id' readonly ></p>
      <label>资料编号</label>
      <input type='text' id='inputdatano' name='datano' class='form-control' value = '$datano' required autofocus >
      <label>借阅日期</label>
      <input type='text' id='inputlenddate' name='lenddate' class='form-control' value = '$lenddate' required >
      <label>借阅人编号</label>
      <input type='text' id='inputryid' name='ryid' class='form-control' value = '$ryid' required >
      <label>借阅数量</label>
      <input type='text' id='inputlendcount' name='lendcount' class='form-control' value = '$lendcount' required >
      <label>批准人</label>
      <input type='text' id='inputryname' name='ryname' class='form-control' value = '$ryname' required >
      <label>标记</label>
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