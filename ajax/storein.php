    <script>
        $(document).ready(function()
        {
            $("#storeinshow").click(function()
            {
            $("#tablediv").load("data/storeinsel.php");
            })
        })
    </script>

    <h3 class="headstyle" id="headshow">入库信息管理</h3>
    <div class="container-fluid inmid" id="btndiv">
        <div class="col-md-3">
            <button type="button" class="btn btn-success btnstyle" data-toggle="modal" data-target="#addZbInfo">添加信息</button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-warning btnstyle" data-toggle="modal" data-target="#updZbInfo">修改信息</button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-danger btnstyle" data-toggle="modal" data-target="#delZbInfo">删除信息</button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-info btnstyle" id="storeinshow">查看信息</button>
        </div>
    </div>

    <div class="tblstyle" id="tablediv">
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addZbInfo" role="dialog">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">添加人员信息</h4>
                </div>
                <form method="post" action="data/storeinins.php" class="form-horizontal" target="_blank">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputzbid" class="col-sm-4 control-label">装备编号</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputzbid" name="zbid" class="form-control" placeholder="Example:0001" required autofocus >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputmakedata" class="col-sm-4 control-label">生产日期</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputmakedata" name="makedate" class="form-control" placeholder="Example:20150101" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputzbprice" class="col-sm-4 control-label">装备单价</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputzbprice" name="zbprice" class="form-control" placeholder="Example:1000000000" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputzbnum" class="col-sm-4 control-label">装备数量</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputzbnum" name="zbnum" class="form-control" placeholder="Example:1" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSid" class="col-sm-4 control-label">仓库编号</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputSid" name="sid" class="form-control" placeholder="Example:00001" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputryname1" class="col-sm-4 control-label">验收人</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputryname1" name="ryname1" class="form-control" placeholder="Example:张三" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputmemo" class="col-sm-4 control-label">备注</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputmemo" name="memo" class="form-control" placeholder="Example:＝。＝" required>
                            </div>
                        </div>   
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Add in">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delZbInfo" role="dialog" target="_blank">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">删除入库信息</h4>
                </div>
                <form method="post" action="data/storeindel.php" target="_blank">
                    <div class="modal-body">
                        <label>入库编号</label>
                        <input type="text" id="inputDelsiid" name="delsiid" class="form-control" placeholder="入库编号" required autofocus >
                    </div> 
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Delete">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updZbInfo" role="dialog" target="_blank">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">修改入库信息</h4>
                </div>
                <form method="post" action="data/storeinupd.php" target="_blank">
                    <div class="modal-body">
                        <label>入库编号</label>
                        <input type="text" id="inputUpsiid" name="upsiid" class="form-control" placeholder="要修改的入库编号" required autofocus >
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Update">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>