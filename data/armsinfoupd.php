<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['upzbid'];
$name = $_POST['upzbname'];
$spec = $_POST['upzbspec'];
$kind = $_POST['upzbkind'];
$unit = $_POST['upzbunit'];
mysqli_select_db($con, "armsdata");
$qsql="select * from armsinfo where zbid = '$id'";
$dsql="update armsinfo set zbname = '$name', zb"
$qresult = mysqli_query($con,$qsql);
$num = mysqli_num_rows($qresult);
if($num)
{
	mysqli_query($con,$dsql);
	echo '
	<!DOCTYPE html>
    <html>
    <head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creating Modal Window with Bootstrap">
    <title>修改装备信息</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    </head>
    <body>
    <div class="container-fluid">
        <lable>要修改的装备编号为:'$id'</lable>
    </div>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
    </html>
	';
}
else
{
	echo "
	<script>
  		alert('修改失败，请确认数据的正确性！');
  		window.history.back(-1);
	</script>
	";
}
?>