    <script>
        $(document).ready(function()
        {
            $("#armsrepairshow").click(function()
            {
            $("#tablediv").load("data/armsrepairsel.php");
            })
        })
    </script>

    <h3 class="headstyle" id="headshow">装备维修管理</h3>
    <div class="container-fluid inmid" id="btndiv">
        <div class="btn-group col-md-3">
            <button type="button" class="btn btn-success dropdown-toggle btnstyle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            送修/完修 <span class="caret"></span>
            </button>        
            <ul class="dropdown-menu btndrop">
                <li><a href="#" data-toggle="modal" data-target="#addZbWillInfo">装备送修</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#" data-toggle="modal" data-target="#addZbOkInfo">维修完成</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-warning btnstyle" data-toggle="modal" data-target="#updZbInfo">修改送修信息</button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-danger btnstyle" data-toggle="modal" data-target="#delZbInfo">删除送修信息</button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-info btnstyle" id="armsrepairshow">查看维修状态</button>
        </div>
    </div>

    <div class="tblstyle" id="tablediv">
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addZbWillInfo" role="dialog">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">装备送修</h4>
                </div>
                <form method="post" action="data/armsrepairins.php" target="_blank">
                    <div class="modal-body">
                        <label>装备编号</label>
                        <input type="text" id="inputzbid" name="zbid" class="form-control" placeholder="Example:00001" required autofocus >
                        <label>维修日期</label>
                        <input type="text" id="inputrepairdate" name="repairdate" class="form-control" placeholder="Example:20150101" required>
                        <label>维修单位</label>
                        <input type="text" id="inputunit" name="unit" class="form-control" placeholder="Example:炮兵连" required  >
                        <label>故障原因</label>
                        <input type="text" id="inputreason" name="reason" class="form-control" placeholder="Example:进水" required  >
                        <label>维修负责人</label>
                        <input type="text" id="inputryname" name="ryname" class="form-control" placeholder="Example:张三" required  >
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Add in">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addZbOkInfo" role="dialog">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">维修完成</h4>
                </div>
                <form method="post" action="data/armsrepairedins.php" target="_blank">
                    <div class="modal-body">
                        <label>维修编号</label>
                        <input type="text" id="inputrepid" name="repid" class="form-control" placeholder="Example:00001" required autofocus >
                        <label>维修费用</label>
                        <input type="text" id="inputcost" name="cost" class="form-control" placeholder="Example:10000" required  >
                        <label>维修结果</label>
                        <input type="text" id="inputresult" name="result" class="form-control" placeholder="Example:良好" required  >
                        <label>验收人</label>
                        <input type="text" id="inputryname1" name="ryname1" class="form-control" placeholder="Example:张三" required  >
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Add in">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delZbInfo" role="dialog">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">删除送修信息</h4>
                </div>
                <form method="post" action="data/armsrepairdel.php" target="_blank">
                    <div class="modal-body">
                        <label>维修记录编号</label>
                        <input type="text" id="inputDelrepid" name="delrepid" class="form-control" placeholder="维修记录编号" required autofocus >
                    </div> 
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Delete">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updZbInfo" role="dialog">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">修改维修记录信息</h4>
                </div>
                <form method="post" action="data/armsrepairupd.php" target="_blank">
                    <div class="modal-body">
                        <label>维修记录编号</label>
                        <input type="text" id="inputUprepid" name="uprepid" class="form-control" placeholder="要修改的装备维修记录编号" required autofocus >
                        
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Update">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>