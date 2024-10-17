jQuery(document).ready(($) => {
	$('.b-accordion .accordion .accordion-item:first-child').addClass(
		'is-active',
	);
	$(
		'.b-accordion .accordion .accordion-item:first-child .accordion-title',
	).attr('aria-expanded', 'true');
	$(
		'.b-accordion .accordion .accordion-item:first-child .accordion-title',
	).attr('aria-selected', 'true');
	$(
		'.b-accordion .accordion .accordion-item:first-child .accordion-content',
	).css('display', 'block');
	$(
		'.b-accordion .accordion .accordion-item:first-child .accordion-content',
	).attr('aria-hidden', 'false');
});
