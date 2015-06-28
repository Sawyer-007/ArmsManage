<?php date_default_timezone_set("Asia/Chongqing"); ?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creating Modal Window with Bootstrap">
    <title>出入库统计</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/manage.css">
</head>
<body>
<div class="col-lg-12 main" id="maindiv">
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

		$name=$_POST['zbname'];
		$armssql = "select zbid,zbname from armsinfo where zbname='$name' ";
		$armsresult = mysqli_query($con,$armssql);
		if (!$armsresult) {
		 printf("Error: %s\n", mysqli_error($con));
		 exit();
		}

		echo "<table class='table table-hover '>";
		echo "<thead>
		  <tr>
		    <th>装备编号</th>
		    <th>装备名称</th>
		    <th>事件类型</th>
		    <th>事件数量</th>
		    <th>仓库编号</th>
		    <th>事件时间</th>
		  </tr>
		</thead>";

		while($row = mysqli_fetch_array($armsresult))
		{
		  $plussql = "select zbnum,sid from armssurplus where zbid = '$row[0]'";
		  $plusresult = mysqli_query($con,$plussql);
		  while($prow = mysqli_fetch_array($plusresult))
		  {
		  	echo "<tr>";
		  	echo "<td>" . $row[0] . "</td>";
		  	echo "<td>" . $row[1] . "</td>";
		  	echo "<td>库存</td>"; //库存
		  	echo "<td>" . $prow[0] . "</td>";
		  	echo "<td>" . $prow[1] . "</td>";
		  	echo "<td>  </td>"; //时间
		  	echo "</tr>";
		  	$insql="select zbnum,optdate from storein where zbid = '$row[0]' and sid = '$prow[1]'";
		  	$outsql="select zbnum,optdate from storein where zbid = '$row[0]' and sid = '$prow[1]'";
		  	$inresult = mysqli_query($con,$insql);
		  	$outresult = mysqli_query($con,$outsql);
		  	while($irow = mysqli_fetch_array($inresult))
		  	{
		  		echo "<tr>";
		  		echo "<td>" . $row[0] . "</td>";
		  		echo "<td>" . $row[1] . "</td>";
		  		echo "<td>入库</td>"; //出库
		  		echo "<td>" . $irow[0] . "</td>";
		  		echo "<td>" . $prow[1] . "</td>";
		  		echo "<td>" . $irow[1] . "</td>";
		  		echo "<tr>";
		  	}
		  	while($orow = mysqli_fetch_array($outresult))
		  	{
		  		echo "<tr>";
		  		echo "<td>" . $row[0] . "</td>";
			  	echo "<td>" . $row[1] . "</td>";
			  	echo "<td>出库</td>"; //库存
			  	echo "<td>" . $orow[0] . "</td>";
			  	echo "<td>" . $prow[1] . "</td>";
			  	echo "<td>" . $orow[1] . "</td>";
			  	echo "</tr>";
		  	}
		  }
		}
		echo "</table>";

		//close conncet
		mysqli_close($con);
	?>
	</div>
</div>	
</body>