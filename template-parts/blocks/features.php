<?php
// phpcs:ignoreFile

/**
 * Features Block Template.
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

use FoundationPress\Blocks\Block_Features;

$settings = $block;
$block    = new Block_Features( $settings );

$id          = $block->get_anchor();
$class_names = $block->get_class_names();

$title = get_field( 'title' ) ?: false;
?>

<section id="<?php echo esc_attr( $id ); ?>" class="section section--full b-features <?php echo esc_attr( $class_names ); ?>">
    <div class="section__inner grid-x grid-padding-x grid-padding-y">
        <div class="cell">
            <div>
                <h2 class="text-center b-features__title"><?php echo esc_html( $title ); ?></h2>
                <div class="b-features__layout">
                    <?php if ( have_rows( 'items' ) ): ?>
                        <?php while ( have_rows( 'items' ) ): the_row();
                            $icon        = get_sub_field( 'icon' ) ?: false;
                            $description = get_sub_field( 'description' ) ?: false;
                            ?>
                                <div class="b-features__box">
                                    <div class="icon-wrapper">
                                        <?php echo wp_kses_post( $icon ); ?>
                                    </div>                           
                                    <span><?php echo esc_html( $description ); ?></span>
                                </div>		
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// important: reset $block variable to initial value.
$block = $settings;


