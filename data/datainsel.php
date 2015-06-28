<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something

mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql = "select * from datain";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
echo "<table class='table table-striped'>";
echo "<thead>
  <tr>
    <th>归档号</th>
    <th>归档日期</th>
    <th>资料编号</th>
    <th>归档数量</th>
    <th>经办人</th>
    <th>审批人</th>
    <th>说明</th>
    <th>审核标记</th>
  </tr>
</thead>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['indate'] . "</td>";
  echo "<td>" . $row['datano'] . "</td>";
  echo "<td>" . $row['incount'] . "</td>";
  echo "<td>" . $row['usersname'] . "</td>";
  echo "<td>" . $row['ryname'] . "</td>";
  echo "<td>" . $row['detail'] . "</td>";
  echo "<td>" . $row['flag'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

//close conncet
mysqli_close($con);
?>