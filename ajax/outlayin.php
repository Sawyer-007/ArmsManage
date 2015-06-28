    <script>
        $(document).ready(function()
        {
            $("#outlayinshow").click(function()
            {
            $("#tablediv").load("data/outlayinsel.php");
            });
        });      
    </script>

    <h3 class="headstyle" id="headshow">经费入账管理</h3>
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
            <button type="button" class="btn btn-info btnstyle" id="outlayinshow">查看信息</button>
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
                    <h4 class="modal-title">添加经费入账信息</h4>
                </div>
                <form method="post" action="data/outlayinins.php" target="_blank">
                    <div class="modal-body">
                        <label>入账编号</label>
                        <input type="text" id="inputid" name="id" class="form-control" placeholder="入账编号" required autofocus >
                        <label>经费来源</label>
                        <input type="text" id="inputsource" name="source" class="form-control" placeholder="经费来源" required >
                        <label>经费项目编号</label>
                        <input type="text" id="inputitemid" name="itemid" class="form-control" placeholder="经费项目编号" required >
                        <label>金额</label>
                        <input type="text" id="inputinsum" name="insum" class="form-control" placeholder="金额" required >
                        <label>经办人</label>
                        <input type="text" id="inputryname" name="ryname" class="form-control" placeholder="经办人" required >
                        <label>入账日期</label>
                        <input type="text" id="inputindate" name="indate" class="form-control" placeholder="入账日期" required >
                        <label>备注</label>
                        <input type="text" id="inputmemo" name="memo" class="form-control" placeholder="备注＝。＝" required >
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
                    <h4 class="modal-title">删除经费入账信息</h4>
                </div>
                <form method="post" action="data/outlayindel.php" target="_blank">
                    <div class="modal-body">
                        <label>入账编号</label>
                        <input type="text" id="inputDelid" name="delid" class="form-control" placeholder="入账编号" required autofocus >
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
                    <h4 class="modal-title">修改经费入账信息</h4>
                </div>
                <form method="post" action="data/outlayinupd.php" target="_blank">
                    <div class="modal-body">
                        <label>入账编号</label>
                        <input type="text" id="inputUpid" name="upid" class="form-control" placeholder="要修改的入账编号" required autofocus >
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Update">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>