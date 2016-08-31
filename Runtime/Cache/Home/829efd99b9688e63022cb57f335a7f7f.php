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
    <link href="/toDo-master/Public/assets/pages/styles/todo-list.css" rel="stylesheet" type="text/css"/>
    <link href="/toDo-master/Public/assets/pages/styles/todo-detail.css" rel="stylesheet" type="text/css"/>

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
        
	<div class="container">
		<div class="list-title">
			<div class="click-picture"></div> 
		    <div class="click-picture-tip">
		        <span class="left_triangle"></span>
		        <span class="tip-d">点鸡下蛋~</span>
		    </div>
		</div>
		<div class="list-centent">
			<div class="egg-close"></div>
			<ul class="timeline">
			</ul>
		</div>
    	<!--
    <div class="list-search">
        <div class="list-search-egg" id="list-search-egg">
            <div class="icon-egg red egg-red" data-level="1"></div>
            <div class="icon-egg orange egg-orange" data-level="2"></div>
            <div class="icon-egg blue egg-blue" data-level="3"></div>
            <div class="icon-egg green egg-green" data-level="4"></div>
            <div class="search search-no-finish" data-level="" data-finished="0" ><i class="glyphicon glyphicon-remove-circle"></i></div>
            <div class="search search-finish" data-level="" data-finished="1" ><i class="glyphicon glyphicon-check"></i></div>
            <div class="search-refresh"><i class="glyphicon glyphicon-refresh"></i></div>
        </div>
        <div class="clear-fix"></div>
        <input type="text" class="list-search-time start-time" placeholder="下蛋始" onfocus="WdatePicker({dateFmt:'yyyy-M-d H:mm:ss'})"/>
        <input type="text" class="list-search-time end-time" placeholder="下蛋末" onfocus="WdatePicker({dateFmt:'yyyy-M-d H:mm:ss'})"/>
        <input type="text" class="list-search-time do-start-time" placeholder="孵化始" onfocus="WdatePicker({dateFmt:'yyyy-M-d H:mm:ss'})"/>
        <input type="text" class="list-search-time do-end-time" placeholder="孵化末" onfocus="WdatePicker({dateFmt:'yyyy-M-d H:mm:ss'})"/>
        <button type="button" class="list-search-btn btn-go"><i class="glyphicon glyphicon-search"></i></button>
        <div class="clear-fix"></div>
        <div class="list-search-category" id="list-search-category"></div>
        <div class="clear-fix"></div>
    </div>

    <div class="egg-close"></div>
    <div class="event-tip">近期任务<marquee class="event-scoll" scrolldelay="2" scrollAmount=2 direction="left" align="middle" width="78%"><?php echo ($event_tip); ?></marquee></div>
    <div class="loading" style="margin-left: 44%;margin-top: 5%;color: #028402;display: none;">Loading...</div>
    <div class="list-main"></div>
    <div class="all-page"></div>

    <div class="modal-start">
        <div class="modal-mask"></div>
        <div class="modal-main">
            <div class="modal-box">
                <button type="button" class="modal-close"><span>x</span></button>
                <div class="modal-box-title"></div>
                <div class="modal-box-message"></div>
                <div class="modal-box-btn">
                    <div class="clear-fix"></div>
                </div>
            </div>
        </div>
    </div>-->
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
            _ACTION_ = '/toDo-master/index.php/Home/List/todo_list',
            _MODULE_ = '/toDo-master/index.php/Home',
            _CONTROLLER_ = '/toDo-master/index.php/Home/List';
    window._ROOT_='/toDo-master';
    window._APP_='/toDo-master/index.php';
    window._ACTION_='<?php echo U("");?>';
    window._SELF_='<?php echo urldecode("/toDo-master/index.php?m=Home&c=List&a=todo_list");?>';
</script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
    
    <script src="/toDo-master/Public/assets/global/plugins/jquery-modal/jquery-modal.js" type="text/javascript"></script>
    <script src="/toDo-master/Public/assets/pages/scripts/todo-list.js" type="text/javascript"></script>
    <script src="/toDo-master/Public/assets/pages/scripts/todo-detail.js" type="text/javascript"></script>
    <script src="/toDo-master/Public/assets/global/plugins/My97DatePicker/WdatePicker.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->


    <script type="text/javascript">
            //alert(screen.width);
        $(document).ready(function(){
            DoList.init();
            DoDetail.init();
        });
    </script>


</body>
</html>