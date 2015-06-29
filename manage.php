<?php
if(!isset($_COOKIE['username'])){
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creating Modal Window with Bootstrap">
    <title>管理界面</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/manage.css">
</head>
<body>
    <?php include 'header.php';?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 sidebar">
                <ul class="nav nav-sidebar nav-pills nav-stacked">
                    <li class="active"><a href="manage.php">管理</a></li>

                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        基本信息管理 <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropstyle" role="menu">
                            <li><a href="#" id="aarmsinfo">装备基本信息</a></li>
                            <li><a href="#" id="adepartments">部门基本信息</a></li>
                            <li><a href="#" id="aarmsperson">人员基本信息</a></li>
                        </ul>
                    </li>
                    <?php
                    if(strcmp($_COOKIE['usertype'], 'superadmin') == 0)
                    {
                    ?>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        装备库存管理 <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropstyle" role="menu">
                            <li><a href="#" id="astorehouse">仓库信息管理</a></li>
                            <li><a href="#" id="astorein">入库信息管理</a></li>
                            <li><a href="#" id="atakeout">出库信息管理</a></li>
                            <li><a href="#" id="aarmssurplus">装备库存盘点</a></li>
                        </ul>
                    </li>
                    <?php
                    }
                    else
                    { 
                    ?>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        装备库存管理 <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropstyle" role="menu">
                            <li><a href="#" id="astorehouse">仓库信息管理</a></li>
                            <li><a href="#" id="astorein">入库信息管理</a></li>
                            <li><a href="#" id="atakeout">出库信息管理</a></li>
                        </ul>
                    </li>
                    <?php
                    }
                    ?>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        装备资料管理 <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropstyle" role="menu">
                            <li><a href="#" id="">资料类型管理</a></li>
                            <li><a href="#" id="aarmsdata">资料信息管理</a></li>
                            <li><a href="#" id="adatalend">资料借阅管理</a></li>
                            <li><a href="#" id="adatain">资料归档管理</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        装备经费管理 <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropstyle" role="menu">
                            <li><a href="#">经费明细管理</a></li>
                            <li><a href="#" id="aoutlayin">经费入账管理</a></li>
                            <li><a href="#" id="aoutlaycost">经费使用管理</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav nav-sidebar">
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        调拨与维修 <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropstyle" role="menu">
                            <li><a href="#" id="aarmsrepair">装备维修管理</a></li>
                            <li><a href="#" id="aarmsallo">装备调拨管理</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                        统计与查询 <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropstyle" role="menu">
                            <li><a href="#" data-toggle="modal" data-target="#viewStore">出库入库统计</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#viewPerson">部门人员查询</a></li>
                            <li><a href="#">库存流水统计</a></li>    
                            <li><a href="#">经费汇总查询</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="modal fade" id="viewStore" role="dialog">
                <div class="modal-dialog modalstyle">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">出库入库统计</h4>
                        </div>
                        <form method="post" action="ajax/storeinfo.php" target="_blank">
                            <div class="modal-body">
                                <label>装备名称</label>
                                <input type="text" id="inputZbname" name="zbname" class="form-control" placeholder="支持模糊查询" required autofocus >
                            </div> 
                            <div class="modal-footer">
                                <input class="btn btn-lg btn-block btn-primary" type="submit" value="View" id="loadtable">
                                    <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="viewPerson" role="dialog">
                <div class="modal-dialog modalstyle">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">部门人员查询</h4>
                        </div>
                        <form method="post" action="ajax/personinfo.php" target="_blank">
                            <div class="modal-body">
                                <label>部门名称</label>
                                <input type="text" id="inputDepname" name="depname" class="form-control" placeholder="支持模糊查询" required autofocus >
                            </div> 
                            <div class="modal-footer">
                                <input class="btn btn-lg btn-block btn-primary" type="submit" value="View" id="loadtable">
                                    <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-10 main pull-right" id="maindiv">
                <div class="managebg" id="mbg"></div>
                <div class="col-md-6">
                    <h1 class="bghead">数据无价，谨慎操作</h1>
                    <?php
                    if(strcmp($_COOKIE['usertype'], 'superadmin') == 0)
                    {
                        $type = '管理员';
                    }
                    else
                    {
                        $type = '操作员';
                    }
                    echo "<p class = 'bgp'>欢迎&nbsp;&nbsp;&nbsp;". $type . "&nbsp;&nbsp;&nbsp;" . $_COOKIE['username'] . "</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/load.js" type="text/javascript"></script>
</body>
</html>