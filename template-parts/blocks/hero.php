<?php
// phpcs:ignoreFile

/**
 * Hero Block Template.
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

use FoundationPress\Blocks\Block_Hero;

$settings = $block;
$block    = new Block_Hero( $settings );

$id          = $block->get_anchor();
$class_names = $block->get_class_names();

$bg_image    = get_field( 'bg_image' ) ?: false;
$logo        = get_field( 'logo' ) ?: false;
$title       = get_field( 'title' ) ?: false;
$subtitle    = get_field( 'subtitle' ) ?: false;
$button      = get_field( 'button' ) ?: false;
$button_text = get_field( 'button_text' ) ?: false;
$button_icon = get_field( 'button_icon' ) ?: false;
$image       = get_field( 'image' ) ?: false;
$description = get_field( 'description' ) ?: false;
?>

<section id="<?php echo esc_attr( $id ); ?>" class="section section--full b-hero <?php echo esc_attr( $class_names ); ?>" style="background-image: url('<?php echo esc_url( $bg_image['url'] ); ?>');">
    <div class="b-hero__overlay-first"></div>
    <div class="b-hero__overlay-second"></div>
    <div class="section__inner grid-x grid-padding-x grid-padding-y b-hero__grid">
        <div class="cell">
            <div class="text-center"> 
                <?php echo wp_get_attachment_image( $logo, 'full', false, ['class' => 'b-hero__logo'] ); ?>
                <h1 class="b-hero__title"><?php echo esc_html( $title ); ?></h1>
                <h3 class="b-hero__subtitle"><?php echo esc_html( $subtitle ); ?></h3>
                <div class="b-hero__button-wrapper">
                    <a href="<?php echo esc_url( $button ); ?>" class="button" target="_blank">
                        <?php echo wp_kses_post( $button_icon ); ?>
                        <?php echo esc_html( $button_text ); ?>
                    </a>
                </div>
                <?php echo wp_get_attachment_image( $image, 'full', false, ['class' => 'b-hero__image'] ); ?>
                <p id="features" class="b-hero__description"><?php echo esc_html( $description ); ?></p>
            </div>
        </div>
    </div>
</section>

<?php
// important: reset $block variable to initial value.
$block = $settings;
