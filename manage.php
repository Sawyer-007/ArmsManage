<?php
if(!isset($_COOKIE['username'])){
    echo "<script>
    alert('请登录!');
    </script>";
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/manage.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- javascript -->
    <script>
    $(document).ready(function()
    {
        $("#aarmsinfo").click(function()
        {
         $("#maindiv").load("ajax/armsinfo.php");
        });
    });
    $(document).ready(function()
    {
        $("#aarmsperson").click(function()
        {
         $("#maindiv").load("ajax/armsperson.php");
        });
    });
    $(document).ready(function()
    {
        $("#astorehouse").click(function()
        {
         $("#maindiv").load("ajax/storehouse.php");
        });
    });
    </script>
</head>
<body>
    <?php include 'header.php';?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 sidebar">
                <ul class="nav nav-sidebar nav-pills nav-stacked">
                    <li class="active"><a href="#">管理</a></li>

                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        基本信息管理 <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropstyle" role="menu">
                            <li><a href="#" id="aarmsinfo">装备基本信息</a></li>
                            <li><a href="#">部门基本信息</a></li>
                            <li><a href="#" id="aarmsperson">人员基本信息</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        装备库存管理 <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropstyle" role="menu">
                            <li><a href="#" id="astorehouse">仓库信息管理</a></li>
                            <li><a href="#">入库信息管理</a></li>
                            <li><a href="#">出库信息管理</a></li>
                            <li><a href="#">装备库存管理</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        装备资料管理 <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropstyle" role="menu">
                            <li><a href="#">资料类型管理</a></li>
                            <li><a href="#">资料信息管理</a></li>
                            <li><a href="#">资料借阅管理</a></li>
                            <li><a href="#">资料归档管理</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        装备经费管理 <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropstyle" role="menu">
                            <li><a href="#">经费明细管理</a></li>
                            <li><a href="#">经费入账管理</a></li>
                            <li><a href="#">经费使用管理</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav nav-sidebar">
                    <li><a href="#">调拨维修</a></li>
                    <li><a href="#">统计查询</a></li>
                </ul>
            </div>
            <div class="col-lg-10 main pull-right" id="maindiv">
            </div>
        </div>
    </div>
</body>
</html>