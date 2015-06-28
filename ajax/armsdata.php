    <script>
        $(document).ready(function()
        {
            $("#armsdatashow").click(function()
            {
            $("#tablediv").load("data/armsdatasel.php");
            });
        });      
    </script>

    <h3 class="headstyle" id="headshow">资料信息管理</h3>
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
            <button type="button" class="btn btn-info btnstyle" id="armsdatashow">查看信息</button>
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
                    <h4 class="modal-title">添加资料信息</h4>
                </div>
                <form method="post" action="data/armsdatains.php" target="_blank">
                    <div class="modal-body">
                        <label>资料编号</label>
                        <input type="text" id="inputdatano" name="datano" class="form-control" placeholder="资料编号" required autofocus >
                        <label>资料名称</label>
                        <input type="text" id="inputdataname" name="dataname" class="form-control" placeholder="资料名称" required >
                        <label>资料分类编号</label>
                        <input type="text" id="inputtypeid" name="typeid" class="form-control" placeholder="资料分类编号" required >
                        <label>数量</label>
                        <input type="text" id="inputicount" name="icount" class="form-control" placeholder="数量" required >
                        <label>价格</label>
                        <input type="text" id="inputiprice" name="iprice" class="form-control" placeholder="价格" required >
                        <label>备注</label>
                        <input type="text" id="inputmemo" name="memo" class="form-control" placeholder="备注＝。＝" required >
                        <label>创建日期</label>
                        <input type="text" id="inputgreatedate" name="greatedate" class="form-control" placeholder="创建日期" required >
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
                    <h4 class="modal-title">删除装备资料基本信息</h4>
                </div>
                <form method="post" action="data/armsdatadel.php" target="_blank">
                    <div class="modal-body">
                        <label>资料编号</label>
                        <input type="text" id="inputDeldatano" name="deldatano" class="form-control" placeholder="资料编号" required autofocus >
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
                    <h4 class="modal-title">修改装备资料基本信息</h4>
                </div>
                <form method="post" action="data/armsdataupd.php" target="_blank">
                    <div class="modal-body">
                        <label>资料编号</label>
                        <input type="text" id="inputUpdatano" name="updatano" class="form-control" placeholder="要修改的资料编号" required autofocus >
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Update">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>