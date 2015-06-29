<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creating Modal Window with Bootstrap">
    <title>装备管理系统</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <!-- Navbar -->
    <?php include 'header.php';?>
    <div class="container-fluid">
    	<div class="mianwind">
    		<div class="bg" id="bgdiv"></div>
    		<div class="col-md-6 col-md-offset-6">
    			<h1 class="bghead">秩序与管理</h1>
    			<p class="bgp">无规矩不成方圆，有管理则规矩俱全</p>
    			<?php
    			if(!isset($_COOKIE['username'])) 
    			{
    			?>
    			<button type="button" class="btn btn-success btnstyle" id="armssurplus" data-toggle="modal" data-target="#divLogin">Sign in</button>
    			<?php
    			}
    			else{
    			?>
    			<input type="button" class="btn btn-success btnstyle" onclick="location.href='manage.php'" value="进入系统">
    			<?php 
    			}
    			?>
    		</div>
    	</div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="divLogin">
        <div class="modal-dialog loginModal">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title headingModal">装备管理系统入口</h4>
                </div>
                <form method="post" action="data/login.php">
                    <div class="modal-body">
                        <input type="text" id="inputLogin" name="user" class="form-control" placeholder="Username" required autofocus >
                        <input type="password" id="inputPsw" name="psd" class="form-control" placeholder="Password" required>
                        <div class="forgetPsw">
                            <a href="#">忘记密码</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-lg btn-block btn-primary" type="submit" name="submit" value="Sign in">
                            <!-- <span class="glyphicon glyphicon-log-in pull-left"></span>Sign in -->
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>