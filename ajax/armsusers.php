<script>
    $(document).ready(function()
    {
        $("#armsinfoshow").click(function()
        {
            $("#tablediv").load("data/armsinfosel.php");
        });
    });        
</script>

<h3 class="headstyle" id="headshow">用户管理</h3>
<div class="container-fluid inmid" id="btndiv">
    <button type="button" class="btn btn-success btnstyle" data-toggle="modal" data-target="#addUserInfo">添加用户</button>
    <button type="button" class="btn btn-warning btnstyle" data-toggle="modal" data-target="#updZbInfo">恢复密码</button>
    <button type="button" class="btn btn-danger btnstyle" data-toggle="modal" data-target="#delZbInfo">删除用户</button>
    <button type="button" class="btn btn-info btnstyle" id="armsinfoshow">查看用户</button>
</div>

<div class="tblstyle" id="tablediv">
</div>
<!-- Modal -->
<div class="modal fade" id="addUserInfo" role="dialog">
    <div class="modal-dialog modalstyle">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">添加装备信息</h4>
            </div>
            <form method="post" action="data/armsinfoins.php" target="_blank">
                <div class="modal-body">
                    <label>装备编号</label>
                    <input type="text" id="inputZbid" name="zbid" class="form-control" placeholder="装备编号" required autofocus >
                    <label>装备名称</label>
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
                <h4 class="modal-title">删除装备信息</h4>
            </div>
            <form method="post" action="data/armsinfodel.php" target="_blank">
                <div class="modal-body">
                    <label>装备编号</label>
                    <input type="text" id="inputDelZbid" name="delzbid" class="form-control" placeholder="装备编号" required autofocus >
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
                <h4 class="modal-title">修改装备信息</h4>
            </div>
            <form method="post" action="data/armsinfoupd.php" target="_blank">
                <div class="modal-body">
                    <label>装备编号</label>
                    <input type="text" id="inputUpZbid" name="upzbid" class="form-control" placeholder="要修改的装备编号" required autofocus >
                </div>
                <div class="modal-footer">
                    <input class="btn btn-lg btn-block btn-primary" type="submit" value="Update">
                        <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                </div>
            </form>
        </div>
    </div>
</div>