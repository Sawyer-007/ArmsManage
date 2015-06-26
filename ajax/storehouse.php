    <script>
        $(document).ready(function()
        {
            $("#storehouseshow").click(function()
            {
            $("#tablediv").load("data/storehousesel.php");
            })
        })
    </script>

    <h3 class="headstyle" id="headshow">仓库信息管理</h3>
    <div class="container-fluid inmid" id="btndiv">
        <button type="button" class="btn btn-success btnstyle" data-toggle="modal" data-target="#addZbInfo">添加仓库</button>
        <button type="button" class="btn btn-warning btnstyle">修改仓库</button>
        <button type="button" class="btn btn-danger btnstyle">删除仓库</button>
        <button type="button" class="btn btn-info btnstyle" id="storehouseshow">查看仓库</button>
    </div>

    <div class="tblstyle" id="tablediv">
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addZbInfo" role="dialog">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">添加仓库信息</h4>
                </div>
                <form method="post" action="data/storehouseins.php">
                    <div class="modal-body">
                        <label>仓库编号</label>
                        <input type="text" id="inputSid" name="sid" class="form-control" placeholder="Example:00001" required autofocus >
                        <label>仓库名称</label>
                        <input type="text" id="inputSname" name="sname" class="form-control" placeholder="Example:东区仓库" required>
                        <label>仓库说明</label>
                        <input type="text" id="inputMemo" name="memo" class="form-control" placeholder="Example:轻武器" required>
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Add in">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>