<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['ryid'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");
$qsql="select * from armsperson where ryid = '$id'";
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
    $row = mysqli_fetch_row($qresult);
    echo "<!DOCTYPE html>
<html>
<head lang='en'>
<meta charset='UTF-8'>
<title>人员详细信息</title>
<link rel='stylesheet' href='../css/bootstrap.min.css'>
<link rel='stylesheet' href='../css/update.css'>
</head>
<body>
  <div class='container-fluid'>
    <div class='col-md-offset-2 col-md-8'>
      <div class='col-sm-6'>
        <div class='col-sm-5'>
          <ul class='list-group'>
            <li class='list-group-item'>人员编号</li>
            <li class='list-group-item'>姓名</li>
            <li class='list-group-item'>性别</li>
            <li class='list-group-item'>民族</li>
            <li class='list-group-item'>生日</li>
            <li class='list-group-item'>职务</li>
            <li class='list-group-item'>军衔</li>
            <li class='list-group-item'>政治面貌</li>
          </ul>
        </div>
        <div class='col-sm-7' style='margin-left:-31px'>
          <ul class='list-group'>
            <li class='list-group-item'>$row[0]</li>
            <li class='list-group-item'>$row[1]</li>
            <li class='list-group-item'>$row[3]</li>
            <li class='list-group-item'>$row[4]</li>
            <li class='list-group-item'>$row[5]</li>
            <li class='list-group-item'>$row[6]</li>
            <li class='list-group-item'>$row[7]</li>
            <li class='list-group-item'>$row[8]</li>
          </ul>
        </div>  
      </div>
      <div class='col-sm-6' style='margin-left:-70px'>
        <div class='col-sm-5'>
          <ul class='list-group'>
            <li class='list-group-item'>文化程度</li>
            <li class='list-group-item'>婚姻状况</li>
            <li class='list-group-item'>籍贯</li>
            <li class='list-group-item'>身份证号</li>
            <li class='list-group-item'>所在部门编号</li>
            <li class='list-group-item'>工作岗位</li>
            <li class='list-group-item'>部门领导</li>
          </ul>
        </div>
        <div class='col-sm-7' style='margin-left:-31px'>
          <ul class='list-group'>
            <li class='list-group-item'>$row[9]</li>
            <li class='list-group-item'>$row[10]</li>
            <li class='list-group-item'>$row[11]</li>
            <li class='list-group-item'>$row[12]</li>
            <li class='list-group-item'>$row[13]</li>
            <li class='list-group-item'>$row[14]</li>
            <li class='list-group-item'>$row[15]</li>
          </ul>
        </div>
      </div>
    </div>
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