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
        <button type="button" class="btn btn-success btnstyle" data-toggle="modal" data-target="#addPersonInfo">添加信息</button>
        <button type="button" class="btn btn-warning btnstyle">修改信息</button>
        <button type="button" class="btn btn-danger btnstyle">删除信息</button>
        <button type="button" class="btn btn-info btnstyle" id="armsinfoshow">查看信息</button>
    </div>

    <div class="tblstyle" id="tablediv">
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addPersonInfo" role="dialog">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">添加人员信息</h4>
                </div>
                <form method="post" action="data/armspersonins.php" class="form-horizontal" target="_blank">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputRyid" class="col-sm-4 control-label">人员编号</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputRyid" name="ryid" class="form-control" placeholder="人员编号" required autofocus >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputRyname" class="col-sm-4 control-label">姓名</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputRyname" name="ryname" class="form-control" placeholder="部门职能" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">性别</label>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="inputRysexm" value="male"> 男
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="inputRysexf" value="female"> 女
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNationaloty" class="col-sm-4 control-label">民族</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputNationaloty" name="nationaloty" class="form-control" placeholder="部门职能" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputBitrh" class="col-sm-4 control-label">生日</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputBitrh" name="bitrh" class="form-control" placeholder="Example:19700101" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle" class="col-sm-4 control-label">职务</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputTitle" name="title" class="form-control" placeholder="部门职能" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputRank" class="col-sm-4 control-label">军衔</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputRank" name="rank" class="form-control" placeholder="上级部门" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPolitical" class="col-sm-4 control-label">政治面貌</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputPolitical" name="political" class="form-control" placeholder="部门职能" required >
                            </div>
                        </div>   
                        <div class="form-group">
                            <label for="inputCulture" class="col-sm-4 control-label">文化程度</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputCulture" name="culture" class="form-control" placeholder="上级部门" required >
                            </div>
                        </div>   
                        <div class="form-group">
                            <label for="inputMarital" class="col-sm-4 control-label">婚姻状况</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputMarital" name="marital" class="form-control" placeholder="部门职能" required >
                            </div>
                        </div>   
                        <div class="form-group">
                            <label for="inputFamily" class="col-sm-4 control-label">籍贯</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputFamily" name="family" class="form-control" placeholder="上级部门" required >
                            </div>
                        </div>                    
                        <div class="form-group">
                            <label for="inputIdcard" class="col-sm-4 control-label">身份证号</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputIdcard" name="idcard" class="form-control" placeholder="部门职能" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDepid" class="col-sm-4 control-label">部门编号</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputDepid" name="depid" class="form-control" placeholder="上级部门" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputIdcard" class="col-sm-4 control-label">工作岗位</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputPosition" name="position" class="form-control" placeholder="部门职能" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUpperid" class="col-sm-4 control-label">领导编号</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputUpperid" name="upperid" class="form-control" placeholder="上级部门" required >
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