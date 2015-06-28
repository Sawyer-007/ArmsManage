<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something

mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql = "select * from armsrepair";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
echo "<table class='table table-striped'>";
echo "<thead>
  <tr>
    <th>维修记录编号</th>
    <th>装备编号</th>
    <th>维修日期</th>
    <th>维修单位</th>
    <th>故障原因</th>
    <th>维修状态</th>
    <th>维修费用</th>
    <th>维修结果</th>
    <th>维修负责人</th>
    <th>维修验收人</th>
    <th>提交时间</th>
  </tr>
</thead>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2] . "</td>";
  echo "<td>" . $row[3] . "</td>";
  echo "<td>" . $row[4] . "</td>";
  echo "<td>" . $row[5] . "</td>";
  echo "<td>" . $row[6] . "</td>";
  echo "<td>" . $row[7] . "</td>";
  echo "<td>" . $row[8] . "</td>";
  echo "<td>" . $row[9] . "</td>";
  echo "<td>" . $row[10] . "</td>";
  echo "</tr>";
  }
echo "</table>";

//close conncet
mysqli_close($con);
?>