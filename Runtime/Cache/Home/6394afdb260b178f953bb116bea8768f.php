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
        
    <link href="/toDo-master/Public/assets/pages/styles/todo-statistics.css" rel="stylesheet" type="text/css"/>

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
        
    <div class="body">
        <div class="body-accum">
            <div class="prop"><strong>累积：孵蛋数/下蛋数|孵化率</strong></div>
            <div class="cont">&emsp;&emsp;&emsp;&emsp;<?php echo ($sum['finish']); ?>&emsp;&emsp;&emsp;<?php echo ($sum['egg']); ?>&emsp; &emsp;<?php echo (round($sum['hatch']*100,2)); ?>%</div>
        </div>
        <div class="body-select1">
            <select>
                <option value="seven">近7天统计</option>
                <?php if(is_array($year)): $i = 0; $__LIST__ = $year;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>"><?php echo ($key); ?> 年</option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <div class="body-table">
            <table>
                <tr id="tr1">
                    <th class="th1">日期&nbsp;</th>
                    <th class="th2">月份&nbsp;</th>
                    <th>孵蛋数&nbsp;</th>
                    <th>/ 下蛋数&nbsp;</th>
                    <th>| 孵化率</th>
                </tr>
                <?php if(is_array($week)): $i = 0; $__LIST__ = $week;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tr1">
                        <td>&emsp;<?php echo ($key); ?>&emsp;</td>
                        <td>&emsp;<?php echo ($vo['finish']); ?>&emsp;</td>
                        <td>&emsp;&emsp;<?php echo ($vo['egg']); ?>&emsp;</td>
                        <td>&emsp;<?php echo (round($vo['hatch']*100,2)); ?> %</td>

                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <tr class="sum tr1 sum1">
                    <td>合计&emsp;</td>
                    <td>&emsp;<?php echo ($weeksum['finish']); ?>&emsp;</td>
                    <td>&emsp;&emsp;<?php echo ($weeksum['egg']); ?>&emsp;</td>
                    <td>&emsp;<?php echo (round($weeksum['hatch']*100,2)); ?>%</td>
                </tr>
            </table>
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
            _ACTION_ = '/toDo-master/index.php/Home/Statistics/statistics',
            _MODULE_ = '/toDo-master/index.php/Home',
            _CONTROLLER_ = '/toDo-master/index.php/Home/Statistics';
    window._ROOT_='/toDo-master';
    window._APP_='/toDo-master/index.php';
    window._ACTION_='<?php echo U("");?>';
    window._SELF_='<?php echo urldecode("/toDo-master/index.php/Home/Statistics/statistics");?>';
</script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
    
    <script src="/toDo-master/Public/assets/pages/scripts/todo-statistics.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->


    <script type="text/javascript">
        $(document).ready(function(){
            DoStatistics.init();
        });
    </script>


</body>
</html>