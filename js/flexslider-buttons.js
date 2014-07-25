jQuery(function($){
	$('#carousel-nav-prev').click(function() {
		$('#flexslider-1').flexslider("prev")
		return false;
	});
	$('#carousel-nav-next').click(function() {
		$('#flexslider-1').flexslider("next")
		return false;
	});
});