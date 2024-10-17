<?php
// phpcs:ignoreFile

/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

$footer_logo      = get_field( 'footer_logo', 'option' ) ?: false;
$footer_tagline   = get_field( 'footer_tagline', 'option' ) ?: false;
$footer_copyright = get_field( 'footer_copyright', 'option' ) ?: false;
?>

<footer class="section section--full footer">
	<div class="section__inner grid-x grid-padding-x grid-padding-y footer__grid">
	    <div class="cell small-12 medium-6">
	   	    <div>
                <?php echo wp_get_attachment_image( $footer_logo, 'full', false, [ 'class' => 'logo' ] ); ?>
                <div class="footer__divider">
                    <div></div>
                    <div></div>
                </div>
                <p class="tagline"><?php echo esc_html( $footer_tagline ); ?></p>
            </div>
        </div>

        <div class="cell small-12 medium-5">
            <div class="footer__navigation">
                <?php if ( have_rows( 'footer_navigation', 'option' ) ): ?>
                    <?php while ( have_rows( 'footer_navigation', 'option' ) ): the_row();
                        $link            = get_sub_field( 'link' ) ?: false;
                        $label           = get_sub_field( 'label' ) ?: false;
                        $icon            = get_sub_field( 'icon' ) ?: false;
                        $open_in_new_tab = get_sub_field( 'open_in_new_tab' ) ?: false;
                        ?>
                            <a href="<?php echo esc_url( $link ); ?>" <?php if ($open_in_new_tab && in_array ( "Yes", $open_in_new_tab )) echo 'target="_blank"'; ?> >
                                <?php echo wp_kses_post( $icon ); ?>
                                <?php echo esc_html( $label ); ?>
                            </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="cell">
            <div class="footer__bottom">
                <p class="copyright"><?php echo esc_html( $footer_copyright ); ?></p>
                <div class="socials">
                    <?php if ( have_rows( 'footer_socials', 'option' ) ): ?>
                        <?php while ( have_rows( 'footer_socials', 'option' ) ): the_row();
                            $link = get_sub_field( 'link' ) ?: false;
                            $icon = get_sub_field( 'icon' ) ?: false;
                            ?>
                                <a href="<?php echo esc_url( $link ); ?>" target="_blank">
                                    <?php echo wp_kses_post( $icon ); ?>
                                </a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
	</div>
</footer>

<?php if ( get_theme_mod( 'foundationpress_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
