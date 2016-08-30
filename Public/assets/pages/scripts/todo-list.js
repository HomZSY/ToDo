
var DoList = function() {

  /*  var loading = function(){
        var $loading = $(".loading");
        var $list_main = $(".list-main");
        var $page = $(".all-page");
        $(document).ajaxStart(function(){
            $loading.show();
            $list_main.hide();
            $page.hide();
        }).ajaxStop(function(){
            $loading.hide();
            $list_main.show();
            $page.show();
        });
    }
    var do_egg_img = function(){
        var color = ['', 'red', 'orange', 'blue', 'green'];
        $(".list-main .list-pic").each(function(){
            var is_finished = $(this).attr('data-finish');
            var level_id = $(this).attr('data-level');
            if(is_finished == 0) {
                $(this).css({
                    "background":'url('+_PUBLIC_+'/assets/pages/img/list/'+color[level_id]+'.png) no-repeat',
                    "background-size" : 'contain',
                    "marginLeft" : '10px'
                });
            }else {
                $(this).css({
                    "background":'url('+_PUBLIC_+'/assets/pages/img/list/'+color[level_id]+'-egg.png) no-repeat',
                    "background-size" : 'contain',
                    "marginLeft" : '10px'
                });
            }
        });
    }*/

    var addList = function() {
        //console.log(123);
        $(".list-title .click-picture").on('click', function(){
            $(this).css({background: 'url('+_PUBLIC_+'/assets/pages/img/list/hen1.png) no-repeat', backgroundSize: 'contain'});
            $(".list-centent .egg-close").show().animate({
            	top: '20px'
            },1000,function(){
            	var li_list = '';
            	if ($('ul.timeline li:first').attr('class')) { //表面第一个li在时间轴右边
            		li_list = '<li>'
							+'<div class="timeline-badge"></div><div class="timeline-panel">'
			              		+'<p class="timeline-title"></p>'
			              		+'<p class="timeline-content"></p>'
			              		+'<p class="timeline-endtime"></p>'
					        +'</div></li>'
            	} else {
            		li_list = '<li class="right">'
							+'<div class="timeline-badge"></div><div class="timeline-panel">'
			              		+'<p class="timeline-title"></p>'
			              		+'<p class="timeline-content"></p>'
			              		+'<p class="timeline-endtime"></p>'
					        +'</div></li>'
            	}
            	$('.list-centent .timeline').prepend(li_list);
            	$(this).stop().hide().css('top','-100px');
            });
            setTimeout(function() {
                $('.click-picture').css({background: 'url('+_PUBLIC_+'/assets/pages/img/list/hen.png) no-repeat', backgroundSize: 'contain'});
            }, 1100);
        });
    }
    /*var doSelect = function (data , selected){
        if (!data)  data = [
            { id: '', name: '-- 点击选择 --'},
            { id: '1', name: '生活'},
            { id: '2', name: '学习'},
            { id: '3', name: '其它'}
        ];
        else
            data.unshift({ id : '', name : '-- 点击选择 --'});

        var tpl = '<option value=\'{:id}\'>{:name}</option>'
        var html = '<select name="category" id="category" class="form-control category">';
        $.each(data, function(k , v){
            if(v['id'] == selected){
                html += '<option selected value=\''+(v['id'] || '')+'\'>'+(v['name'] || '')+'</option>';
                return true;  //相当于continue
            }
            html += tpl.replace(/\{:(\w+)}/g , function(k1 , v1){
                return v[v1] || '';
            });
        });
        html += '</select>';
        //console.log(html);
        return html;
    }

    var defaultTime = function(){
        Date.prototype.Format = function(fmt){
            var o = {
                "M+" : this.getMonth()+1,                 //月份
                "d+" : this.getDate(),                    //日
                "h+" : this.getHours(),                   //小时
                "m+" : this.getMinutes(),                 //分
                "s+" : this.getSeconds(),                 //秒
                "q+" : Math.floor((this.getMonth()+3)/3), //季度
                "S"  : this.getMilliseconds()             //毫秒
            };
            if(/(y+)/.test(fmt))
                fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));
            for(var k in o)
                if(new RegExp("("+ k +")").test(fmt))
                    fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));
            return fmt;
        }
        return (new Date()).Format("yyyy-M-d h:m:s");
    }

    var layer = function(){
        $(".page-body .list-main").on('click','.list-title',function(event){
            var id=$(this).parent().prev('.list-pic').attr('data-id');
            var select_html = doSelect();
            if(!id){
                $(this).jquery_modal({
                    modal_title : '<div class="caption">'
                                       +'设置事件'
                                  +'</div>',
                    modal_content : '<form class="add-form">'
                                    +'<lable for="title">标　　题:</lable><input type="text" id="title" class="form-control" name="title" placeholder="输入2-15个字的标题"><br/>'
                                    +'<lable for="category">分　　类:</lable>&nbsp;'
                                    + select_html
                                    +'<div>文本内容:</div><textarea id="content" name="content" rows="8" cols="22" class="" ></textarea><br/>'
                                    +'<lable>下蛋时间:</lable><input id="create-time" type="text" class="form-control add-start-time" placeholder="点击选择" onfocus="WdatePicker({dateFmt:\'yyyy-M-d H:mm:ss\'})" value=\"'+defaultTime()+'\"/><br/>'
                                    +'<lable>孵化时间:</lable><input id="do-time" type="text" class="form-control" placeholder="点击选择" onfocus="WdatePicker({dateFmt:\'yyyy-M-d H:mm:ss\'})"/><br/>'
                                    +'</form>'
                                    +'<br>'
                                    +'<div class="portlet-buttom">'
                                    +'<lable class="egg-tip">紧急程度:</lable>'
                                    +'<i class="icon-egg red"></i>'
                                    +'<i class="icon-egg orange"></i>'
                                    +'<i class="icon-egg blue"></i>'
                                    +'<i class="icon-egg green"></i>'
                                    +'</div>',
                    modal_btn : {
                        confirm : {color:'#61BB61' , content:'确定'},
                        cancel : {color:'#818481' , content:'取消'}
                    }
                });
            }
            else{
                $.get($.U('detail/get_detail_id'),{id:id},function(r){
                    //console.log(r);
                    var l_id=r['detail'][0]['level_id'];
                    var category_id = r['detail'][0]['category_id'];
                    var l_color='';
                    switch (l_id) {
                        case '1':
                            l_color = '#d84a38';
                            break;
                        case '2':
                            l_color = "#f2784b";
                            break;
                        case '3':
                            l_color = "#32A1CE";
                            break;
                        case '4':
                            l_color = "#35aa47";
                            break;
                    };
                    $('.modal-main').css('border-bottom-color',l_color);
                    $('.modal-box-title').css({
                        'padding': '20px',
                        'border-bottom':'1px solid #eee',
                        'background-color':l_color
                    });
                    var select_tpl = doSelect(null , category_id);
                    $(this).jquery_modal({
                        modal_title : '<div class="caption" data-id="'+ r['id']+'" level-id="'+ r['detail'][0]['level_id']+'">修改事件</div>',
                        modal_content :
                                '<form class="add-form">'
                                +'<lable for="title">标　　题:</lable><input type="text" id="title" class="form-control" name="title" value="'+(r['detail'][0]['title'] || '')+'"><br/>'
                                +'<lable for="category">分　　类:</lable>&nbsp;'
                                + select_tpl
                                +'<div>文本内容:</div><textarea id="content" name="content" rows="8" cols="22" class="" >'+( r['detail'][0]['title'] || '' )+'</textarea><br/>'
                                +'<lable>下蛋时间:</lable><input id="create-time" type="text" class="form-control" value="'+( r['detail'][0]['create_time'] || '')+'" placeholder="点击选择" onfocus="WdatePicker({dateFmt:'+'\'yyyy-M-d H:mm:ss\''+'})"/><br/>'
                                +'<lable>孵化时间:</lable><input id="do-time" type="text" class="form-control" value="'+( r['detail'][0]['do_time'] || '')+'" placeholder="点击选择" onfocus="WdatePicker({dateFmt:'+'\'yyyy-M-d H:mm:ss\''+'})"/><br/>'
                                +'</form>'
                                +'<br>'
                                +'<div class="portlet-buttom">'
                                +'<lable class="egg-tip">紧急程度:</lable>'
                                +'<i class="icon-egg red"></i>'
                                +'<i class="icon-egg orange"></i>'
                                +'<i class="icon-egg blue"></i>'
                                +'<i class="icon-egg green"></i>'
                                +'</div>',
                        modal_btn : {
                            update : {color:'#61BB61' , content:'确认'},
                            cancel : {color:'#818481' , content:'取消'}
                        }
                    });
                });
            }
        });
    }

    var changeEgg = function(){
        $(".list-main").on('click','.list-pic',function(event){
            $("html,body").animate({scrollTop:0},200);
            var self = $(this);
            var id = self.attr('data-id');
            var is_finished = self.attr('data-finish');
            var color = ['','red','orange','blue','green'];
            $.post($.U('list/ajax_change_finished'),{
                id : id ,
                is_finished : is_finished
            },function(r){
                if(!r.status) return false;
                //console.log(r);
                if(r.status){
                    self.attr('data-finish', r.data.is_finished);
                    if(r.data.is_finished == 0) {
                        self.css({
                            "background":'url('+_PUBLIC_+'/assets/pages/img/list/'+color[r.data.level_id]+'.png) no-repeat',
                            "background-size" : 'contain',
                            "marginLeft" : '10px'
                        });
                    }else {
                        self.css({
                            "background":'url('+_PUBLIC_+'/assets/pages/img/list/'+color[r.data.level_id]+'-egg.png) no-repeat',
                            "background-size" : 'contain',
                            "marginLeft" : '10px'
                        });
                    }
                }
                self.jquery_modal({
                    modal_title : "操作提醒",
                    modal_content : r.info,
                    modal_btn : {
                        confirm_finish : {color:'#61BB61' , content:'确定'}
                    }
                });

                $(".modal-box-btn").on('click','.modal-btn-confirm_finish',function(){
                    $(".modal-mask").fadeOut();
                    $(".modal-main").slideUp();
                });

            });
        });
    }*/

    /*var deleteEggs = function(){
        $(".list-main").on('click','.btn-input-close',function(){
            var the = $(this);
            var self = $(this).parents().prev();
            var id = self.attr('data-id');
            var is_finish = self.attr('data-finish');
            //console.log(id);
            //console.log(is_finish);
            if(id == undefined){
                self.jquery_modal({
                    modal_title : "温馨提示",
                    modal_content : "未添加内容!",
                    modal_btn : {
                        del : {color:'#61BB61' , content:'删除'},
                        no_del : {color:'#818481' , content:'不删除'}
                    }
                });
                $(".modal-box-btn").on('click','.modal-btn-del',function(){
                    the.parents('.list-input').remove();
                    $(".modal-mask").fadeOut();
                    $(".modal-main").slideUp();
                });
            }else if(is_finish === '0'){
                self.jquery_modal({
                    modal_title : "温馨提示",
                    modal_content : "任务未完成, 确定删除 ？",
                    modal_btn : {
                        confirm_del : {color:'#61BB61' , content:'删除'},
                        no_del : {color:'#818481' , content:'不删除'}
                    }
                });
            }else{
                self.jquery_modal({
                    modal_title : "温馨提示",
                    modal_content : "确定删除 ？",
                    modal_btn : {
                        confirm_del : {color:'#61BB61' , content:'删除'},
                        no_del : {color:'#818481' , content:'不删除'}
                    }
                });
            }*/
            /*公共不删除按钮处理*/
//          $(".modal-box-btn").on('click','.modal-btn-no_del',function(){
//              $(".modal-mask").fadeOut();
//              $(".modal-main").slideUp();
//          });
            /*删除按钮处理*/
//          $(".modal-box-btn").on('click','.modal-btn-confirm_del',function(){
                /*$(".modal-mask").fadeOut();
                 $(".modal-main").slideUp();*/
              /*  $.post($.U('list/ajax_del'),{
                    id : id ,
                    is_finished : is_finish
                },function(r){
                    // console.log(r);
                    $(this).jquery_modal({
                        modal_title : "温馨提示",
                        modal_content : r.info,
                        modal_btn : {
                            confirm_delete : {color:'#61BB61' , content:'确定'}
                        }
                    });
                    $(".modal-box-btn").on('click','.modal-btn-confirm_delete',function(){
                        $(".modal-mask").fadeOut();
                        $(".modal-main").slideUp();
                        $.get($.U('list/ajax_todo_list'),function(r){
                            //console.log(r);
                            if(!r.status) return false;
                            listPackage(r.data);
                            do_egg_img();
                        });
                    });
                });
            });
        });
    }
    var listPackage = function(data){
        if (!data) return false;
        var tpl = ""
            +'<div class="list-input">'
            +'<div class="list-pic" data-finish={:is_finished} data-id={:id} data-level={:level_id}>'
            +'</div>'
            +'<div class="list-inp">'
            +'<input type="text" class="list-title" id="list-title" value={:title}>'
            +'<button type="button" class="btn-input-close">×</button>'
            +'</div>'
            +'<div class="clear-fix"></div>'
            +'</div>';
        var html = "";
        //console.log(data);
        var do_time = '';
        $.each( data , function(k , v){
            do_time = v['do_time'] || '';
            html += tpl.replace(/\{:(\w+)}/g , function(k1 , v1){
                if(v1 === 'title'){
                    return v[v1].substr(0,7) +"-|-"+do_time || '';
                }
                return v[v1] || '';
            });
        });
        $(".list-main").html( html );
    }
    var listSearchEgg = function(){
        $("#list-search-egg .icon-egg").on('click',function(){
            var level_id = $(this).attr('data-level');
            var color = $(this).css('color');
            $(".search-no-finish").css('color',color).attr('data-level',level_id);
            $(".search-finish").css('color',color).attr('data-level',level_id);
            $.post($.U('list/ajax_search_level'),{
                level_id : level_id
            },function(r){
                // console.log(r);
                if(r.data.length == 0){
                    $(".all-page").html('');
                    $(".list-main").html( "<div style='text-align:center;'>暂无事件</div>" );
                }else{
                    listPackage(r.data);
                    do_egg_img();
                    $(".all-page").html('<div class="level-flag" data-level="'+level_id+'"></div>'+r.ajax_page);
                }
            });
        });
    }

    var ajaxPage = function() {
        $(".all-page").on("click", 'a', function (e) {
            e.preventDefault();
            var str = $(this).text() || '';
            var pp = '';

            var selfp = $(this).parent();
            var level_id = selfp.prev(".level-flag").attr('data-level');
            var start_time = selfp.prev(".time-flag").attr('data-start-time');
            var end_time = selfp.prev(".time-flag").attr('data-end-time');
            var do_start_time = selfp.prev(".time-flag").attr('data-do-start-time');
            var do_end_time = selfp.prev(".time-flag").attr('data-do-end-time');
            var category_id = selfp.prev(".time-flag").attr('data-category-id');
            var level_fin_id = selfp.prev(".fin-lev-flag").attr('data-level-id');
            var fin_level_id = selfp.prev(".fin-lev-flag").attr('data-is-finished');

            if (str === '下一页') {
                pp = $('.current').next().html() || '';
            } else if (str === '上一页') {
                pp = $('.current').prev().html() || '';
            } else {
                pp = str;
            }
            if( fin_level_id == '1' || fin_level_id == '0' ){
                $.post($.U('list/ajax_page_fin_lev?p='+pp),{
                    level_id : level_fin_id,
                    is_finished : fin_level_id,
                    p : pp
                },function(r){
                    //console.log(r);
                    listPackage(r.data);
                    do_egg_img();
                    $(".all-page").html('<div class="fin-lev-flag" data-level-id="'+level_fin_id+'" data-is-finished="'+fin_level_id+'"></div>'+(r.ajax_page || ''));
                });
            }else if(level_id){
                $.post($.U('list/ajax_page_level?p='+pp),{
                    p : pp,
                    level_id : level_id
                },function(r){
                    listPackage(r.data);
                    do_egg_img();
                    $(".all-page").html('<div class="level-flag" data-level="'+level_id+'"></div>' + (r.ajax_page || ''));
                });
            }else if((start_time && end_time) || (do_start_time && do_end_time) || category_id){
                $.post($.U('list/ajax_page_time?p='+pp),{
                    p : pp,
                    start_time : start_time,
                    end_time : end_time,
                    do_start_time : do_start_time,
                    do_end_time : do_end_time,
                    category_id : category_id
                },function(r){
                    //console.log(r);
                    listPackage(r.data);
                    do_egg_img();
                    $(".all-page").html('<div class="time-flag" data-start-time="'+start_time+'" data-end-time="'+end_time+'" data-do-start-time="'+do_start_time+'" data-do-end-time="'+do_end_time+'"></div>'+(r.ajax_page || ''));
                });
            }else{
                $.post($.U('list/ajax_page?p='+pp),{
                    p : pp
                },function(r){
                    listPackage(r.data);
                    do_egg_img();
                    $(".all-page").html((r.ajax_page || ''));
                });
            }

        });
    }

    var timeCategorySearch = function(){
        $(".btn-go").on('click',function(){
            var start_time_str = $(".start-time").val() || 0;
            var end_time_str = $(".end-time").val() || 0;
            var do_start_time_str = $(".do-start-time").val() || 0;
            var do_end_time_str = $(".do-end-time").val() || 0;
            var category_id = $(this).parent().find("#list-search-category option:selected").val() || 0;
            //console.log(category_id);
            //console.log(start_time);
            //console.log(end_time);
            var start_time = Date.parse(new Date(start_time_str));
            var end_time = Date.parse(new Date(end_time_str));
            var do_start_time = Date.parse(new Date(do_start_time_str));
            var do_end_time = Date.parse(new Date(do_end_time_str));
            start_time = start_time / 1000;
            end_time = end_time / 1000;
            do_start_time = do_start_time / 1000;
            do_end_time = do_end_time / 1000;

            //console.log(start_time);
            //console.log(end_time);
            //console.log(do_start_time);
            //console.log(do_end_time);

            if(start_time > end_time || do_start_time > do_end_time){
                $(this).jquery_modal({
                    modal_title : "温馨提示",
                    modal_content : "起始时间大于终止时间",
                    modal_btn : {
                        confirm_time : {color:'#61BB61' , content:'确定'}
                    }
                });
                $(".modal-box-btn").on('click','.modal-btn-confirm_time',function(){
                    $(".modal-mask").hide();
                    $(".modal-main").hide();
                    $(".start-time").val('');
                    $(".end-time").val('');
                    $(".do-start-time").val('');
                    $(".do-end-time").val('');
                });
            }else{
                $.post($.U('list/ajax_search_time'),{
                    start_time : start_time,
                    end_time : end_time,
                    do_start_time : do_start_time,
                    do_end_time : do_end_time,
                    category_id : category_id
                },function(r){
                    //console.log(r);
                    if(r.data.length == 0){
                        $(".all-page").html('');
                        $(".list-main").html( "<div style='text-align:center;'>暂无事件</div>" );
                    }else{
                        listPackage(r.data);
                        do_egg_img();
                        $(".all-page").html('<div class="time-flag" data-start-time="'+start_time+'" data-end-time="'+end_time+'" data-do-start-time="'+ do_start_time +'" data-do-end-time="'+ do_end_time +'" data-category-id="'+ category_id +'"></div>'+(r.ajax_page || ''));
                    }
                });
            }

        });
    }
    var finishLevelSearch = function(){
        $(".list-search-egg").on('click','.search',function(){
            var self = $(this);
            var level_id = self.attr('data-level');
            var is_finished = self.attr('data-finished');
            //console.log(level_id);
            //console.log(is_finished);

            $.post($.U('list/ajax_search_fin_lev'),{
                level_id : level_id,
                is_finished : is_finished
            },function(r){
                //console.log(r);
                if(r.data.length == 0){
                    $(".all-page").html('');
                    $(".list-main").html( "<div style='text-align:center;'>暂无事件</div>" );
                }else{
                    listPackage(r.data);
                    do_egg_img();
                    $(".all-page").html('<div class="fin-lev-flag" data-level-id="'+level_id+'" data-is-finished="'+is_finished+'"></div>'+r.ajax_page);
                }
            });
        });
    }
    var refresh = function(){
        $(".list-search-egg").on('click','.search-refresh',function(){
            $(".search-no-finish").attr({'data-level':''}).css('color','#fff');
            $(".search-finish").attr({'data-level':''}).css('color','#fff');
            $(".start-time").val('');
            $(".end-time").val('');
            $(".do-start-time").val('');
            $(".do-end-time").val('');
            $.get($.U('list/ajax_todo_list'),function(r){
                //console.log(r);
                if(!r.status) return false;

                if(r.data.length == 0){
                    $(".all-page").html('');
                    $(".list-main").html( "<div style='text-align:center;'>暂无事件</div>" );
                }else{
                    listPackage(r.data);
                    do_egg_img();
                    $(".all-page").html('<div class="refresh-flag" ></div>'+(r.ajax_page || ''));
                }
            });

        });
    }
    var start = function(){
        $.get($.U('list/ajax_todo_list'),function(r){
            //console.log(r);
            if(!r.status) return false;
            if(r.data.length == 0){
                $(".all-page").html('');
                $(".list-main").html( "<div style='text-align:center;'>暂无事件</div>" );
            }else{
                listPackage(r.data);
                do_egg_img();
                $(".all-page").html('<div class="refresh-flag" ></div>'+(r.ajax_page || ''));
            }
        });
    }


    var addSelect = function(){
        var html = doSelect();
        var html = $(html).html();
        var tpl = '<select name="category" class="form-control search-category">' + html + '</select>';
        $("#list-search-category").html(tpl);
    }
    var categorySearch = function(){
        $('#list-search-category').on('change',function(){
            $(".btn-go").trigger('click');
        });
    }*/
    return {
        init: function () {
//          categorySearch();
//          addSelect();
//          start();
//          refresh();
//          do_egg_img();
            addList();
//          layer();
//          changeEgg();
//          deleteEggs();
//          listSearchEgg();
//          loading();
//          ajaxPage();
//          timeCategorySearch();
//          finishLevelSearch();
        }
    };
}();
