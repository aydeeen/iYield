<?php
// phpcs:ignoreFile

/**
 * Message Block Template.
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

use FoundationPress\Blocks\Block_Message;

$settings = $block;
$block    = new Block_Message( $settings );

$id          = $block->get_anchor();
$class_names = $block->get_class_names();

$title   = get_field( 'title' ) ?: false;
$icon    = get_field( 'icon' ) ?: false;
$content = get_field( 'content' ) ?: false;
?>

<section id="<?php echo esc_attr( $id ); ?>" class="b-message <?php echo esc_attr( $class_names ); ?>">
    <div class="b-message__header">
        <?php if ( $icon ): ?>
            <?php echo wp_kses_post( $icon ); ?>
        <?php endif; ?>
        <?php if ( $title ): ?>
            <h4><?php echo esc_html( $title ); ?></h4>
        <?php endif; ?>
    </div>
    <?php if ( $content ): ?>
        <div class="b-message__content"><?php echo wp_kses_post( $content ); ?></div>    
    <?php endif; ?>
</section>

<?php
// important: reset $block variable to initial value.
$block = $settings;


