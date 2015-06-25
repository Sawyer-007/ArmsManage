<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['zbid'];
$name = $_POST['zbname'];
$spec = $_POST['zbspec'];
$kind = $_POST['zbkind'];
$unit = $_POST['zbunit'];
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

$sql = "update armsinfo set zbname = '$name', zbspec = '$spec', zbkind = '$kind', zbunit = '$unit' where zbid = '$id'";
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