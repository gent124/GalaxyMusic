$(".menu-are-main li").on('click', '.menu-area-main li', function() {
	$(".menu-area-main li").removeClass("active");
	$(this).addClass("active");
});