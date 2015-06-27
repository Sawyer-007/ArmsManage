    <script>
        $(document).ready(function()
        {
            $("#aallinfo").click(function()
            {
            $("#tablediv").load("data/armspersonsel.php");
            });
        });
    </script>

    <h3 class="headstyle" id="headshow">人员基本信息</h3>
    <div class="container-fluid inmid" id="btndiv">
        <div class="col-md-3">
            <button type="button" class="btn btn-success btnstyle" data-toggle="modal" data-target="#addPersonInfo">添加信息</button>
        </div>
        <div class="col-md-3">    
            <button type="button" class="btn btn-warning btnstyle" data-toggle="modal" data-target="#updPersonInfo">修改信息</button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-danger btnstyle" data-toggle="modal" data-target="#delPersonInfo">删除信息</button>
        </div>
        <div class="btn-group col-md-3">
            <button type="button" class="btn btn-info dropdown-toggle btnstyle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            查看信息 <span class="caret"></span>
            </button>        
            <ul class="dropdown-menu btndrop">
                <li><a href="#" id="aallinfo">信息概览</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#" data-toggle="modal" data-target="#exPersonInfo">详细信息</a></li>
            </ul>
        </div>    
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
                                <input type="text" id="inputRyid" name="ryid" class="form-control" placeholder="8位数字,例:20130001" required autofocus >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputRyname" class="col-sm-4 control-label">姓名</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputRyname" name="ryname" class="form-control" placeholder="人员姓名" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">性别</label>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="inputRysexm" value="male" checked="checked"> 男
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="inputRysexf" value="female"> 女
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNationaloty" class="col-sm-4 control-label">民族</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputNationaloty" name="nationaloty" class="form-control" placeholder="民族" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputBitrh" class="col-sm-4 control-label">生日</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputBitrh" name="bitrh" class="form-control" placeholder="例:19700101" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle" class="col-sm-4 control-label">职务</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputTitle" name="title" class="form-control" placeholder="人员职务" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputRank" class="col-sm-4 control-label">军衔</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputRank" name="rank" class="form-control" placeholder="军衔" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPolitical" class="col-sm-4 control-label">政治面貌</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputPolitical" name="political" class="form-control" placeholder="政治面貌" required >
                            </div>
                        </div>   
                        <div class="form-group">
                            <label for="inputCulture" class="col-sm-4 control-label">文化程度</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputCulture" name="culture" class="form-control" placeholder="文化程度" required >
                            </div>
                        </div>   
                        <div class="form-group">
                            <label for="inputMarital" class="col-sm-4 control-label">婚姻状况</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputMarital" name="marital" class="form-control" placeholder="婚姻状况" required >
                            </div>
                        </div>   
                        <div class="form-group">
                            <label for="inputFamily" class="col-sm-4 control-label">籍贯</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputFamily" name="family" class="form-control" placeholder="籍贯" required >
                            </div>
                        </div>                    
                        <div class="form-group">
                            <label for="inputIdcard" class="col-sm-4 control-label">身份证号</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputIdcard" name="idcard" class="form-control" placeholder="18位数字" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDepid" class="col-sm-4 control-label">部门编号</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputDepid" name="depid" class="form-control" placeholder="上级部门编号" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputIdcard" class="col-sm-4 control-label">工作岗位</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputPosition" name="position" class="form-control" placeholder="工作岗位" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUpperid" class="col-sm-4 control-label">领导编号</label>
                            <div class="col-sm-8">
                                <input type="text" id="inputUpperid" name="upperid" class="form-control" placeholder="领导编号" required >
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

    <div class="modal fade" id="delPersonInfo" role="dialog">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">删除人员信息</h4>
                </div>
                <form method="post" action="data/armspersondel.php" target="_blank">
                    <div class="modal-body">
                        <label>人员编号</label>
                        <input type="text" id="inputDelRyid" name="delryid" class="form-control" placeholder="要删除的人员编号" required autofocus >
                    </div> 
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Delete">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updPersonInfo" role="dialog">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">修改人员信息</h4>
                </div>
                <form method="post" action="data/armspersonupd.php" target="_blank">
                    <div class="modal-body">
                        <label for="inputUpRyid">人员编号</label>
                        <input type="text" id="inputUpRyid" name="upryid" class="form-control" placeholder="要修改的装备编号" required autofocus >
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="Update">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exPersonInfo" role="dialog">
        <div class="modal-dialog modalstyle">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">查看人员详细信息</h4>
                </div>
                <form method="post" action="data/armspersonexsel.php" target="_blank">
                    <div class="modal-body">
                        <label for="inputExRyid">人员编号</label>
                        <input type="text" id="inputExRyid" name="ryid" class="form-control" placeholder="人员编号" required autofocus >
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" value="View">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>