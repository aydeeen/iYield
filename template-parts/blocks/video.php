<?php
/**
 * Video Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   int|string $post_id The post ID this block is saved to.
 * @package FoundationPress
 */

// we can disable some phpcs rules because we are not in the global scope.
// phpcs:disable WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
// phpcs:disable WordPress.WP.GlobalVariablesOverride.Prohibited

use FoundationPress\Blocks\Block_Video;

$settings = $block;
$block    = new Block_Video( $settings );

$id          = $block->get_anchor();
$class_names = $block->get_class_names();

$video_id    = get_field( 'video_id' ) ?: false;
$title       = get_field( 'title' ) ?: false;
$description = get_field( 'description' ) ?: false;
$bg_image    = get_field( 'bg_image' ) ?: false;
?>

<section id="<?php echo esc_attr( $id ); ?>" class="section section--full b-video <?php echo esc_attr( $class_names ); ?>" style="background-image: url('<?php echo esc_url( $bg_image['url'] ); ?>');">
	<div class="b-video__overlay"></div>
	<div class="section__inner grid-x grid-padding-x grid-padding-y">
	   	<div class="cell">
		   	<div class="b-video__content text-on-video">
				<h2 class="title"><?php echo esc_html( $title ); ?></h2>
				<p class="description"><?php echo esc_html( $description ); ?></p>
			</div>
			<div class="youtube" id="<?php echo esc_html( $video_id ); ?>" src="<?php fopr_assets_uri(); ?>/images/video-thumbnail.jpg"></div>
			<script type="text/javascript" src="https://codegena.com/assets/js/youtube-embed.js"></script>
    	</div>
	</div>
</section>

<?php
// important: reset $block variable to initial value.
$block = $settings;
