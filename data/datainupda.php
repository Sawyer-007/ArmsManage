<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['id'];
$indate = $_POST['indate'];
$datano = $_POST['datano'];
$incount = $_POST['incount'];
$usersname = $_POST['usersname'];
$ryname = $_POST['ryname'];
$detail = $_POST['detail'];
$flag = $_POST['flag'];

mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

$sql = "update datain set indate = '$indate', datano = '$datano' , incount = '$incount' , usersname = '$usersname' , ryname = '$ryname' , detail = '$detail' ,  flag = '$flag' where id = '$id'";

$result = mysqli_query($con,$sql);
if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
echo "
    <script>
        alert('修改成功!');
        window.close();
	</script>
	";
//close conncet
mysqli_close($con);
 ?>