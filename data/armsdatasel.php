<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something

mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql = "select * from armsdata";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
echo "<table class='table table-striped'>";
echo "<thead>
  <tr>
    <th>资料编号</th>
    <th>资料名称</th>
    <th>资料分类编号</th>
    <th>数量</th>
    <th>价格</th>
    <th>备注</th>
    <th>创建日期</th>
 </tr>
</thead>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['datano'] . "</td>";
  echo "<td>" . $row['dataname'] . "</td>";
  echo "<td>" . $row['typeid'] . "</td>";
  echo "<td>" . $row['icount'] . "</td>";
  echo "<td>" . $row['iprice '] . "</td>";
  echo "<td>" . $row['memo'] . "</td>";
  echo "<td>" . $row['greatedate'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

//close conncet
mysqli_close($con);
?>