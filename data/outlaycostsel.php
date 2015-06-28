<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something

mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql = "select * from outlaycost";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
echo "<table class='table table-striped'>";
echo "<thead>
  <tr>
    <th>编号</th>
    <th>使用日期</th>
    <th>经费明细编号</th>
    <th>金额</th>
    <th>经办人</th>
    <th>批准人</th>
    <th>费用摘要</th>
    <th>备注</th>
  </tr>
</thead>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['cdate'] . "</td>";
  echo "<td>" . $row['itemid'] . "</td>";
  echo "<td>" . $row['csum'] . "</td>";
  echo "<td>" . $row['ryname'] . "</td>";
  echo "<td>" . $row['ryname1'] . "</td>";
  echo "<td>" . $row['cdescribe'] . "</td>";
  echo "<td>" . $row['memo'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

//close conncet
mysqli_close($con);
?>