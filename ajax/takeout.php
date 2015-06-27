    <script>
        $(document).ready(function()
        {
            $("#takeoutshow").click(function()
            {
            $("#tablediv").load("data/takeoutsel.php");
            })
        })
    </script>

    <h3 class="headstyle" id="headshow">出库信息管理</h3>
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
            <button type="button" class="btn btn-info btnstyle" id="takeoutshow">查看信息</button>
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
                    <h4 class="modal-title">添加出库信息</h4>
                </div>
                <form method="post" action="data/takeoutins.php" target="_blank">
                    <div class="modal-body">
                        <label>装备编号</label>
                        <input type="text" id="inputzbid" name="zbid" class="form-control" placeholder="Example:0001" required autofocus>
                        <label>装备单价</label>
                        <input type="text" id="inputzbprice" name="zbprice" class="form-control" placeholder="Example:1000000000" required  >
                        <label>装备数量</label>
                        <input type="text" id="inputzbnum" name="zbnum" class="form-control" placeholder="Example:1" required  >
                        <label>仓库编号</label>
                        <input type="text" id="inputSid" name="sid" class="form-control" placeholder="Example:00001" required  >
                        <label>批准人</label>
                        <input type="text" id="inputryname1" name="ryname1" class="form-control" placeholder="Example:张三" required >
                        <label>备注</label>
                        <input type="text" id="inputmemo" name="memo" class="form-control" placeholder="Example:＝。＝" required  >

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
                    <h4 class="modal-title">删除出库信息</h4>
                </div>
                <form method="post" action="data/takeoutdel.php" target="_blank">
                    <div class="modal-body">
                        <label>出库编号</label>
                        <input type="text" id="inputDeltid" name="deltid" class="form-control" placeholder="出库编号" required autofocus >
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
                    <h4 class="modal-title">修改出库信息</h4>
                </div>
                <form method="post" action="data/takeoutupd.php" target="_blank">
                    <div class="modal-body">
                        <label>出库编号</label>
                        <input type="text" id="inputUptid" name="uptid" class="form-control" placeholder="要修改的出库编号" required autofocus >   
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Update">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>