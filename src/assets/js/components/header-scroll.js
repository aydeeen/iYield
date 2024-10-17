$(document).ready(() => {
	$(window).scroll(() => {
		if ($(window).scrollTop() > 100) {
			$('.site-header').addClass('header-scroll');
		} else {
			$('.site-header').removeClass('header-scroll');
		}
	});
});
