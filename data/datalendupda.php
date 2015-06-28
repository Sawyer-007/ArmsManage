<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['id'];
$datano = $_POST['datano'];
$lenddate = $_POST['lenddate'];
$ryid = $_POST['ryid'];
$lendcount = $_POST['lendcount'];
$ryname = $_POST['ryname'];
$flag= $_POST['flag'];

mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

$sql = "update datalend set datano = '$datano' , lenddate = '$lenddate' ,ryid = '$ryid' , lendcount = '$lendcount' ,ryname= '$ryname' , flag = '$flag' where id = '$id'";

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