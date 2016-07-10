<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="/todo1/todo2/Public/assets/pages/img/index/avatar.jpg"/>
    <title>土豆鸡快</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="author" content="zsy"/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link rel="stylesheet" href="/todo1/todo2/Public/assets/global/plugins/bootstrap/css/bootstrap.min.css"/>
    
        <link href="/todo1/todo2/Public/assets/global/styles/style.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <link href="/todo1/todo2/Public/assets/global/plugins/icon/style.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGIN STYLES -->

    <!-- BEGIN PAGE STYLES -->
        
    <link href="/todo1/todo2/Public/assets/pages/styles/notes.css" rel="stylesheet" type="text/css"/>

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
        
    <div class="notes">
       	<div class="main-page-note">
       		<div class="group-note">
	       		<?php if(is_array($note)): $i = 0; $__LIST__ = $note;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class='note paper<?php echo ($vo["paper_type"]); ?> <?php echo ($vo["color"]); ?> ' note-id="<?php echo ($vo["id"]); ?>" note-paper="<?php echo ($vo["paper_type"]); ?>" note-color="<?php echo ($vo["color"]); ?>">
	       				<span class="note-content"><?php echo ($vo['note']); ?></span>
	       				<span class="note-time"><?php echo (date('Y-m-d',$vo['create_time'])); ?></span>
	       			</div><?php endforeach; endif; else: echo "" ;endif; ?>
	       		<div class="clear"></div>
       		</div>
       		<div id="note-details">
       			<div class="note-time"><span ></span></div>
       			<div class="content"></div>
       			<div class="note-edit-tool">
       				<a class="note-delete">删除</a>
       				<a class="note-close">关闭</a>
       			</div>
       		</div> 
       		<div id="note-edit">
       			<div class="note-edit-content"><textarea></textarea></div>
       			<div class="note-edit-tool">
       				<a class="note-close">关闭</a>
       				<a class="note-clear">清空</a>
       				<a class="note-paper-style">换肤</a>
       				<a class="note-add">确定</a>
      			</div>
       		</div>
       		<!-- <div class="group-note">
       			<div class="note paper3 blue active ">
       				<span class="note-content">经验内容仅供参考，如果您需解决具体问题(尤其法律、医学等领域)，建议您详细咨询相关领域专业人士.</span>
       				<span class="note-time">2015-11-18</span>
       			</div>
       			<div class="note paper4 green active ">
       				<span class="note-content">经验内容仅供参考，如果您需解决具体问题(尤其法律、医学等领域)，建议您详细咨询相关领域专业人士.</span>
       				<span class="note-time">2015-11-17</span>
       			</div>
       		</div>
       		<div class="group-note">
       			<div class="note paper1 green active ">
       				<span class="note-content">经验内容仅供参考，如果您需解决具体问题(尤其法律、医学等领域)，建议您详细咨询相关领域专业人士.</span>
       				<span class="note-time">2015-11-19</span>
       			</div>
       			<div class="note paper2 yellow active ">
       				<span class="note-content">经验内容仅供参考，如果您需解决具体问题(尤其法律、医学等领域)，建议您详细咨询相关领域专业人士.</span>
       			</div>
       		</div>
       		<div class="group-note">
       			<div class="note paper3 yellow active ">
       				<span class="note-content">经验内容仅供参考，如果您需解决具体问题(尤其法律、医学等领域)，建议您详细咨询相关领域专业人士.</span>
       			</div>
       			<div class="note paper4 yellow1 active ">
       				<span class="note-content">经验内容仅供参考，如果您需解决具体问题(尤其法律、医学等领域)，建议您详细咨询相关领域专业人士.</span>
       			</div>
       		</div>
       		<div class="group-note">
       			<div class="note paper1 yellow active ">
       				<span class="note-content">经验内容仅供参考，如果您需解决具体问题(尤其法律、医学等领域)，建议您详细咨询相关领域专业人士.</span>
       				<span class="note-time">2015-11-19</span>
       			</div>
       			<div class="note paper2 yellow active ">
       				<span class="note-content">经验内容仅供参考，如果您需解决具体问题(尤其法律、医学等领域)，建议您详细咨询相关领域专业人士.</span>
       			</div>
       		</div>
       		<div class="group-note">
       			<div class="note paper3 yellow active ">
       				<span class="note-content">经验内容仅供参考，如果您需解决具体问题(尤其法律、医学等领域)，建议您详细咨询相关领域专业人士.</span>
       			</div>
       			<div class="note paper4 yellow1 active ">
       				<span class="note-content">经验内容仅供参考，如果您需解决具体问题(尤其法律、医学等领域)，建议您详细咨询相关领域专业人士.</span>
       			</div>
       		</div> -->
       		
       		
       	</div>
        <div class="notes-add"><img src="/todo1/todo2/Public/assets/pages/img/backwards/notes-add.png" alt=""/></div>
    </div>

    </section>
<!-- END PAGE-BODY -->

<!-- BEGIN CORE PLUGINS -->
    <script src="/todo1/todo2/Public/assets/global/plugins/jquery-2.1.1.js" type="text/javascript"></script>
    <script src="/todo1/todo2/Public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/todo1/todo2/Public/assets/global/plugins/modernizr.js" type="text/javascript"></script>
    <script src="/todo1/todo2/Public/assets/global/plugins/main.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN CORE GLOBAL -->
    <script src="/todo1/todo2/Public/assets/global/scripts/public.js" type="text/javascript"></script>
<!-- END CORE GLOBAL -->

<script type="text/javascript">
    /* GLOBAL URL */
    var _ROOT_ = '/todo1/todo2',
            _PUBLIC_ = '/todo1/todo2/Public',
            _INDEX_ = '/todo1/todo2/index.php',
            _ACTION_ = '/todo1/todo2/index.php/Home/List/notes',
            _MODULE_ = '/todo1/todo2/index.php/Home',
            _CONTROLLER_ = '/todo1/todo2/index.php/Home/List';
    window._ROOT_='/todo1/todo2';
    window._APP_='/todo1/todo2/index.php';
    window._ACTION_='<?php echo U("");?>';
    window._SELF_='<?php echo urldecode("/todo1/todo2/index.php/Home/List/notes");?>';
</script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
    
    <script src="/todo1/todo2/Public/assets/pages/scripts/notes.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->





</body>
</html>