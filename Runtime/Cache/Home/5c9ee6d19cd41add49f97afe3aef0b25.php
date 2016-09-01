<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="/toDo-master/Public/assets/pages/img/index/avatar.png"/>
    <title>土豆鸡快</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="author" content="zsy"/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link rel="stylesheet" type="text/css" href="/toDo-master/Public/assets/pages/styles/nav.css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE STYLES -->
        
    <link href="/toDo-master/Public/assets/global/plugins/jquery-modal/jquery-modal.css" rel="stylesheet" type="text/css"/>
    <link href="/toDo-master/Public/assets/pages/styles/user.css" rel="stylesheet" type="text/css"/>

    <!-- END PAGE STYLES -->
    
    <!-- BEGIN CORE PLUGINS -->
    <script src="/toDo-master/Public/assets/global/plugins/jquery-2.1.1.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    
    <script type="text/javascript">
			(function(doc, win) {
		    var screenWidth = 0, size = 'M', root = doc.documentElement;
		    if (window.screen && screen.width) {
		        screenWidth = screen.width;
		        if (screenWidth > 1920) {
		            // 超大屏，例如iMac
		            size = 'L';
		        } else if (screenWidth < 480) {
		            // 小屏，如手机
		            size = 'S';
		        }
		    }
		    // 标记CSS
		    root.className = size;
		    console.log(doc.documentElement);
		    // 标记JS
		    win.SIZE = size;        
		})(document, window);
		</script>
</head>

<body>

<!-- BEGIN PAGE-HEADER -->
<section class="page-header">
	<header>
	  <input type="checkbox" id="toggle"/>
	  <label for="toggle" id="toggle-btn"></label>
	  <div class="nav-icon"></div>
	  <nav data-state="close">
	    <ul class="td-nav">
	      <li data-menu="task"><a href="javascript:;"><i></i>土土任务</a></li>
	      <li data-menu="statistics"><a href="javascript:;"><i></i>豆豆统计</a></li>
	      <li data-menu="calender"><a href="javascript:;"><i></i>小鸡日历</a></li>
	      <li data-menu="backward"><a href="javascript:;"><i></i>快快倒数</a></li>
	      <li data-menu="notes"><a href="javascript:;"><i></i>便签</a></li>
	    </ul>
	  </nav>
	</header>
	<div class="back"></div>
</section>
<!-- END PAGE-HEADER -->

<!-- BEGIN PAGE-BODY -->
    <section class="page-body">
        
    <div class="container">
	  <div class="login" data-state="">
	    
	    <form action="" class="login-form">
	      <p class="login-title">请输入你的用户名和密码<br /></p>
	      <input type="text" placeholder="Username" name="account"/>
	      <input type="password" placeholder="Password" name="password" />
	    </form>
	    
	    <!--<iframe class="login-iframe" src="http://www.wikipedia.com"></iframe>-->
	    <div class="login-button">
	    	<span class="login-icon icon-enter">登陆</span>
	    	<span class="login-icon icon-ok"><span class="login-hi"></span><br><button class="login-button-conf OK">ENTER</button><br>
		    	<span class="login-small">or <a class="login-abort" href="javascript:;">exit</a>.</span>
	    	</span>
	    	<span class="login-icon icon-ko">
	    		<span class="login-hi"></span><br><button class="login-button-conf KO">RETRY</button>
	    	</span>
	    	<span class="login-icon icon-exit"><i class="fa fa-times" aria-hidden="true"></i></i></span>
	    </div>
	    
	    <div class="register">
	        <span class="no-reg">还没有账号？</span>
	        <a href="<?php echo U('User/register');?>" type="button" class="btn-register">注册>></a>
	    </div>
	  </div>
	  
	</div>
    

    </section>
<!-- END PAGE-BODY -->

<!-- BEGIN CORE PAGES -->
	<script src="/toDo-master/Public/assets/pages/scripts/nav.js" type="text/javascript" charset="utf-8"></script>
<!-- END CORE PAGES -->
<!-- BEGIN CORE PLUGINS -->
  
    <script src="/toDo-master/Public/assets/global/plugins/modernizr.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN CORE GLOBAL -->
    <script src="/toDo-master/Public/assets/global/scripts/public.js" type="text/javascript"></script>
<!-- END CORE GLOBAL -->

<script type="text/javascript">
    /* GLOBAL URL */
    var _ROOT_ = '/toDo-master',
            _PUBLIC_ = '/toDo-master/Public',
            _INDEX_ = '/toDo-master/index.php',
            _ACTION_ = '/toDo-master/index.php/Home/User/login',
            _MODULE_ = '/toDo-master/index.php/Home',
            _CONTROLLER_ = '/toDo-master/index.php/Home/User';
    window._ROOT_='/toDo-master';
    window._APP_='/toDo-master/index.php';
    window._ACTION_='<?php echo U("");?>';
    window._SELF_='<?php echo urldecode("/toDo-master/index.php?m=Home&c=User&a=login");?>';
</script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
    
    <script src="/toDo-master/Public/assets/global/plugins/jquery-modal/jquery-modal.js" type="text/javascript"></script>
    <script src="/toDo-master/Public/assets/pages/scripts/login.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->



</body>
</html>