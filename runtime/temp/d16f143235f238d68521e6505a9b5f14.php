<?php /*a:1:{s:73:"D:\myphp_www\PHPTutorial\WWW\think\application\admin\view\user\login.html";i:1550652470;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlentities((isset($title) && ($title !== '')?$title:"页面标题")); ?></title>
     <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css" />
    <script type="text/javascript" src="/static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="page-header text-center">
                <h3>管理员登录</h3>
            </div>
            <form class="form-horizontal" action="<?php echo url('user/CheckLogin'); ?>"  method="post"  >
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">邮箱:</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">密码:</label>
                    <div class="col-sm-10">
                        <input type="password" name="password"  class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-block">登录</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>

</body>
</html>