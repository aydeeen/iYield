<?php
// phpcs:ignoreFile

/**
 * Assets Block Template.
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

use FoundationPress\Blocks\Block_Assets;

$settings = $block;
$block    = new Block_Assets( $settings );

$id          = $block->get_anchor();
$class_names = $block->get_class_names();

$title                 = get_field( 'title' ) ?: false;
$subtitle              = get_field( 'subtitle' ) ?: false;
$protocols_title        = get_field( 'protocols_title' ) ?: false;
$protocols_image        = get_field( 'protocols_image' ) ?: false;
$protocols_image_mobile = get_field( 'protocols_image_mobile' ) ?: false;
?>

<section id="<?php echo esc_attr( $id ); ?>" class="section section--full b-assets <?php echo esc_attr( $class_names ); ?>">
    <div class="b-assets__overlay"></div>
    <div class="section__inner grid-x grid-padding-x grid-padding-y b-assets__grid">
        <div class="cell">
            <div>
                <h2 class="text-center b-assets__title"><?php echo wp_kses_post( $title ); ?></h2>
                <h3 class="text-center b-assets__subtitle"><?php echo wp_kses_post( $subtitle ); ?></h3>
                <div class="b-assets__protocols">
                    <h4 class="title"><?php echo wp_kses_post( $protocols_title ); ?></h4>
                    <?php echo wp_get_attachment_image( $protocols_image, 'full', false, ['class' => 'show-for-large'] ); ?>
                    <?php echo wp_get_attachment_image( $protocols_image_mobile, 'full', false, ['class' => 'hide-for-large'] ); ?>
                </div>
                <div class="b-assets__layout">
                    <?php if ( have_rows( 'items' ) ): ?>
                        <?php while ( have_rows( 'items' ) ): the_row();
                            $link        = get_sub_field( 'link' ) ?: false;
                            $icon        = get_sub_field( 'icon' ) ?: false;
                            $description = get_sub_field( 'description' ) ?: false;
                            ?>
                                <?php if ( $link ) { ?>
                                    <a href="<?php echo esc_url( $link ); ?>" class="b-assets__box">
                                        <div class="icon-wrapper">
                                            <?php echo wp_kses_post( $icon ); ?>
                                        </div>                           
                                        <span><?php echo esc_html( $description ); ?></span>
                                    </a>
                                <?php } else { ?>
                                    <div class="b-assets__box">
                                        <div class="icon-wrapper">
                                            <?php echo wp_kses_post( $icon ); ?>
                                        </div>                           
                                        <span><?php echo esc_html( $description ); ?></span>
                                    </div>	
                                <?php }
                        endwhile;
                    endif;
                    ?>
                </div>
                <p class="show-for-small-only b-assets__show-more">Show more <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.46868 11.9213L1.39546 5.84805C1.10255 5.55514 1.10255 5.08027 1.39546 4.78739L2.1038 4.07905C2.39621 3.78664 2.87012 3.78608 3.16321 4.0778L7.99902 8.89095L12.8348 4.0778C13.1279 3.78608 13.6018 3.78664 13.8942 4.07905L14.6026 4.78739C14.8955 5.0803 14.8955 5.55517 14.6026 5.84805L8.52937 11.9213C8.23646 12.2142 7.76159 12.2142 7.46868 11.9213Z" fill="#C05ECF"/></svg></p>
            </div>
        </div>
    </div>
</section>

<?php
// important: reset $block variable to initial value.
$block = $settings;


