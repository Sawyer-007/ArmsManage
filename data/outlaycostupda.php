<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['id'];
$cdate = $_POST['cdate'];
$itemid = $_POST['itemid'];
$csum = $_POST['csum'];
$ryname = $_POST['ryname'];
$ryname1 = $_POST['ryname1'];
$cdescribe = $_POST['cdescribe'];
$memo = $_POST['memo'];

mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

$sql = "update outlaycost set cdate = '$cdate', itemid = '$itemid' , csum = '$csum' , ryname = '$ryname' , ryname1 = '$ryname1' , cdescribe = '$cdescribe' ,  memo = '$memo' where id = '$id'";

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