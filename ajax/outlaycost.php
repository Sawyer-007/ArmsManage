    <script>
        $(document).ready(function()
        {
            $("#outlaycostshow").click(function()
            {
            $("#tablediv").load("data/outlaycostsel.php");
            });
        });      
    </script>

    <h3 class="headstyle" id="headshow">经费支付管理</h3>
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
            <button type="button" class="btn btn-info btnstyle" id="outlaycostshow">查看信息</button>
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
                    <h4 class="modal-title">添加经费使用信息</h4>
                </div>
                <form method="post" action="data/outlaycostins.php" target="_blank">
                    <div class="modal-body">
                        <label>编号</label>
                        <input type="text" id="inputid" name="id" class="form-control" placeholder="编号" required autofocus >
                        <label>使用日期</label>
                        <input type="text" id="inputcdate" name="cdate" class="form-control" placeholder="使用日期" required >
                        <label>经费明细编号</label>
                        <input type="text" id="inputitemid" name="itemid" class="form-control" placeholder="经费明细编号" required >
                        <label>金额</label>
                        <input type="text" id="inputcsum" name="csum" class="form-control" placeholder="金额" required >
                        <label>经办人</label>
                        <input type="text" id="inputryname" name="ryname" class="form-control" placeholder="经办人" required >
                        <label>批准人</label>
                        <input type="text" id="inputryname1" name="ryname1" class="form-control" placeholder="批准人" required >
                        <label>费用摘要</label>
                        <input type="text" id="inputcdescribe" name="cdescribed" class="form-control" placeholder="费用摘要" required >
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
                    <h4 class="modal-title">删除经费使用信息</h4>
                </div>
                <form method="post" action="data/outlaycostdel.php" target="_blank">
                    <div class="modal-body">
                        <label>编号</label>
                        <input type="text" id="inputDelid" name="delid" class="form-control" placeholder="编号" required autofocus >
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
                    <h4 class="modal-title">修改经费使用信息</h4>
                </div>
                <form method="post" action="data/outlayinupd.php" target="_blank">
                    <div class="modal-body">
                        <label>编号</label>
                        <input type="text" id="inputUpid" name="upid" class="form-control" placeholder="要修改的编号" required autofocus >
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Update">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>