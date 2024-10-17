<?php
// phpcs:ignoreFile

/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if (!function_exists('foundationpress_enqueue_scripts')):
	function foundationpress_enqueue_scripts()
	{

		// Enqueue the stylesheet.
		wp_enqueue_style(
			'foundationpress-styles',
			get_template_directory_uri() . '/dist/assets/css/main.css',
			false,
			filemtime(get_template_directory() . '/dist/assets/css/main.css')
		);

		// Enqueue the scripts.
		wp_enqueue_script(
			'foundationpress-scripts-runtime',
			get_template_directory_uri() . '/dist/assets/js/runtime.js',
			['jquery'],
			filemtime(get_template_directory() . '/dist/assets/js/runtime.js'),
			true
		);

		wp_enqueue_script(
			'foundationpress-scripts',
			get_template_directory_uri() . '/dist/assets/js/app.js',
			['jquery'],
			filemtime(get_template_directory() . '/dist/assets/js/app.js'),
			true
		);

		// Add the comment-reply library on pages where it is necessary
		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}

	}

	add_action('wp_enqueue_scripts', 'foundationpress_enqueue_scripts');
endif;

function fopr_admin_enqueue_scripts()
{
	global $pagenow;

	// fix password field is removed
	if ('user-new.php' !== $pagenow) {
		// Enqueue the stylesheet.
		wp_enqueue_style(
			'foundationpress-admin-styles',
			get_template_directory_uri() . '/dist/assets/css/admin.css',
			['jquery'],
			filemtime(get_template_directory() . '/dist/assets/css/admin.css')
		);

		// Enqueue the scripts.
		wp_enqueue_script(
			'foundationpress-scripts-runtime',
			get_template_directory_uri() . '/dist/assets/js/runtime.js',
			['jquery'],
			filemtime(get_template_directory() . '/dist/assets/js/runtime.js'),
			true
		);

		wp_enqueue_script(
			'foundationpress-scripts',
			get_template_directory_uri() . '/dist/assets/js/app.js',
			false,
			filemtime(get_template_directory() . '/dist/assets/js/app.js'),
			true
		);
	}
}
add_action('admin_enqueue_scripts', 'fopr_admin_enqueue_scripts');

function new_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function my_custom_fonts()
{
	echo '<style>
		.editor-styles-wrapper {
			background: #fefefe !important;
		} 
		.editor-styles-wrapper.editor-styles-wrapper h1, .editor-styles-wrapper.editor-styles-wrapper h2, .editor-styles-wrapper.editor-styles-wrapper h3, .editor-styles-wrapper.editor-styles-wrapper h4, .editor-styles-wrapper.editor-styles-wrapper h5, .editor-styles-wrapper.editor-styles-wrapper h6, .editor-styles-wrapper.editor-styles-wrapper p, .editor-styles-wrapper.editor-styles-wrapper li, .editor-styles-wrapper.editor-styles-wrapper td, .editor-styles-wrapper.editor-styles-wrapper th, .editor-styles-wrapper.editor-styles-wrapper figcaption {
			color: #0a0a0a;
		} 
   </style>';
}
add_action('admin_head', 'my_custom_fonts');

add_filter('the_excerpt', function ($excerpt) {
	if (class_exists('RankMath')) {
		global $post;
		$desc = RankMath\Post::get_meta('description', $post->ID);
		if (!empty($desc)) {
			$excerpt = $desc;
		}
	}
	return $excerpt;
});

function fix_acf_field_post_id_on_preview($post_id, $original_post_id) {
    // Don't do anything to options
    if (is_string($post_id) && str_contains($post_id, 'option')) {
        return $post_id;
    }
    // Don't do anything to blocks
    if (is_string($original_post_id) && str_contains($original_post_id, 'block')) {
        return $post_id;
    }

    // This should only affect on post meta fields
    if (is_preview()) {
		if ( $original_post_id !== $post_id ) {
			// Check if $post_id is a revision
			$parent_post_id = wp_is_post_revision( $post_id );

			if ( $parent_post_id === $original_post_id ) {
				return get_the_ID();
			}
		}
    }

    return $post_id;
}
add_filter('acf/validate_post_id', __NAMESPACE__ . '\fix_acf_field_post_id_on_preview', 10, 2);

function custom_footer_html() {
    echo '<p style="color: #889EBE; font-weight: 600">If this article has not answered your question please reach out to us on <a href="https://discord.gg/KVy5nqKUtU" target="_blank" rel="noopener">Discord</a> or <a href="https://twitter.com/iYieldCrypto" target="_blank" rel="noopener">X</a>.</p>';
}

add_action('eckb-article-content-footer', 'custom_footer_html', 10, 4);


wp_register_script( 'add-acf-fields', get_template_directory_uri() . '/src/assets/js/components/add-acf-fields.js', array('jquery'), true );
wp_enqueue_script( 'add-acf-fields' );
wp_localize_script( 'add-acf-fields', 'acf_vars', array(
		'widget_title' => get_field( 'kb_index_widget_title', 'option' ),
		'widget_title_link' => get_field( 'kb_index_widget_title_link', 'option' ),
	)
);