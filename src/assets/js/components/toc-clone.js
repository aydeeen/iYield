const sideBarTOC = () => {
	const $list = $('#rank-math-toc').find('nav > ul li').clone();

	$('#sidebar-toc ul').append($list);

	$(window).resize(() => {
		$('#sidebar-toc ul').append($list);
	});

	$(window).scroll(() => {
		if ($(document).scrollTop() > 10) {
			$('.post-sidebar__content').css('top', '140px');
		} else {
			$('.post-sidebar__content').css('top', '0');
		}
	});
};

sideBarTOC();
