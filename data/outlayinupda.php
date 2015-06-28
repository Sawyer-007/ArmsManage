<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['id'];
$source = $_POST['source'];
$itemid = $_POST['itemid'];
$insum = $_POST['insum'];
$ryname = $_POST['ryname'];
$indate = $_POST['indate'];
$memo = $_POST['memo'];

mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

$sql = "update outlayin set source = '$source', itemid = '$itemid' , insum = '$insum' , ryname = '$ryname' , indate = '$indate' ,  memo = '$memo' where id = '$id'";

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