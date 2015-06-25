<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['depid'];
$name = $_POST['depname'];
$desc = $_POST['desc'];
$upperid = $_POST['upperid'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

$sql = "update departments set depname = '$name', describes = '$desc', upperid = '$upperid' where depid = '$id'";
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