<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="/toDo-master/Public/assets/pages/img/index/avatar.jpg"/>
    <title>土豆鸡快</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="author" content="zsy"/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link rel="stylesheet" href="/toDo-master/Public/assets/global/plugins/bootstrap/css/bootstrap.min.css"/>
    
        <link href="/toDo-master/Public/assets/global/styles/style.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <link href="/toDo-master/Public/assets/global/plugins/icon/style.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGIN STYLES -->

    <!-- BEGIN PAGE STYLES -->
        
	<link href="/toDo-master/Public/assets/pages/styles/user.css" rel="stylesheet" type="text/css"/>

    <!-- END PAGE STYLES -->
</head>

<body>

<!-- BEGIN PAGE-HEADER -->
<section class="page-header">
    <a href="#cd-nav" class="cd-nav-trigger">Menu<span><!-- used to create the menu icon --></span>
    </a>
    <nav class="cd-nav-container" id="cd-nav">
        <header>
            <a href="<?php echo U('Index/index');?>"><span>首页</span></a>
            <?php if(empty($username)): else: ?><a href="<?php echo U('User/logout');?>"><span style="margin-left:30px;">登出</span></a><?php endif; ?>
            <a href="#0" class="cd-close-nav">Close</a>
        </header>

        <ul class="cd-nav">
            <li class="cd-selected" data-menu="task">
                <a href="javascript:;">
                    <i class="glyphicon glyphicon-paperclip i1 i-btn"></i>
                    <em>土土任务</em>
                </a>
            </li>

            <li data-menu="statistics">
                <a href="javascript:;">
                    <i class="glyphicon glyphicon-signal i2 i-btn"></i>
                    <em>豆豆统计</em>
                </a>
            </li>

            <li data-menu="calender">
                <a href="javascript:;">
                    <i class="glyphicon glyphicon-calendar i3 i-btn"></i>
                    <em>小鸡日历</em>
                </a>
            </li>

            <li data-menu="backward">
                <a href="javascript:;">
                    <i class="glyphicon glyphicon-hourglass i4 i-btn"></i>
                    <em>快快倒数</em>
                </a>
            </li>

            <li data-menu="notes" class="easy">
                <a href="javascript:;">
                    <i class="glyphicon glyphicon-list-alt i5 i-btn"></i>
                    <em>便签</em>
                </a>
            </li>

        </ul> <!-- .cd-3d-nav -->
    </nav>
</section>
<!-- END PAGE-HEADER -->

<!-- BEGIN PAGE-BODY -->
    <section class="page-body">
        
	
	<div class="container">
	  <div class="login" data-state="">
	    
	    <form action="" class="login-form">
	      <p class="login-title">请输入你的相关信息<br /></p>
	      <input type="text" placeholder="用户名" name="username"/><div class="nametip"></div>
	      <input type="text" placeholder="登陆账号（Username）" name="account"/><div class="notip"></div>
	      <input type="password" placeholder="登陆密码（Password）" name="password" /><div class="passwordtip"></div>
	      <input type="password" placeholder="确认密码" name="cpassword" /><div class="cpasswordtip"></div>
	    </form>
	    
	    <div class="login-button">
	    	<span class="login-icon icon-enter">注册</span>
	    	<span class="login-icon icon-ok"><span class="login-hi"></span><br><button class="login-button-conf OK">ENTER</button><br>
		    	<span class="login-small">or <a class="login-abort" href="javascript:;">exit</a>.</span>
	    	</span>
	    	<span class="login-icon icon-ko">
	    		<span class="login-hi"></span><br><button class="login-button-conf KO">RETRY</button>
	    	</span>
	    	<span class="login-icon icon-exit"><i class="fa fa-times" aria-hidden="true"></i></i></span>
	    </div>
	    
	  </div>
	  
	</div>


    </section>
<!-- END PAGE-BODY -->

<!-- BEGIN CORE PLUGINS -->
    <script src="/toDo-master/Public/assets/global/plugins/jquery-2.1.1.js" type="text/javascript"></script>
    <script src="/toDo-master/Public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/toDo-master/Public/assets/global/plugins/modernizr.js" type="text/javascript"></script>
    <script src="/toDo-master/Public/assets/global/plugins/main.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN CORE GLOBAL -->
    <script src="/toDo-master/Public/assets/global/scripts/public.js" type="text/javascript"></script>
<!-- END CORE GLOBAL -->

<script type="text/javascript">
    /* GLOBAL URL */
    var _ROOT_ = '/toDo-master',
            _PUBLIC_ = '/toDo-master/Public',
            _INDEX_ = '/toDo-master/index.php',
            _ACTION_ = '/toDo-master/index.php/Home/User/register',
            _MODULE_ = '/toDo-master/index.php/Home',
            _CONTROLLER_ = '/toDo-master/index.php/Home/User';
    window._ROOT_='/toDo-master';
    window._APP_='/toDo-master/index.php';
    window._ACTION_='<?php echo U("");?>';
    window._SELF_='<?php echo urldecode("/toDo-master/index.php?m=Home&c=User&a=register");?>';
</script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
    
	<script type="text/javascript" src="/toDo-master/Public/assets/pages/scripts/register.js" ></script>

<!-- END PAGE LEVEL SCRIPTS -->



</body>
</html>