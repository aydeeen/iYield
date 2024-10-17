<?php
// phpcs:ignoreFile

/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<section class="section section--full default-page">
	<div class="section__inner grid-x grid-padding-x grid-padding-y">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
			comments_template();
		endwhile;
		?>
	</div>
</section>

<?php
get_footer();