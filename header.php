<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <img src="src/logo.jpg" alt="Brand" style="margin-top: -15px">
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse pull-right">
            <ul class="nav navbar-nav">
                <li><a href="#"><span class="glyphicon glyphicon-heart"></span>&nbsp;&nbsp;关于我们</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;投诉建议</a></li>
                <?php
                if(!isset($_COOKIE['username']))
                { 
                ?>
                <li class="active"><a href="#" data-toggle="modal" data-target="#divLogin"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;登录</a></li>
                <?php 
                }
                else if(strcmp($_COOKIE['usertype'], 'superadmin') == 0)
                {
                ?>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user"></span>
                <?php echo $_COOKIE['username']; ?>
                <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="manage.php">进入系统</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#" id="aarmsusers">用户管理</a></li>
                        <li><a href="#" id="asyslog">查看日志</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#" data-toggle="modal" data-target="#changePasswd">修改密码</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="data/logout.php">注销登录</a></li>
                    </ul>
                </li>
                <?php
                }
                else
                { 
                ?>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user"></span>
                <?php echo $_COOKIE['username']; ?>
                <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="manage.php">进入系统</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#" data-toggle="modal" data-target="#changePasswd">修改密码</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="data/logout.php">注销登录</a></li>
                    </ul>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="changePasswd" role="dialog">
    <div class="modal-dialog modalstyle">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">修改密码</h4>
            </div>
            <form method="post" action="data/changepwd.php" target="_blank" onsubmit="return checkPwd()">
                <div class="modal-body">
                    <label>原密码</label>
                    <input type="password" id="inputOldpwd" name="oldpwd" class="form-control" placeholder="原密码" required autofocus >
                    <label>新密码</label>
                    <input type="password" id="inputNewpwd" name="newpwd" class="form-control" placeholder="新密码" required >
                    <label>确认密码</label>
                    <input type="password" id="inputCompwd" name="compwd" class="form-control" placeholder="确认密码" required >
                </div>
                <div class="modal-footer">
                    <input class="btn btn-lg btn-block btn-primary" type="submit" value="Update">
                        <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                </div>
            </form>
        </div>
    </div>
</div>