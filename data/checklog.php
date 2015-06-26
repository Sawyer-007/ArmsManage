<?php date_default_timezone_set("Asia/Chongqing"); ?>
<h3 class="headstyle" id="headshow">系统操作日志</h3>
<p class="ptime">当前时间为:<?php echo date("Y-m-d H:i:s", time()); ?></p>
<div class="tblstyle" id="tablediv">
<?php
	$con = mysqli_connect("localhost","root","letmein");
	if (!$con)
	{
	  	die('Could not connect: ' . mysql_error());
	}
	//do something

	mysqli_select_db($con, "armsdata");
	mysqli_set_charset($con, "utf8");

	$sql = "select * from syslog";
	$result = mysqli_query($con,$sql);

	if (!$result) {
	 printf("Error: %s\n", mysqli_error($con));
	 exit();
	}

	echo "<table class='table table-striped'>";
	echo "<thead>
	  <tr>
	    <th>日志编号</th>
	    <th>事件日期</th>
	    <th>事件时间</th>
	    <th>事件类型</th>
	    <th>事件标题</th>
	    <th>事件内容</th>
	    <th>操作用户</th>
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
	  echo "</tr>";
	  }
	echo "</table>";

	//close conncet
	mysqli_close($con);
?>
</div>