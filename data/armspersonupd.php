<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['upryid'];
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
<title>修改装备信息</title>
<link rel='stylesheet' href='../css/bootstrap.min.css'>
<link rel='stylesheet' href='../css/update.css'>
</head>
<body>
  <div class='container-fluid'>
    <form class='form-update well form-horizontal' method='post' action='../data/armspresonupda.php'>
      <div class='form-group'>
        <label for='inputRyid' class='col-sm-4 control-label'>人员编号</label>
        <div class='col-sm-8'>
          <input type='text' id='inputRyid' name='ryid' class='form-control' value='$row[0]' readonly >
        </div>
      </div>
      <div class='form-group'>
          <label for='inputRyname' class='col-sm-4 control-label'>姓名</label>
          <div class='col-sm-8'>
              <input type='text' id='inputRyname' name='ryname' class='form-control' value='$row[1]' required >
          </div>
      </div>"; 
?>
<?php if($row[3] == 'male')
{
?>
      <div class='form-group'>
          <label class='col-sm-4 control-label'>性别</label>
          <div class='col-sm-8'>
              <label class='radio-inline'>
                  <input type='radio' name='sex' id='inputRysexm' value='male' checked="checked"> 男
              </label>
              <label class='radio-inline'>
                  <input type='radio' name='sex' id='inputRysexf' value='female'> 女
              </label>
          </div>
      </div>
<?php
}
else
{
?>
      <div class='form-group'>
          <label class='col-sm-4 control-label'>性别</label>
          <div class='col-sm-8'>
              <label class='radio-inline'>
                  <input type='radio' name='sex' id='inputRysexm' value='male'> 男
              </label>
              <label class='radio-inline'>
                  <input type='radio' name='sex' id='inputRysexf' value='female' checked="checked"> 女
              </label>
          </div>
      </div>
<?php
} 
    echo "
      <div class='form-group'>
          <label for='inputNationaloty' class='col-sm-4 control-label'>民族</label>
          <div class='col-sm-8'>
              <input type='text' id='inputNationaloty' name='nationaloty' class='form-control' value='$row[4]' required >
          </div>
      </div>
      <div class='form-group'>
          <label for='inputBitrh' class='col-sm-4 control-label'>生日</label>
          <div class='col-sm-8'>
              <input type='text' id='inputBitrh' name='bitrh' class='form-control' value='$row[5]' required >
           </div>
      </div>
      <div class='form-group'>
          <label for='inputTitle' class='col-sm-4 control-label'>职务</label>
          <div class='col-sm-8'>
              <input type='text' id='inputTitle' name='title' class='form-control' value='$row[6]' required >
          </div>
      </div>
      <div class='form-group'>
          <label for='inputRank' class='col-sm-4 control-label'>军衔</label>
          <div class='col-sm-8'>
              <input type='text' id='inputRank' name='rank' class='form-control' value='$row[7]' required >
          </div>
      </div>
      <div class='form-group'>
          <label for='inputPolitical' class='col-sm-4 control-label'>政治面貌</label>
          <div class='col-sm-8'>
              <input type='text' id='inputPolitical' name='political' class='form-control' value='$row[8]' required >
          </div>
      </div>   
      <div class='form-group'>
          <label for='inputCulture' class='col-sm-4 control-label'>文化程度</label>
          <div class='col-sm-8'>
              <input type='text' id='inputCulture' name='culture' class='form-control' value='$row[9]' required >
          </div>
      </div>   
      <div class='form-group'>
          <label for='inputMarital' class='col-sm-4 control-label'>婚姻状况</label>
              <div class='col-sm-8'>
                  <input type='text' id='inputMarital' name='marital' class='form-control' value='$row[10]' required >
              </div>
      </div>
      <div class='form-group'>
          <label for='inputFamily' class='col-sm-4 control-label'>籍贯</label>
          <div class='col-sm-8'>
              <input type='text' id='inputFamily' name='family' class='form-control' value='$row[11]' required >
          </div>
      </div>                    
      <div class='form-group'>
          <label for='inputIdcard' class='col-sm-4 control-label'>身份证号</label>
          <div class='col-sm-8'>
              <input type='text' id='inputIdcard' name='idcard' class='form-control' value='$row[12]' required >
          </div>
      </div>
      <div class='form-group'>
          <label for='inputDepid' class='col-sm-4 control-label'>部门编号</label>
          <div class='col-sm-8'>
                <input type='text' id='inputDepid' name='depid' class='form-control' value='$row[13]' required >
          </div>
      </div>
      <div class='form-group'>
          <label for='inputIdcard' class='col-sm-4 control-label'>工作岗位</label>
          <div class='col-sm-8'>
                <input type='text' id='inputPosition' name='position' class='form-control' value='$row[14]' required >
          </div>
      </div>
      <div class='form-group'>
          <label for='inputUpperid' class='col-sm-4 control-label'>领导编号</label>
          <div class='col-sm-8'>
              <input type='text' id='inputUpperid' name='upperid' class='form-control' value='$row[15]' required >
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