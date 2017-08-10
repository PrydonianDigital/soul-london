jQuery(function($) {
	$('.mobile-menu').on('click', 'a', function(e){
		e.preventDefault();
		$('body').toggleClass('open');
		$(this).find('i').toggleClass('fa-bars fa-times');
	});
	$('#mobileMenu').on('click', '.closer', function(e){
		e.preventDefault();
		$('body').toggleClass('open');
		$('.mobile-menu').find('i').toggleClass('fa-bars fa-times');
	});
});