function delayer(){
	window.location.href = $.U('User/login');
}
function strlength(str) {  
	var strl = 0;
	var l = str.length;
	for (var i = 0; i < l; i++) {
		//È«½Ç×Ö·û
		if (str.charCodeAt(i) < 0 ||  str.charCodeAt(i) > 255)
			strl = strl + 2;
		else
			strl++;
	}
	return strl;
}
$(function(){
	$('.btn').on('click',function(){
		event.preventDefault();
		var username = $('#username').val();
		var sex = $("input[type='radio']:checked").val();
		var account = $("#account").val();
		var password = $("#password").val();
		var cpassword = $("#cpassword").val();
		var str = /^\w+$/;  
		var abc = /[\u4e00-\u9fa5\w]+$/; 
		$.post($.U('User/doRegister'),{userName:username,namelen:strlength(username),abcname:abc.test(username),sex:sex,
			account:account,accountlen:strlength(account),straccount:str.test(account),password:password,
			passwordlen:strlength(password),cPassWord:cpassword},function(data){
			console.log(data.data);
			if(data.status == 1 || data.status == 2){
				$('.nametip').html(data.info);
			}else if(data.status == 3 || data.status == 4 || data.status == 6){
				$('.notip').html(data.info);
			}else if(data.status == 5){
				$('.passwordtip').html(data.info);
			}else if(data.status == 7){
				$('.cpasswordtip').html(data.info);
			}else{
				$('.result').html(data.info);
				if(data.status == 8){
					location.href = $.U('User/login');
				}
			}
			setTimeout(function(){
				location.reload();
			},800);

		});
	});
});