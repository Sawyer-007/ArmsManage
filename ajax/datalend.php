    <script>
        $(document).ready(function()
        {
            $("#datalendshow").click(function()
            {
            $("#tablediv").load("data/datalendsel.php");
            });
        });      
    </script>

    <h3 class="headstyle" id="headshow">装备资料借阅基本信息</h3>
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
            <button type="button" class="btn btn-info btnstyle" id="datalendshow">查看信息</button>
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
                    <h4 class="modal-title">添加借阅信息</h4>
                </div>
                <form method="post" action="data/datalendins.php" target="_blank">
                    <div class="modal-body">
                        <label>借阅号</label>
                        <input type="text" id="inputid" name="id" class="form-control" placeholder="借阅号" required autofocus >
                        <label>资料编号</label>
                        <input type="text" id="inputdatano" name="datano" class="form-control" placeholder="资料编号" required >
                        <label>借阅日期</label>
                        <input type="text" id="inputlenddate" name="lenddate" class="form-control" placeholder="借阅日期" required >
                        <label>借阅人编号</label>
                        <input type="text" id="inputryid" name="ryid" class="form-control" placeholder="借阅人编号" required >
                        <label>借阅数量</label>
                        <input type="text" id="inputlendcount" name="lendcount" class="form-control" placeholder="借阅数量" required >
                        <label>批准人</label>
                        <input type="text" id="inputryname" name="ryname" class="form-control" placeholder="批准人" required >
                        <label>借阅标记</label>
                        <input type="text" id="inputflag" name="flag" class="form-control" placeholder="标记0/1/2/3" required >
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
                    <h4 class="modal-title">删除装备资料借阅信息</h4>
                </div>
                <form method="post" action="data/datalenddel.php" target="_blank">
                    <div class="modal-body">
                        <label>借阅号</label>
                        <input type="text" id="inputDelid" name="id" class="form-control" placeholder="借阅号" required autofocus >
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
                    <h4 class="modal-title">修改装备资料借阅信息</h4>
                </div>
                <form method="post" action="data/datalendupd.php" target="_blank">
                    <div class="modal-body">
                        <label>资料编号</label>
                        <input type="text" id="inputUpid" name="id" class="form-control" placeholder="要修改的借阅号" required autofocus >
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Update">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>