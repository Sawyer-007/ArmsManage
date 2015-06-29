<?php date_default_timezone_set("Asia/Chongqing"); ?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creating Modal Window with Bootstrap">
    <title>部门人员信息</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/manage.css">
</head>
<body>
<div class="col-lg-12 main" id="maindiv">
	<h3 class="headstyle" id="headshow"><?php echo $_POST['depname'];?>相关部门人员</h3>
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

		$name=$_POST['depname'];
		$sql = "select * from armsperson where dep_id in (select depid from departments where depname like '$name%')";
		$result = mysqli_query($con,$sql);
		if (!$result) {
		 printf("Error: %s\n", mysqli_error($con));
		 exit();
		}

		echo "<table class='table table-hover '>";
		echo "<thead>
		  <tr>
		    <th>人员编号</th>
		    <th>姓名</th>
		    <th>性别</th>
		    <th>民族</th>
		    <th>生日</th>
		    <th>职务</th>
		    <th>军衔</th>
		    <th>籍贯</th>
		    <th>工作岗位</th>
		    <th>部门编号</th>
		    <th>部门领导</th>
		  </tr>
		</thead>";

		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
		  	echo "<td>" . $row[0] . "</td>";
		  	echo "<td>" . $row[1] . "</td>";
		  	echo "<td>" . $row[3] . "</td>";
		  	echo "<td>" . $row[4] . "</td>";
		  	echo "<td>" . $row[5] . "</td>";
		  	echo "<td>" . $row[6] . "</td>";
		  	echo "<td>" . $row[7] . "</td>";
		  	echo "<td>" . $row[11] . "</td>";
		  	echo "<td>" . $row[13] . "</td>";
		  	echo "<td>" . $row[14] . "</td>";
		  	echo "<td>" . $row[15] . "</td>";
		  	echo "</tr>";
		}
		echo "</table>";

		//close conncet
		mysqli_close($con);
	?>
	</div>
</div>	
</body>