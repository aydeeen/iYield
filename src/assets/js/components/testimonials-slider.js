const Flickity = require('flickity');

$(() => {
	const testimonials = $('.b-testimonials__slider');
	if (testimonials.length > 0) {
		const testimonialsFlickity = new Flickity(testimonials.get(0), {
			pageDots: true,
			prevNextButtons: true,
			initialIndex: 1,
			wrapAround: true,
		});
	}
});
