<script>
    $(document).ready(function()
    {
        $("#armsusersshow").click(function()
        {
            $("#tablediv").load("data/armsuserssel.php");
        });
    });        
</script>

<h3 class="headstyle" id="headshow">用户管理</h3>
<div class="container-fluid inmid" id="btndiv">
    <button type="button" class="btn btn-success btnstyle" data-toggle="modal" data-target="#addUserInfo">添加用户</button>
    <button type="button" class="btn btn-warning btnstyle" data-toggle="modal" data-target="#resetPasswd">恢复密码</button>
    <button type="button" class="btn btn-danger btnstyle" data-toggle="modal" data-target="#delUserInfo">删除用户</button>
    <button type="button" class="btn btn-info btnstyle" id="armsusersshow">查看用户</button>
</div>

<div class="tblstyle" id="tablediv">
</div>
<!-- Modal -->
<div class="modal fade" id="addUserInfo" role="dialog">
    <div class="modal-dialog modalstyle">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">添加用户信息</h4>
            </div>
            <form method="post" action="data/armsusersins.php" target="_blank" class="form-horizontal">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputUsersname" class="col-sm-4 control-label">用户名</label>
                        <div class="col-sm-8">
                            <input type="text" id="inputUsersname" name="usersname" class="form-control" placeholder="只允许英文" required autofocus >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">用户类型</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" name="type" id="inputTypes" value="surperadmin"> 管理员
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="type" id="inputTypeo" value="operator"> 操作员
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-lg btn-block btn-primary" type="submit" value="Add in">
                        <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="delUserInfo" role="dialog">
    <div class="modal-dialog modalstyle">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">删除用户信息</h4>
            </div>
            <form method="post" action="data/armsusersdel.php" target="_blank">
                <div class="modal-body">
                    <label>用户名</label>
                    <input type="text" id="inputDelUser" name="deluser" class="form-control" placeholder="用户名" required autofocus >
                </div> 
                <div class="modal-footer">
                    <input class="btn btn-lg btn-block btn-primary" type="submit" value="Delete">
                        <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="resetPasswd" role="dialog">
    <div class="modal-dialog modalstyle">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">重置用户密码</h4>
            </div>
            <form method="post" action="data/armsusersupd.php" target="_blank">
                <div class="modal-body">
                    <label>用户名</label>
                    <input type="text" id="inputResUser" name="resuser" class="form-control" placeholder="用户名" required autofocus >
                </div>
                <div class="modal-footer">
                    <input class="btn btn-lg btn-block btn-primary" type="submit" value="Update">
                        <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                </div>
            </form>
        </div>
    </div>
</div>