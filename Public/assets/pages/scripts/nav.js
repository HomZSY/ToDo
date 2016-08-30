
var nav = function () {
	$('#toggle').on('click',function(){
		if ($("input#toggle[type='checkbox']").is(':checked')) {
			$('.back').fadeIn();
		} else {
			$('.back').fadeOut();
		}
	})
}();
