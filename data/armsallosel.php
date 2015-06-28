<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something

mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql = "select * from armsallo";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
echo "<table class='table table-striped'>";
echo "<thead>
  <tr>
    <th>调拨单号</th>
    <th>装备编号</th>
    <th>数量</th>
    <th>装备单价</th>
    <th>调出单位</th>
    <th>调入单位</th>
    <th>提货人</th>
    <th>有效期（月）</th>
    <th>批准人</th>
    <th>承办人</th>
    <th>日期</th>
    <th>备注</th>
  </tr>
</thead>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['zbid'] . "</td>";
  echo "<td>" . $row['anum'] . "</td>";
  echo "<td>" . $row['zbprice'] . "</td>";
  echo "<td>" . $row['outdep'] . "</td>";
  echo "<td>" . $row['indep'] . "</td>";
  echo "<td>" . $row['atype'] . "</td>";
  echo "<td>" . $row['person'] . "</td>";
  echo "<td>" . $row['usefuldate'] . "</td>";
  echo "<td>" . $row['ryname1'] . "</td>";
  echo "<td>" . $row['ryname'] . "</td>";
  echo "<td>" . $row['adste'] . "</td>";
  echo "<td>" . $row['memo'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

//close conncet
mysqli_close($con);
?>