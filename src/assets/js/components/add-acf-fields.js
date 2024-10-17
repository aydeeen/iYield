jQuery(document).ready(() => {
	const widgetTitle = acf_vars.widget_title;
	const widgetTitleLink = acf_vars.widget_title_link;

	jQuery('.single-epkb_post_type_1 #elay-sidebar-container-v2').prepend(
		`<h4 class="kb-widget-title"><a href="${widgetTitleLink}">${widgetTitle}</a></h4>`,
	);
});
