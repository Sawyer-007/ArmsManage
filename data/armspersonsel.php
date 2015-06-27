<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something

mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql = "select * from armsperson";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
echo "<table class='table table-striped'>";
echo "<thead>
  <tr>
    <th>人员编号</th>
    <th>人员姓名</th>
    <th>人员性别</th>
    <th>人员职务</th>
    <th>所在部门</th>
    <th>工作岗位</th>
  </tr>
</thead>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[3] . "</td>";
  echo "<td>" . $row[6] . "</td>";
  echo "<td>" . $row[13] . "</td>";
  echo "<td>" . $row[14] . "</td>";
  echo "</tr>";
  }
echo "</table>";

//close conncet
mysqli_close($con);
?>