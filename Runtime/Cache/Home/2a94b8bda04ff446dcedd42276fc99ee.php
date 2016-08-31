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
        
	<link rel="stylesheet" type="text/css" href="/toDo-master/Public/assets/pages/styles/todo-index.css">

    <!-- END PAGE STYLES -->
    
    <!-- BEGIN CORE PLUGINS -->
    <script src="/toDo-master/Public/assets/global/plugins/jquery-2.1.1.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    
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
        
	<div class="title_div">
		<div class="titlel"></div>
		<div class="titler"></div>
	</div>
	<a href="<?php echo U('List/todo_list');?>">
		<div class="kick">
		</div>
	</a>
    <?php if(empty($username)): else: ?><h3 style="text-align: center;" class="hello">Hello,<?php echo ($username); ?>!</h3><?php endif; ?>


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
            _ACTION_ = '/toDo-master/index.php/Home/Index/index',
            _MODULE_ = '/toDo-master/index.php/Home',
            _CONTROLLER_ = '/toDo-master/index.php/Home/Index';
    window._ROOT_='/toDo-master';
    window._APP_='/toDo-master/index.php';
    window._ACTION_='<?php echo U("");?>';
    window._SELF_='<?php echo urldecode("/toDo-master/index.php/Home/Index/index");?>';
</script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
    
	<script src="/toDo-master/Public/assets/pages/scripts/todo-index.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->



</body>
</html>