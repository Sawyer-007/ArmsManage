<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something
mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql="insert into armsallo values('$_POST[id]','$_POST[zbid]','$_POST[anum]','$_POST[zbprice]','$_POST[outdep]' ,'$_POST[indep]' ,'$_POST[atype]' ,'$_POST[person]' ,'$_POST[usefuldate]' ,'$_POST[ryname1]' ,'$_POST[ryname]' ,'$_POST[adate]' ,'$_POST[memo]')";

$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}

echo "
    <script>
        alert('添加成功!');
        window.close();
	</script>
	";
//close conncet
mysqli_close($con);
?>