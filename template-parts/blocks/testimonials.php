<?php
// phpcs:ignoreFile

/**
 * Testimonials Block Template.
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

use FoundationPress\Blocks\Block_Testimonials;

$settings = $block;
$block    = new Block_Testimonials( $settings );

$id          = $block->get_anchor();
$class_names = $block->get_class_names();

$title = get_field( 'title' ) ?: false;
?>

<section id="<?php echo esc_attr( $id ); ?>" class="section section--full b-testimonials <?php echo esc_attr( $class_names ); ?>">
    <div class="section__inner grid-x grid-padding-x grid-padding-y">
        <div class="cell">
            <div>
                <h2 class="b-testimonials__title"><?php echo esc_html( $title ); ?></h2>
            </div>
        </div>

        <div class="cell">
			<div class="b-testimonials__slider">
			   <?php
				if ( have_rows( 'testimonials' ) ) :
					while ( have_rows( 'testimonials' ) ) :
						the_row();
						$image       = get_sub_field( 'image' ) ?: false;
						$name        = get_sub_field( 'name' ) ?: false;
						$position    = get_sub_field( 'position' ) ?: false;
                        $testimonial = get_sub_field( 'testimonial' ) ?: false;
						?>
							<div class="carousel-cell">
								<div class="b-testimonials__testimonial">
									<?php echo wp_get_attachment_image( $image, 'full', false ); ?>
									<div class="content">
										<p class="text"><?php echo esc_html( $testimonial ); ?></p>
										<h3 class="name"><?php echo esc_html( $name ); ?></h3>
										<h4 class="position"><?php echo esc_html( $position ); ?></h4>
									</div>
								</div>
							</div>
						<?php
					endwhile;
				endif;
				?>
			</div>
		</div>

    </div>
</section>

<?php
// important: reset $block variable to initial value.
$block = $settings;


