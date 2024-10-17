$(document).ready(() => {
	$('.kb-dropdown-toggle').click((e) => {
		$(e.target).siblings().toggleClass('show-all');

		if ($(e.target).siblings().hasClass('show-all')) {
			$(e.target).html(
				'Show less <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.59672 4.58891L16.4291 11.4213C16.7586 11.7508 16.7586 12.285 16.4291 12.6145L15.6322 13.4114C15.3033 13.7404 14.7701 13.741 14.4404 13.4128L9.00009 7.99804L3.55983 13.4128C3.2301 13.741 2.69696 13.7404 2.368 13.4114L1.57111 12.6146C1.24159 12.285 1.24159 11.7508 1.57111 11.4213L8.40349 4.58894C8.73297 4.25942 9.2672 4.25942 9.59672 4.58891Z" fill="#B036C3"/></svg>',
			);
		} else {
			$(e.target).html(
				'Show all <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.40324 13.4115L1.57087 6.57905C1.24135 6.24953 1.24135 5.7153 1.57087 5.38581L2.36776 4.58893C2.69671 4.25997 3.22986 4.25934 3.55959 4.58752L8.99988 10.0023L14.4401 4.58752C14.7699 4.25934 15.303 4.25997 15.632 4.58893L16.4288 5.38581C16.7584 5.71533 16.7584 6.24957 16.4288 6.57905L9.59651 13.4115C9.26699 13.7409 8.73276 13.7409 8.40324 13.4115Z" fill="#B036C3"/></svg>',
			);
		}
	});

	jQuery('.elay-sidebar__body__main-cat').each(function () {
		if (jQuery(this).children().length > 3) {
			jQuery(this).siblings('.kb-dropdown-toggle').css('display', 'flex');
		} else {
			jQuery(this).siblings('.kb-dropdown-toggle').css('display', 'none');
		}
	});
});
