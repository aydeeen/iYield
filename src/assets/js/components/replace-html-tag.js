jQuery(document).ready(() => {
	const attribute = {};
	const htmlTag = $(
		'.single-epkb_post_type_1 #epkb-ml__module-search .epkb-ml-search-title',
	);
	$.each(htmlTag[0].attributes, (id, atr) => {
		attribute[atr.nodeName] = atr.nodeValue;
	});
	htmlTag.replaceWith(function () {
		return $('<div class="epkb-ml-search-title" />', attribute).append(
			$(this).contents(),
		);
	});
});
