const Flickity = require('flickity');

$(() => {
	const options = {
		pageDots: true,
		prevNextButtons: true,
		cellAlign: 'left',
		adaptiveHeight: true,
		groupCells: 1,
	};

	if (
		matchMedia('screen and (min-width: 599px) and (max-width: 899px)').matches
	) {
		options.groupCells = 2;
	}

	if (matchMedia('screen and (min-width: 900px)').matches) {
		options.groupCells = 3;
	}

	const posts = $('.posts-slider');

	if (posts.length > 0) {
		const postsFlickity = new Flickity(posts.get(0), options);
	}
});
