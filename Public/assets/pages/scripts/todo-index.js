var Index = function () {
	title = function () {
		$(".title_div .titlel").fadeToggle("slow");
		$(".title_div .titler").fadeToggle("slow");
	};
	setInterval("title()",150);
}();