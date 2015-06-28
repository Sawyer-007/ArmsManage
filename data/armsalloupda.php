<?php 
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
$id = $_POST['id'];
$zbid = $_POST['zbid'];
$anum = $_POST['anum'];
$zbprice = $_POST['zbprice'];
$outdep = $_POST['outdep'];
$indep = $_POST['indep'];
$atype = $_POST['atype'];
$person = $_POST['person'];
$usefuldate = $_POST['usefuldate'];
$ryname1 = $_POST['ryname1'];
$ryname = $_POST['ryname'];
$adate = $_POST['adate'];
$memo = $_POST['memo'];

mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "armsdata");

$sql = "update armsallo se zbid = '$zbid', anum = '$anum' ,  zbprice = '$zbprice' , outdep = '$outdep' , indep = '$indep' , atype = '$atype', person = '$person', usefuldate = '$usefuldate' , ryname1 = '$ryname1' , ryname = '$ryname' , atdate = '$atdate' , memo = '$memo' where id = '$id'";

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