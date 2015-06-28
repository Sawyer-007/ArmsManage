<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something

mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql = "select * from datalend";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
echo "<table class='table table-striped'>";
echo "<thead>
  <tr>
    <th>借阅号</th>
    <th>资料编号</th>
    <th>借阅日期</th>
    <th>借阅人编号</th>
    <th>借阅数量</th>
    <th>批准人</th>
    <th>标记</th>
 </tr>
</thead>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['datano'] . "</td>";
  echo "<td>" . $row['lenddate'] . "</td>";
  echo "<td>" . $row['ryid'] . "</td>";
  echo "<td>" . $row['lendcount '] . "</td>";
  echo "<td>" . $row['ryname'] . "</td>";
  echo "<td>" . $row['flag'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

//close conncet
mysqli_close($con);
?>