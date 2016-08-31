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
        
    <style>
    body{
    background-image:url("/toDo-master/Public/assets/pages/img/calendar/back-calendar.png");
        height:468px !important;
        width:320px !important;
    }


    </style>
    <link rel="stylesheet" href="/toDo-master/Public/assets/global/plugins/fullcalendar/fullcalendar.css" type="text/css"/>
    <link rel="stylesheet" href="/toDo-master/Public/assets/global/plugins/fullcalendar/fullcalendar.print.css" type="text/css" media="print"/>
    <link rel="stylesheet" href="/toDo-master/Public/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.css" type="text/css">


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
        
    <div id='calendar'  style='color:#00bcd4 !important ;margin-top:60px'></div>


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
            _ACTION_ = '/toDo-master/index.php/Home/Calendar/all',
            _MODULE_ = '/toDo-master/index.php/Home',
            _CONTROLLER_ = '/toDo-master/index.php/Home/Calendar';
    window._ROOT_='/toDo-master';
    window._APP_='/toDo-master/index.php';
    window._ACTION_='<?php echo U("");?>';
    window._SELF_='<?php echo urldecode("/toDo-master/index.php/Home/Calendar/all");?>';
</script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
    
    <!--<script src="/toDo-master/Public/assets/global/plugins/jquery-modal/jquery-modal.js" type="text/javascript"></script>-->
   <script src="/toDo-master/Public/assets/global/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>
    <script src="/toDo-master/Public/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="/toDo-master/Public/assets/pages/scripts/calendar.js" type="text/javascript"></script>
    <script src="/toDo-master/Public/assets/pages/scripts/demo.js"></script>
    
<!-- END PAGE LEVEL SCRIPTS -->


    <script type="text/javascript">
        $(document).ready(function() {
            Calendar.init();
        });
    </script>


</body>
</html>