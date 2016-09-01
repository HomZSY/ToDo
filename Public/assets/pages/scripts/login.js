var login = function(){
	var getLoginInfo = function(){
		var pane = $('.login'),btn = $('.login-button');
        btn.on('click',function(e){
            var account = $('input[name="account"]').val();
            var key = $('input[name="password"]').val();
            $.post($.U('User/ajax_deal_login'), {account: account, key:key},function(r){
                console.log(r);
                if (pane.attr('data-state') === '') {
			        event.preventDefault();
			        pane.attr('data-state', 'loadingPrepare');
			        setTimeout(function(){
			          pane.attr('data-state', 'loadingStart'); 
			        }, 200);
			        setTimeout(function(){
			          pane.attr('data-state', 'loading'); 
			        }, 700);
			        setTimeout(function(){
			          pane.attr('data-state', 'loadingEnd'); 
			        }, 1250);
			        setTimeout(function(){
			          if(r.status) {
			            pane.attr('data-state', 'loadingEndOk'); 
			            $('.icon-ok .login-hi').html('Hello, ' + r.data+'<br>'+r.info);
			            $('.login-button-conf.OK').click(function(event){
			              event.preventDefault();
			              event.stopPropagation();
			              pane.attr('data-state', 'loadingAccess');
			              $('.icon-ok .login-hi').text('');
                    		location.href = $.U('Index/index');
			            });
			          } else {
			            pane.attr('data-state', 'loadingEndKo'); 
			            $('.icon-ko .login-hi').html(r.info);
			            $('.login-button-conf.KO').click(function(event){
			              event.preventDefault();
			              event.stopPropagation();
			              pane.attr('data-state', '');
			            });
			          }
			        }, 1300);
			      }else {
			        event.preventDefault();
			        pane.attr('data-state', '');
			      }
            });
        });
    }();	

}();