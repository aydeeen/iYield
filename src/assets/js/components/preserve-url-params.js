jQuery(document).ready(($) => {
	[...document.querySelectorAll('body:not(.wp-admin) a')].forEach((e) => {
		const url = new URL(e.href);
		for (const [k, v] of new URLSearchParams(
			window.location.search,
		).entries()) {
			url.searchParams.set(k, v);
		}
		e.href = url.toString();
	});
});
