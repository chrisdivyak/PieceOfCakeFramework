$(window).ready(function () {
	$('body').hide();
	$('body').fadeIn(300);

	//LAZY LOAD SCRIPTS
	$('table').exists(function() {
		$.loadScript('assets/js/stackable-tables.js', true);
	});

	//FLEXNAV
	$('.flexnav').exists(function() {
		//INITIALIZE FLEXNAV
		$(".flexnav").flexNav({
			'hoverIntent': true // Change to true for use with hoverIntent plugin
		});
		$('head').append('<link rel="stylesheet" type="text/css" href="assets/css/flexnav.css">');
	});
});