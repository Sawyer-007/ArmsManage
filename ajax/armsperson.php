<?php
echo '
    <script>
        $(document).ready(function()
        {
            $("#armsinfoshow").click(function()
            {
            $("#tablediv").load("data/armsinfosel.php");
            });
        });
    </script>

    <h3 class="headstyle" id="headshow">人员基本信息</h3>
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
                    <h4 class="modal-title">添加人员信息</h4>
                </div>
                <form method="post" action="">
                    <div class="modal-body">
                        <label>人员编号</label>
                        <input type="text" id="inputZbid" name="ryid" class="form-control" placeholder="部门名称" required autofocus >
                        <label>姓名</label>
                        <input type="text" id="inputZbname" name="ryname" class="form-control" placeholder="部门职能" required >
                        <label>性别</label>
                        <input type="text" id="inputZbspec" name="sex" class="form-control" placeholder="上级部门" required >
                        <label>民族</label>
                        <input type="text" id="inputZbname" name="nationaloty" class="form-control" placeholder="部门职能" required >
                        <label>生日</label>
                        <input type="text" id="inputZbspec" name="birth" class="form-control" placeholder="上级部门" required >
                        <label>职务</label>
                        <input type="text" id="inputZbname" name="title" class="form-control" placeholder="部门职能" required >
                        <label>军衔</label>
                        <input type="text" id="inputZbspec" name="rank" class="form-control" placeholder="上级部门" required >
                        <label>政治面貌</label>
                        <input type="text" id="inputZbname" name="political" class="form-control" placeholder="部门职能" required >
                        <label>文化程度</label>
                        <input type="text" id="inputZbspec" name="culture" class="form-control" placeholder="上级部门" required >
                        <label>婚姻状况</label>
                        <input type="text" id="inputZbname" name="marital" class="form-control" placeholder="部门职能" required >
                        <label>籍贯</label>
                        <input type="text" id="inputZbspec" name="family" class="form-control" placeholder="上级部门" required >
                        <label>身份证号</label>
                        <input type="text" id="inputZbname" name="idcard" class="form-control" placeholder="部门职能" required >
                        <label>所在部门编号</label>
                        <input type="text" id="inputZbspec" name="depid" class="form-control" placeholder="上级部门" required >
                        <label>工作岗位</label>
                        <input type="text" id="inputZbname" name="position" class="form-control" placeholder="部门职能" required >
                        <label>部门领导编号</label>
                        <input type="text" id="inputZbspec" name="upperid" class="form-control" placeholder="上级部门" required >
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