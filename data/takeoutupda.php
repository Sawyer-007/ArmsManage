<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['toid'];
$ttype = $_POST['ttype'];
$zbid = $_POST['zbid'];
$zbprice = $_POST['zbprice'];
$zbnum = $_POST['zbnum'];
$sid = $_POST['sid'];
$ryname1 = $_POST['ryname1'];
$ryname = $_POST['ryname'];
$optdate = $_POST['optdate'];
$memo = $_POST['memo'];

mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

$sql = "update takeout se ttype = '$ttype', zbid = '$zbid' ,  zbprice = '$zbprice' , zbnum = '$zbnum' , sid = '$sid' , ryname1 = '$ryname1' , ryname = '$ryname' , optdate = '$optdate' , memo = '$memo' where toid = '$id'";

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