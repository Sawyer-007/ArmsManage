<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something

mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql = "select * from takeout";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
echo "<table class='table table-striped'>";
echo "<thead>
  <tr>
    <th>出库编号</th>
    <th>出库类型</th>
    <th>出库装备编号</th>
    <th>出库装备单价</th>
    <th>出库装备数量</th>
    <th>批准人</th>
    <th>经办人</th>
    <th>出库时间</th>
    <th>备注</th>
  </tr>
</thead>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['toid'] . "</td>";
  echo "<td>" . $row['ttype'] . "</td>";
  echo "<td>" . $row['zbid'] . "</td>";
  echo "<td>" . $row['zbprice'] . "</td>";
  echo "<td>" . $row['zbnum'] . "</td>";
  echo "<td>" . $row['Sid'] . "</td>";
  echo "<td>" . $row['ryname1'] . "</td>";
  echo "<td>" . $row['ryname'] . "</td>";
  echo "<td>" . $row['optdate'] . "</td>";
  echo "<td>" . $row['Memo'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

//close conncet
mysqli_close($con);
?>