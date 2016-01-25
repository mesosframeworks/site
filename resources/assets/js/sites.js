var getHeaderMinHeight = function () {
	
	$("header").css("minHeight", $(window).height());
};

$(function(){
	
	getHeaderMinHeight();
	
	window.addEventListener("resize", getHeaderMinHeight);
});