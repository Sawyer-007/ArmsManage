	<script>
        $(document).ready(function()
        {
            $("#departmentsshow").click(function()
            {
            $("#tablediv").load("data/departmentssel.php");
            });
        });     
    </script>

    <h3 class="headstyle" id="headshow">部门基本信息</h3>
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
            <button type="button" class="btn btn-info btnstyle" id="departmentsshow">查看信息</button>
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
                    <h4 class="modal-title">添加部门信息</h4>
                </div>
                <form method="post" action="data/departmentsins.php" target="_blank">
                    <div class="modal-body">
                        <label>部门名称</label>
                        <input type="text" id="inputDepName" name="depname" class="form-control" placeholder="Example:人事部" required >
                        <label>部门职能</label>
                        <input type="text" id="inputDescribes" name="desc" class="form-control" placeholder="Example:管理" required >
                        <label>上级部门</label>
                        <input type="text" id="inputUpperId" name="upperid" class="form-control" placeholder="Example:20150001" required >
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
                    <h4 class="modal-title">删除部门信息</h4>
                </div>
                <form method="post" action="data/departmentsdel.php" target="_blank">
                    <div class="modal-body">
                        <label>部门编号</label>
                        <input type="text" id="inputDelDepId" name="depid" class="form-control" placeholder="Example:20150001" required autofocus >
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
                    <h4 class="modal-title">修改部门信息</h4>
                </div>
                <form method="post" action="data/departmentsupd.php" target="_blank">
                    <div class="modal-body">
                        <label>部门编号</label>
                        <input type="text" id="inputUpDepid" name="depid" class="form-control" placeholder="要修改的部门编号" required autofocus >
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Update">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>