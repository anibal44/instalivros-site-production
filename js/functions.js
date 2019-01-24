$(document).ready(function() {

	//$('.modal').hide();

	$('#card-number').mask("0000 0000 0000 0000");
	$('#card-cvv').mask("0000");

	if ($(window).width() > 1024) {
		wow = new WOW(
			{
				
			}
		);
		wow.init();
	}

	
});