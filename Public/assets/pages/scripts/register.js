var register = function (){
	function strlength (str) { //统计字符个数(一个汉字算2个)
		if(!str){
			str = '';
		}
		var strl = 0;
		var l = str.length;
		for (var i = 0; i < l; i++) {
			if (str.charCodeAt(i) < 0 ||  str.charCodeAt(i) > 255)
				strl = strl + 2;
			else
				strl++;
		}
		return strl;
	};
	var pane = $('.login'),btn = $('.login-button');
	btn.on('click',function(){
		event.preventDefault();
		var username = $('input[name="username"]').val();
		var account = $('input[name="account"]').val();
		var password = $('input[name="password"]').val();
		var cpassword = $('input[name="cpassword"]').val();
		var str = /^\w+$/;  
		var abc = /[\u4e00-\u9fa5\w]+$/; 
		$.post($.U('User/doRegister'),{userName:username,namelen:strlength(username),abcname:abc.test(username),
			account:account,accountlen:strlength(account),straccount:str.test(account),password:password,passwordlen:strlength(password),cPassWord:cpassword},function(data){
				console.log(data)
				if (data.status == 1 || data.status == 2) {
					$('.nametip').html(data.info);
					setTimeout(function(){
						location.reload();
					},800);
				}else if (data.status == 3 || data.status == 4 || data.status == 6) {
					$('.notip').html(data.info);
					setTimeout(function(){
						location.reload();
					},800);
				}else if (data.status == 5) {
					$('.passwordtip').html(data.info);
					setTimeout(function(){
						location.reload();
					},800);
				}else if (data.status == 7) {
					$('.cpasswordtip').html(data.info);
					setTimeout(function(){
						location.reload();
					},800);
				}else{
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
				        	if(data.status == 8){
					            pane.attr('data-state', 'loadingEndOk'); 
					            $('.icon-ok .login-hi').html(data.info);
					            $('.login-button-conf.OK').click(function(event){
					              event.preventDefault();
					              event.stopPropagation();
					              pane.attr('data-state', 'loadingAccess');
					              $('.icon-ok .login-hi').text('');
		                    		location.href = $.U('User/login');
					            });
				           } else {
					            pane.attr('data-state', 'loadingEndKo'); 
					            $('.icon-ko .login-hi').html(data.info);
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
				}
				
				
			

		});
	});
}();