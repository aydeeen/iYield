jQuery(document).ready(() => {
	jQuery('.eckb-breadcrumb-nav').prepend(`
    <a href="/">
        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_1683_25729)">
            <path d="M20.4931 10.4047C20.4931 11.0297 19.9722 11.5193 19.3819 11.5193H18.2708L18.2951 17.0818C18.2951 17.1756 18.2882 17.2693 18.2778 17.3631V17.9221C18.2778 18.6895 17.6562 19.311 16.8889 19.311H16.3333C16.2951 19.311 16.2569 19.311 16.2188 19.3075C16.1701 19.311 16.1215 19.311 16.0729 19.311H14.9444H14.1111C13.3438 19.311 12.7222 18.6895 12.7222 17.9221V17.0888V14.8665C12.7222 14.252 12.2257 13.7554 11.6111 13.7554H9.38889C8.77431 13.7554 8.27778 14.252 8.27778 14.8665V17.0888V17.9221C8.27778 18.6895 7.65625 19.311 6.88889 19.311H6.05556H4.94792C4.89583 19.311 4.84375 19.3075 4.79167 19.304C4.75 19.3075 4.70833 19.311 4.66667 19.311H4.11111C3.34375 19.311 2.72222 18.6895 2.72222 17.9221V14.0332C2.72222 14.002 2.72222 13.9672 2.72569 13.936V11.5193H1.61111C0.986111 11.5193 0.5 11.0332 0.5 10.4047C0.5 10.0922 0.604167 9.81445 0.847222 9.5714L9.75 1.81098C9.99306 1.56793 10.2708 1.5332 10.5139 1.5332C10.7569 1.5332 11.0347 1.60265 11.2431 1.77626L20.1111 9.5714C20.3889 9.81445 20.5278 10.0922 20.4931 10.4047Z" fill="#d5dce7"></path>
            </g>
            <defs>
            <clipPath id="clip0_1683_25729">
                <rect width="20" height="20" fill="white" transform="translate(0.5 0.700195)"></rect>
            </clipPath>
            </defs>
        </svg>
    </a>
    <span class="eckb-breadcrumb-link-icon ep_font_icon_arrow_carrot_right" aria-hidden="true" style="font-size: 12px; margin-right: 10px;"></span>
`);

	jQuery('#epkb-ml-search-modern-layout').append(
		`<p class="text-center" style="margin: 30px 0 0 0; color: #889EBE">If you don't find what you are looking for please ask us on <a href="https://discord.com/invite/KVy5nqKUtU" target="_blank" rel="noopener">Discord</a> or <a href="https://twitter.com/iYieldCrypto" target="_blank" rel="noopener">X</a>.</p>`,
	);

	jQuery('.epkb-ml-search-box__btn').prepend('Search');

	jQuery('.elay-sidebar__cat__top-cat__body-container').append(
		'<h5 class="kb-dropdown-toggle">Show all <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.40324 13.4115L1.57087 6.57905C1.24135 6.24953 1.24135 5.7153 1.57087 5.38581L2.36776 4.58893C2.69671 4.25997 3.22986 4.25934 3.55959 4.58752L8.99988 10.0023L14.4401 4.58752C14.7699 4.25934 15.303 4.25997 15.632 4.58893L16.4288 5.38581C16.7584 5.71533 16.7584 6.24957 16.4288 6.57905L9.59651 13.4115C9.26699 13.7409 8.73276 13.7409 8.40324 13.4115Z" fill="#B036C3"/></svg></h5>',
	);
});
