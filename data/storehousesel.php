<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something

mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql = "select * from storehouse";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
echo "<table class='table table-striped'>";
echo "<thead>
  <tr>
    <th>仓库编号</th>
    <th>仓库名称</th>
    <th>仓库说明</th>
  </tr>
</thead>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Sid'] . "</td>";
  echo "<td>" . $row['Sname'] . "</td>";
  echo "<td>" . $row['Memo'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

//close conncet
mysqli_close($con);
?>