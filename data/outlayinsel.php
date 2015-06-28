<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something

mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql = "select * from outlayin";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
echo "<table class='table table-striped'>";
echo "<thead>
  <tr>
    <th>入帐编号</th>
    <th>经费来源</th>
    <th>经费项目编号</th>
    <th>金额</th>
    <th>经办人</th>
    <th>入帐日期</th>
    <th>备注</th>
  </tr>
</thead>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['source'] . "</td>";
  echo "<td>" . $row['itemid'] . "</td>";
  echo "<td>" . $row['insum'] . "</td>";
  echo "<td>" . $row['ryname'] . "</td>";
  echo "<td>" . $row['indate'] . "</td>";
  echo "<td>" . $row['memo'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

//close conncet
mysqli_close($con);
?>