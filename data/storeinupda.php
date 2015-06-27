<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['siid'];
$sitype = $_POST['sitype'];
$zbid = $_POST['zbid'];
$makedate = $_POST['makedate'];
$zbprice = $_POST['zbprice'];
$zbnum = $_POST['zbnum'];
$sid = $_POST['sid'];
$ryname1 = $_POST['ryname1'];
$ryname = $_POST['ryname'];
$optdate = $_POST['optdate'];
$memo = $_POST['memo'];

mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

$sql = "update storein set sitype = '$sitype', zbid = '$zbid' , makedate = '$makedate' , zbprice = '$zbprice' , zbnum = '$zbnum' , sid = '$sid' , ryname1 = '$ryname1' , ryname = '$ryname' , optdate = '$optdate' , memo = '$memo' where siid = '$id'";

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