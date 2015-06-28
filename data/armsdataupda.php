<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['datano'];
$dataname = $_POST['dataname'];
$typeid = $_POST['typeid'];
$icount = $_POST['icount'];
$iprice = $_POST['iprice'];
$memo = $_POST['memo'];
$greatedate = $_POST['greatedate'];

mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

$sql = "update armsdata set  dataname = '$dataname' , typeid = '$typeid' , icount = '$icount' , iprice = '$iprice' ,memo= '$memo' , greatedate = '$greatedate' where datano = '$id' ";

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