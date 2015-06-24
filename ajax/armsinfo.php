<?php
echo '
    <script>
        $(document).ready(function()
        {
            $("#armsinfoshow").click(function()
            {
            $("#tablediv").load("data/armsinfosel.php");
            })
        })
    </script>

    <h3 class="headstyle" id="headshow">装备基本信息</h3>
    <div class="container-fluid inmid" id="btndiv">
        <button type="button" class="btn btn-success btnstyle" data-toggle="modal" data-target="#addZbInfo">添加信息</button>
        <button type="button" class="btn btn-warning btnstyle">修改信息</button>
        <button type="button" class="btn btn-danger btnstyle">删除信息</button>
        <button type="button" class="btn btn-info btnstyle" id="armsinfoshow">查看信息</button>
    </div>

    <div class="tblstyle" id="tablediv">
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addZbInfo" role="dialog">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">添加装备信息</h4>
                </div>
                <form method="post" action="data/armsinfoins.php">
                    <div class="modal-body">
                        <label>装备编号</label>
                        <input type="text" id="inputZbid" name="zbid" class="form-control" placeholder="装备编号" required autofocus >
                        <label>装备名称</label>
                        <input type="text" id="inputZbname" name="zbname" class="form-control" placeholder="装备名称" required >
                        <label>规格编号</label>
                        <input type="text" id="inputZbspec" name="zbspec" class="form-control" placeholder="规格编号" required >
                        <label>装备类别</label>
                        <input type="text" id="inputZbkind" name="zbkind" class="form-control" placeholder="装备类别" required >
                        <label>计量单位</label>
                        <input type="text" id="inputZbunit" name="zbunit" class="form-control" placeholder="计量单位" required >
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Add in">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    ';
?>