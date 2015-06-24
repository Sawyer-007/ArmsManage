<?php
$con = mysqli_connect("localhost","root","letmein");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
//do something

mysqli_select_db($con, "armsdata");
mysqli_set_charset($con, "utf8");

$sql = "select * from armsinfo";
$result = mysqli_query($con,$sql);

if (!$result) {
 printf("Error: %s\n", mysqli_error($con));
 exit();
}
echo "<table class='table table-striped'>";
echo "<thead>
  <tr>
    <th>装备编号</th>
    <th>装备名称</th>
    <th>规格编号</th>
    <th>装备类别</th>
    <th>计量单位</th>
  </tr>
</thead>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Zbid'] . "</td>";
  echo "<td>" . $row['Zbname'] . "</td>";
  echo "<td>" . $row['Zbspec'] . "</td>";
  echo "<td>" . $row['Zbkind'] . "</td>";
  echo "<td>" . $row['Zbunit'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

//close conncet
mysqli_close($con);
?>