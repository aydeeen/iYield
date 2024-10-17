<?php
// phpcs:ignoreFile

/**
 * About Block Template.
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

use FoundationPress\Blocks\Block_About;

$settings = $block;
$block    = new Block_About( $settings );

$id          = $block->get_anchor();
$class_names = $block->get_class_names();

$main_title    = get_field( 'main_title' ) ?: false;
$image         = get_field( 'image' ) ?: false;
$title_1       = get_field( 'title_1' ) ?: false;
$description_1 = get_field( 'description_1' ) ?: false;
$title_2       = get_field( 'title_2' ) ?: false;
$description_2 = get_field( 'description_2' ) ?: false;
$title_3       = get_field( 'title_3' ) ?: false;
$description_3 = get_field( 'description_3' ) ?: false;
$title_4       = get_field( 'title_4' ) ?: false;
$description_4 = get_field( 'description_4' ) ?: false;
$button        = get_field( 'button' ) ?: false;
$button_text   = get_field( 'button_text' ) ?: false;
$button_icon   = get_field( 'button_icon' ) ?: false;
?>

<section id="<?php echo esc_attr( $id ); ?>" class="section section--full b-about <?php echo esc_attr( $class_names ); ?>">
    <div class="b-about__overlay"></div>
    <div class="section__inner grid-x grid-padding-x grid-padding-y b-about__grid">
        <div class="cell">
            <h2 class="b-about__main-title"><?php echo esc_html( $main_title ); ?></h2>
        </div>
        <div class="cell large-6">
            <div>
                <h3 class="b-about__title"><?php echo esc_html( $title_1 ); ?></h3>
                <p class="b-about__description"><?php echo wp_kses_post( $description_1 ); ?></p>
                <div class="b-about__divider">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="cell large-6">
            <div class="b-about__image-wrapper">
                <?php echo wp_get_attachment_image( $image, 'full', false ); ?>
            </div>
        </div>
        <div class="cell">
            <div>
                <h3 class="b-about__title"><?php echo esc_html( $title_2 ); ?></h3>
                <p class="b-about__description"><?php echo wp_kses_post( $description_2 ); ?></p>
                <div class="b-about__divider">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="cell">
            <div>
                <h3 class="b-about__title"><?php echo esc_html( $title_3 ); ?></h3>
                <p class="b-about__description"><?php echo wp_kses_post( $description_3 ); ?></p>
                <div class="b-about__divider">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="cell">
            <div>
                <h3 class="b-about__title"><?php echo esc_html( $title_4 ); ?></h3>
                <p class="b-about__description"><?php echo wp_kses_post( $description_4 ); ?></p>
            </div>
        </div>
        <div class="cell">
            <div class="b-about__button-wrapper">
                <a href="<?php echo esc_url( $button ); ?>" class="button" target="_blank">             
                    <?php echo wp_kses_post( $button_icon ); ?>
                    <?php echo esc_html( $button_text ); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
// important: reset $block variable to initial value.
$block = $settings;


