    <script>
        $(document).ready(function()
        {
            $("#armsalloshow").click(function()
            {
            $("#tablediv").load("data/armsallosel.php");
            })
        })
    </script>

    <h3 class="headstyle" id="headshow">装备调拨管理</h3>
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
            <button type="button" class="btn btn-info btnstyle" id="armsalloshow">查看信息</button>
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
                    <h4 class="modal-title">添加装备调拨信息</h4>
                </div>
                <form method="post" action="data/armsalloins.php">
                    <div class="modal-body">
                        <label>调拨单号</label>
                        <input type="text" id="inputid" name="id" class="form-control" placeholder="Example:00001" required autofocus >
                        <label>装备编号</label>
                        <input type="text" id="inputzbid" name="zbid" class="form-control" placeholder="Example:00001" required autofocus >
                        <label>数量</label>
                        <input type="text" id="inputanum" name="anum" class="form-control" placeholder="Example:1" required>
                        <label>装备单价</label>
                        <input type="text" id="inputzbprice" name="zbprice" class="form-control" placeholder="Example:1000000" required autofocus >
                        <label>调出单位</label>
                        <input type="text" id="inputoutdep" name="outdep" class="form-control" placeholder="Example:炮兵连" required autofocus >
                        <label>调入单位</label>
                        <input type="text" id="inputsindep" name="indep" class="form-control" placeholder="Example:海豹突击队" required autofocus >

                        <label>调拨类型</label>
                        <input type="text" id="inputatype" name="atype" class="form-control" placeholder="Example:调拨/价拨" required autofocus >
                        <label>提货人</label>
                        <input type="text" id="inputperson" name="person" class="form-control" placeholder="Example:李四" required autofocus >
                        <label>有效期（月）</label>
                        <input type="text" id="inputusefuldate" name="usefuldate" class="form-control" placeholder="Example:1" required autofocus >
                        <label>批准人</label>
                        <input type="text" id="inputryname1" name="ryname1" class="form-control" placeholder="Example:张三" required autofocus >
                        <label>承办人</label>
                        <input type="text" id="inputryname" name="ryname" class="form-control" placeholder="Example:王五" required autofocus >
                        <label>日期</label>
                        <input type="text" id="inputadate" name="adate" class="form-control" placeholder="Example:20150101" required autofocus >
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
                    <h4 class="modal-title">删除装备调拨信息</h4>
                </div>
                <form method="post" action="data/armsallodel.php" target="_blank">
                    <div class="modal-body">
                        <label>调拨单号</label>
                        <input type="text" id="inputDelid" name="delid" class="form-control" placeholder="调拨单号" required autofocus >
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
                    <h4 class="modal-title">修改调拨记录信息</h4>
                </div>
                <form method="post" action="data/armsalloupd.php" target="_blank">
                    <div class="modal-body">
                        <label>调拨单号</label>
                        <input type="text" id="inputUpid" name="upid" class="form-control" placeholder="要修改的装备调拨单号" required autofocus >
                        
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Update">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>