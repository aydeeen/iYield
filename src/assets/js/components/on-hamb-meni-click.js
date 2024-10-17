$(document).ready(() => {
	$('.menu-icon').click((event) => {
		if ($('.site-header .top-bar').css('display') === 'none') {
			$('.site-header__mobile-signup-link').removeClass('hide-mobile-signup');
		} else {
			$('.site-header__mobile-signup-link').addClass('hide-mobile-signup');
		}

		$(event.currentTarget).toggleClass('active-icon');
	});

	$('#menu-header-1 a').click((event) => {
		$('.top-bar').css('display', 'none');
		$('.menu-icon').removeClass('active-icon');
	});
});
