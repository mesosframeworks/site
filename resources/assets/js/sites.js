var getHeaderMinHeight = function () {
	
	$("#start").css("minHeight", $(window).height());
};

$(function(){
	
	getHeaderMinHeight();
	
	window.addEventListener("resize", getHeaderMinHeight);
});