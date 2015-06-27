    <script>
        $(document).ready(function()
        {
            $("#armsinfoshow").click(function()
            {
            $("#tablediv").load("data/armssurplus.php");
            });
        });      
    </script>

    <h3 class="headstyle" id="headshow">装备基本信息</h3>
    <div class="container-fluid inmid" id="btndiv">
        <div class="col-md-6">
            <button type="button" class="btn btn-warning btnstyle" data-toggle="modal" data-target="#updZbInfo">修改信息</button>
        </div>
        <div class="col-md-6">
            <button type="button" class="btn btn-info btnstyle" id="armssurplus">查看信息</button>
        </div>
    </div>

    <div class="tblstyle" id="tablediv">
    </div>
    <!-- Modal -->
    <div class="modal fade" id="updZbInfo" role="dialog">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">修改库存信息</h4>
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