    <script>
        $(document).ready(function()
        {
            $("#datainshow").click(function()
            {
            $("#tablediv").load("data/datainsel.php");
            });
        });      
    </script>

    <h3 class="headstyle" id="headshow">装备资料归档信息</h3>
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
            <button type="button" class="btn btn-info btnstyle" id="datainshow">查看信息</button>
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
                    <h4 class="modal-title">添加归档信息</h4>
                </div>
                <form method="post" action="data/datainins.php" target="_blank">
                    <div class="modal-body">
                        <label>归档号</label>
                        <input type="text" id="inputid" name="id" class="form-control" placeholder="归档号" required autofocus >
                        <label>归档日期</label>
                        <input type="text" id="inputindate" name="indate" class="form-control" placeholder="归档日期" required >
                        <label>资料编号</label>
                        <input type="text" id="inputdatano" name="datano" class="form-control" placeholder="资料编号" required >
                        <label>归档数量</label>
                        <input type="text" id="inputincount" name="incount" class="form-control" placeholder="归档数量" required >
                        <label>经办人</label>
                        <input type="text" id="inputusersname" name="usersname" class="form-control" placeholder="经办人" required >
                        <label>审批人</label>
                        <input type="text" id="inputryname" name="ryname" class="form-control" placeholder="审批人" required >
                        <label>说明</label>
                        <input type="text" id="inputdetail" name="detail" class="form-control" placeholder="说明" required >
                        <label>审核标记</label>
                        <input type="text" id="inputflag" name="flag" class="form-control" placeholder="审核标记0/1" required >
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
                    <h4 class="modal-title">删除装备资料归档信息</h4>
                </div>
                <form method="post" action="data/dataindel.php" target="_blank">
                    <div class="modal-body">
                        <label>归档号</label>
                        <input type="text" id="inputDelid" name="delid" class="form-control" placeholder="归档号" required autofocus >
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
                    <h4 class="modal-title">修改装备资料归档信息</h4>
                </div>
                <form method="post" action="data/datainupd.php" target="_blank">
                    <div class="modal-body">
                        <label>归档号</label>
                        <input type="text" id="inputUpid" name="upid" class="form-control" placeholder="要修改的归档号" required autofocus >
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Update">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>