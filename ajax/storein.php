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
        <button type="button" class="btn btn-success btnstyle" data-toggle="modal" data-target="#addZbInfo">添加入库信息</button>
        <button type="button" class="btn btn-warning btnstyle" data-toggle="modal" data-target="#updZbInfo">修改入库信息</button>
        <button type="button" class="btn btn-danger btnstyle" data-toggle="modal" data-target="#delZbInfo">删除入库信息</button>
        <button type="button" class="btn btn-info btnstyle" id="storeinshow">查看入库信息</button>
    </div>

    <div class="tblstyle" id="tablediv">
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addZbInfo" role="dialog">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">添加入库信息</h4>
                </div>
                <form method="post" action="data/storehouseins.php">
                    <div class="modal-body">
                        <label>入库编号</label>
                        <input type="text" id="inputSiid" name="siid" class="form-control" placeholder="Example:00001" required autofocus >
                        <label>入库类型</label>
                        <input type="text" id="inputsitype" name="sitype" class="form-control" placeholder="Example:。。。" required autofocus >
                        <label>入库装备编号</label>
                        <input type="text" id="inputzbid" name="zbid" class="form-control" placeholder="Example:0001" required>
                        <label>生产日期</label>
                        <input type="text" id="inputmakedata" name="makedate" class="form-control" placeholder="Example:20150101" required>
                        <label>入库装备单价</label>
                        <input type="text" id="inputzbprice" name="zbprice" class="form-control" placeholder="Example:1000000000" required autofocus >
                        <label>入库装备数量</label>
                        <input type="text" id="inputzbnum" name="zbnum" class="form-control" placeholder="Example:1" required autofocus >
                        <label>仓库编号</label>
                        <input type="text" id="inputSid" name="sid" class="form-control" placeholder="Example:00001" required autofocus >

                        <label>验收人</label>
                        <input type="text" id="inputryname1" name="ryname1" class="form-control" placeholder="Example:张三" required autofocus >
                        <label>经办人</label>
                        <input type="text" id="inputryname" name="ryname" class="form-control" placeholder="Example:张三" required autofocus >
                        <label>入库时间</label>
                        <input type="text" id="inputoptdate" name="optdate" class="form-control" placeholder="Example:20150101" required autofocus >
                        <label>备注</label>
                        <input type="text" id="inputmemo" name="memo" class="form-control" placeholder="Example:＝。＝" required autofocus >

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
                    <h4 class="modal-title">删除入库信息</h4>
                </div>
                <form method="post" action="data/storehousedel.php" target="_blank">
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

    <div class="modal fade" id="updZbInfo" role="dialog">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">修改入库信息</h4>
                </div>
                <form method="post" action="data/storehouseupd.php" target="_blank">
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